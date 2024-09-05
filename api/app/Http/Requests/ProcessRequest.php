<?php

namespace App\Http\Requests;

use App\Http\Resources\BaseResource;
use App\Models\Process;
use Illuminate\Foundation\Http\FormRequest;

class ProcessRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'processes' => 'required|array',
                'processes.*.id' => 'required|integer|exists:processes,id',
                'processes.*.title' => 'required|string|max:255',
                'processes.*.description' => 'required|string',
                'processes.*.main_photo' => 'sometimes|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'processes.*.hover_photo' => 'sometimes|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }

        return [];
    }

    public function messages(): array
    {
        return [
            'processes.required' => 'The processes field is required.',
            'processes.array' => 'The processes field must be an array.',
            'processes.*.id.required' => 'The process ID is required.',
            'processes.*.id.integer' => 'The process ID must be an integer.',
            'processes.*.id.exists' => 'The process ID must exist in the processes table.',
            'processes.*.title.required' => 'The title is required.',
            'processes.*.title.string' => 'The title must be a string.',
            'processes.*.title.max' => 'The title may not be greater than 255 characters.',
            'processes.*.description.required' => 'The description is required.',
            'processes.*.description.string' => 'The description must be a string.',
            'processes.*.main_photo.file' => 'The main photo must be a file.',
            'processes.*.main_photo.mimes' => 'The main photo must be a file of type: jpeg, png, jpg, gif, svg.',
            'processes.*.main_photo.max' => 'The main photo may not be greater than 2048 kilobytes.',
            'processes.*.hover_photo.file' => 'The hover photo must be a file.',
            'processes.*.hover_photo.mimes' => 'The hover photo must be a file of type: jpeg, png, jpg, gif, svg.',
            'processes.*.hover_photo.max' => 'The hover photo may not be greater than 2048 kilobytes.',
        ];
    }

    public function getProcesses(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return BaseResource::collection(Process::all());
    }

    public function storeProcesses(): \Illuminate\Http\JsonResponse
    {
        $processes = $this->input('processes', []);
        $status = true;

        foreach ($processes as $index => $processData) {
            $item = Process::find($processData['id']);
            if ($item) {
                $item->title = $processData['title'];
                $item->description = $processData['description'];

                if ($this->hasFile("processes.{$index}.main_photo")) {
                    $mainPhoto = $this->file("processes.{$index}.main_photo");
                    $fileName = $mainPhoto->getClientOriginalName();
                    $filePath = public_path('/uploads/processes/');
                    $mainPhoto->move($filePath, $fileName);
                    $item->main_photo = $fileName;
                }

                if ($this->hasFile("processes.{$index}.hover_photo")) {
                    $hoverPhoto = $this->file("processes.{$index}.hover_photo");
                    $fileName = $hoverPhoto->getClientOriginalName();
                    $filePath = public_path('/uploads/processes/');
                    $hoverPhoto->move($filePath, $fileName);
                    $item->hover_photo = $fileName;
                }

                $update = $item->save();
                if (!$update) {
                    $status = false;
                }
            }
        }

        if (!$status) {
            return response()->json(['message' => 'Something went wrong'], 422);
        }

        return response()->json(['message' => 'Processes were updated successfully', 'ok' => true], 200);
    }
}
