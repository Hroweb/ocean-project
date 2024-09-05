<?php

namespace App\Http\Requests;

use App\Http\Resources\BaseResource;
use App\Models\EventLogo;
use Illuminate\Foundation\Http\FormRequest;

class EventLogoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [];

        if ($this->isMethod('post') || $this->isMethod('put') || $this->isMethod('patch')) {
            if ($this->input('isNew')) {
                $rules = [
                    'title' => 'required|string|max:255',
                    'logo' => 'required|file|mimes:jpg,jpeg,png,svg|max:2048',
                ];
            } else {
                $rules = [
                    'logos' => 'required|array',
                    'logos.*.id' => 'required|integer|exists:clients,id',
                    'logos.*.title' => 'required|string|max:255',
                    'logos.*.logo' => 'sometimes|file|mimes:jpg,jpeg,png,svg|max:2048',
                ];
            }
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title is required.',
            'logo.required' => 'The logo is required.',
            'logo.mimes' => 'The logo must be a file of type: jpg, jpeg, png, svg.',
            'logo.max' => 'The logo may not be greater than 2048 kilobytes.',
            'logos.required' => 'The logos field is required.',
            'logos.*.id.required' => 'The client ID is required.',
            'logos.*.id.exists' => 'The selected client ID is invalid.',
            'logos.*.title.required' => 'The title is required.',
            'logos.*.title.max' => 'The title may not be greater than 255 characters.',
            'logos.*.logo.mimes' => 'The logo must be a file of type: jpg, jpeg, png, svg.',
            'logos.*.logo.max' => 'The logo may not be greater than 2048 kilobytes.',
        ];
    }

    public function getEventLogos(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return BaseResource::collection(EventLogo::orderBy('id', 'desc')->get());
    }

    public function storeEventLogos(): \Illuminate\Http\JsonResponse
    {
        $validatedData = $this->validated();
        if ($this->input('isNew')){
            $item = new EventLogo();
            $item->title = $this->input('title') ?? false;

            if ($this->hasFile("logo")) {
                $logo = $this->file("logo");
                $fileName = $logo->getClientOriginalName();
                $filePath = public_path('/uploads/event-logos/');
                $logo->move($filePath, $fileName);
                $item->logo = $fileName;
            }

            if ($item->save()) {
                return response()->json(['message' => 'Event Logo added successfully', 'ok' => true]);
            } else {
                return response()->json(['message' => 'Something went wrong'], 422);
            }
        }else{
            $eventLogos = $this->input('logos', []);
            if ($eventLogos) {
                $status = true;

                foreach ($eventLogos as $index => $logoData) {
                    $item = EventLogo::find($logoData['id']);

                    if ($item) {
                        $item->title = $logoData['title'];

                        if ($this->hasFile("logos.{$index}.logo")) {
                            $logo = $this->file("logos.{$index}.logo");
                            $fileName = $logo->getClientOriginalName();
                            $filePath = public_path('/uploads/event-logos/');
                            $logo->move($filePath, $fileName);
                            $item->logo = $fileName;
                        }

                        if (!$item->save()) {
                            $status = false;
                        }
                    }
                }

                if ($status) {
                    return response()->json(['message' => 'Event logos were updated successfully', 'ok' => true], 200);
                } else {
                    return response()->json(['message' => 'Something went wrong'], 422);
                }
            }
        }

        return response()->json(['message' => 'Empty data'], 422);
    }

    public function deleteEventLogo($id): \Illuminate\Http\JsonResponse
    {
        $id = $this->route('id');

        // Create a new array that includes the id from the route
        $data = array_merge($this->all(), ['id' => $id]);

        // Manually validate the id
        $validator = \Validator::make($data, [
            'id' => 'required|integer|exists:event_logos,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $item = EventLogo::find($id);
        if ($item) {
            if (!$item->delete()) {
                return response()->json(['message' => 'Something went wrong'], 422);
            }
            return response()->json(['message' => 'Event Logo deleted successfully', 'ok' => true]);
        } else {
            return response()->json(['message' => 'Event Logo not found'], 404);
        }
    }
}
