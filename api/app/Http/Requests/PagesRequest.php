<?php

namespace App\Http\Requests;

use App\Models\Dashboard\Meta;
use App\Models\Dashboard\Pages;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Validator;

class PagesRequest extends FormRequest
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
            foreach ($this->all() as $key => $value) {
                if (str_starts_with($key, 'selectedFiles')) {
                    if ($key === 'selectedFiles_banner_pf_banner_anim' || $key === 'selectedFiles_banner_banner_animation') {
                        $rules[$key] = 'file|mimes:json|max:7048';
                    } elseif ($key === 'selectedFiles_video_video') {
                        $rules[$key] = 'file|mimes:mp4,webm|max:7048';
                    }
                    else {
                        $rules[$key] = 'file|mimes:jpg,jpeg,png,svg|max:2048';
                    }
                } else {
                    $rules[$key] = 'required|string';
                }
            }
        }

        return $rules;
    }

    // Get page data with meta fields dynamically for all pages
    public function getPageData($slug)
    {
        $page = Pages::where('slug', $slug)->first();
        if( is_null($page) ) return Response::json(['error' => 'Page not found!'], 404);

        $groupedMeta = $page->meta->groupBy('subtype');
        $transformedMeta = Helper::sortPageData($groupedMeta);
        unset($page->meta);
        if($groupedMeta->isNotEmpty()) $page->pageMeta = $transformedMeta;

        return $page;
    }

    // Update page data with meta's dynamically for all pages
    public function updatePageData($pageId): \Illuminate\Http\JsonResponse
    {
        if (!$pageId) {
            return response()->json(['message' => 'Page ID is required'], 422);
        }

        $validator = Validator::make($this->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $page = Pages::find($pageId);
        if (!$page) {
            return response()->json(['message' => 'Page not found'], 404);
        }

        $fileFields = $this->determineFileFieldsForPage($page);

        $uploads = $this->handleFileUploads($this, $fileFields, $page->slug);
        $data = $this->except(['_token', '_method']);

        $existingMetas = Meta::where('metable_id', $pageId)
            ->get()
            ->keyBy(function ($item) {
                return $item->subtype . '_' . $item->meta_key;
            });

        $updates = [];
        foreach ($data as $fullKey => $value) {
            if (str_starts_with($fullKey, 'selectedFiles')) {
                $parts = explode('_', $fullKey);
                if (count($parts) >= 3) {
                    array_shift($parts);
                    $subType = $parts[0];
                    $key = implode('_', array_slice($parts, 1));
                } else {
                    continue;
                }
            } else {
                [$subType, $key] = explode('_', $fullKey, 2);
            }

            $lookupKey = $subType . '_' . $key;

            if (array_key_exists($fullKey, $uploads)) {
                $value = $uploads[$fullKey];
            }

            if (isset($existingMetas[$lookupKey])) {
                $existingMetas[$lookupKey]->meta_value = $value;
                $existingMetas[$lookupKey]->save();
            } else {
                $updates[] = [
                    'meta_key' => $key,
                    'meta_value' => $value,
                    'metable_type' => get_class($page),
                    'metable_id' => $pageId,
                    'subtype' => $subType,
                ];
            }
        }

        if (!empty($updates)) {
            Meta::insert($updates);
        }

        return response()->json(['message' => 'Page updated successfully', 'ok' => true]);
    }

    protected function handleFileUploads(Request $request, array $fileFields, $pageTitle): array
    {
        $uploads = [];
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                // Ensuring a unique file name to avoid collisions
                $fileName = $file->getClientOriginalName();
                $filePath = public_path('/uploads/'.$pageTitle.'/');
                $file->move($filePath, $fileName);
                // Store the relative path or URL as needed
                $uploads[$field] = /*'/uploads/' .*/ $fileName; // Relative path from public directory
            }
        }
        return $uploads;
    }

    protected function determineFileFieldsForPage($page): array
    {
        // Example logic to determine file fields based on the page type
        return match ($page->slug) {
            'home' => ['selectedFiles_video_video', 'selectedFiles_video_poster', 'selectedFiles_banner_banner_animation'],
            'about-us' => ['selectedFiles_banner_banner', 'selectedFiles_grow_box1_icon', 'selectedFiles_grow_box2_icon', 'selectedFiles_grow_box3_icon'],
            'services', 'contact-us' => ['selectedFiles_banner_banner'],
            'portfolio' => ['selectedFiles_banner_pf_banner_anim'],
            default => [],
        };
    }
}
