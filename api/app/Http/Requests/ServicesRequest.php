<?php

namespace App\Http\Requests;

use App\Http\Resources\BaseResource;
use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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
        // Define different validation rules based on the request action
        $rules = [];

        // Determine the action based on the route or other criteria
        if ($this->isMethod('post') || $this->isMethod('put') || $this->isMethod('patch')) {
            foreach ($this->all() as $key => $value) {
                if (isset($value['id'])) {
                    $rules["$key.id"] = 'required|integer|exists:services,id';
                }
                $rules["$key.title"] = 'required|string|max:255';
                $rules["$key.subtitle"] = 'required|string|max:255';
                $rules["$key.description"] = 'required|string';
                $rules["$key.fulltext"] = 'required|string';
            }
        } /*elseif ($this->isMethod('delete')) {
            $rules = [
                'id' => 'required|integer|exists:services,id',
            ];
        }*/

        return $rules;
    }

    public function getServices(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return BaseResource::collection(Service::all());
    }

    public function storeServices(): \Illuminate\Http\JsonResponse
    {
        $services = $this->validated();

        $newRecords = [];
        $existingRecords = [];

        foreach ($services as $service) {
            if (empty($service['id'])) {
                // New record
                $newRecords[] = [
                    'title' => $service['title'],
                    'subtitle' => $service['subtitle'],
                    'description' => $service['description'],
                    'fulltext' => $service['fulltext'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            } else {
                // Existing record
                $existingRecords[$service['id']] = [
                    'title' => $service['title'],
                    'subtitle' => $service['subtitle'],
                    'description' => $service['description'],
                    'fulltext' => $service['fulltext'],
                    'updated_at' => now(),
                ];
            }
        }

        // Insert new records
        if (!empty($newRecords)) {
            Service::insert($newRecords);
        }

        // Update existing records
        if (!empty($existingRecords)) {
            foreach ($existingRecords as $id => $data) {
                Service::where('id', $id)->update($data);
            }
        }

        return response()->json(['message' => 'Services processed successfully.', 'ok' => true]);
    }

    public function removeService($id): \Illuminate\Http\JsonResponse
    {
        $record = Service::where('id', $id)->delete();
        if(!$record) {
            return response()->json(['message' => 'Service not found'], 422);
        }

        return response()->json(['message' => 'Service has been removed', 'ok' => true], 200);
    }

    public function messages(): array
    {
        return [
            '*.id.required' => 'The service ID is required for existing services.',
            '*.id.exists' => 'The service ID must exist in the services table.',
            '*.title.required' => 'The title is required.',
            '*.subtitle.required' => 'The subtitle is required.',
            '*.description.required' => 'The description is required.',
            '*.fulltext.required' => 'The fulltext is required.',
        ];
    }
}
