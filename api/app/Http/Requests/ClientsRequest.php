<?php

namespace App\Http\Requests;

use App\Http\Resources\BaseResource;
use App\Models\Clients;
use Illuminate\Foundation\Http\FormRequest;

class ClientsRequest extends FormRequest
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

    public function getClients(): \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $orderBy = $this->query('orderBy', 'desc'); // Default to 'desc' if not provided

        // Validate the orderBy parameter
        if (!in_array($orderBy, ['asc', 'desc'])) {
            return response()->json(['message' => 'Invalid orderBy parameter'], 422);
        }
        // Retrieve clients with the specified order
        return BaseResource::collection(Clients::orderBy('id', $orderBy)->get());
    }

    public function storeClients(): \Illuminate\Http\JsonResponse
    {
        $validatedData = $this->validated();

        if ($this->input('isNew')) {
            $item = new Clients();
            $item->title = $validatedData['title'];

            if ($this->hasFile('logo')) {
                $logo = $this->file('logo');
                $fileName = $logo->getClientOriginalName();
                $filePath = public_path('/uploads/clients/');
                $logo->move($filePath, $fileName);
                $item->logo = $fileName;
            }

            if (!$item->save()) {
                return response()->json(['message' => 'Something went wrong'], 422);
            }

            return response()->json(['message' => 'Client added successfully', 'ok' => true]);
        } else {
            $clients = $validatedData['logos'];
            $status = true;

            foreach ($clients as $index => $client) {
                $item = Clients::find($client['id']);
                if ($item) {
                    $item->title = $client['title'];

                    if ($this->hasFile("logos.{$index}.logo")) {
                        $logo = $this->file("logos.{$index}.logo");
                        $fileName = $logo->getClientOriginalName();
                        $filePath = public_path('/uploads/clients/');
                        $logo->move($filePath, $fileName);
                        $item->logo = $fileName;
                    }

                    if (!$item->save()) {
                        $status = false;
                    }
                }
            }

            if (!$status) {
                return response()->json(['message' => 'Something went wrong'], 422);
            }

            return response()->json(['message' => 'Clients updated successfully', 'ok' => true], 200);
        }
    }

    public function deleteClients(): \Illuminate\Http\JsonResponse
    {
        $id = $this->route('id');

        // Create a new array that includes the id from the route
        $data = array_merge($this->all(), ['id' => $id]);

        // Manually validate the id
        $validator = \Validator::make($data, [
            'id' => 'required|integer|exists:clients,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $item = Clients::find($id);
        if ($item) {
            if (!$item->delete()) {
                return response()->json(['message' => 'Something went wrong'], 422);
            }
            return response()->json(['message' => 'Client deleted successfully', 'ok' => true]);
        } else {
            return response()->json(['message' => 'Client not found'], 404);
        }
    }
}
