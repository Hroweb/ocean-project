<?php

namespace App\Http\Requests;

use App\Http\Resources\BaseResource;
use App\Models\Gallery;
use Illuminate\Foundation\Http\FormRequest;
use Intervention\Image\Laravel\Facades\Image;

class GalleryRequest extends FormRequest
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
        if ($this->isMethod('post') || $this->isMethod('put') || $this->isMethod('patch')) {
            return [
                'selectedImages' => 'required|array',
                'selectedImages.*.file' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }

        return [];
    }

    public function getImages(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $perPage = $this->input('per_page') ?? 50;
        return BaseResource::collection(Gallery::paginate($perPage));
    }

    public function storeImages(): bool
    {
        $images = $this->file('selectedImages'); // This retrieves all files under 'selectedImages'
        $photosData = [];

        if ($images && count($images) > 0) {
            foreach ($images as $index => $fileArray) {
                // Assuming each 'selectedImages[index]' contains a 'file' key
                if (isset($fileArray['file']) && $fileArray['file']->isValid()) {
                    $file = $fileArray['file'];
                    $fileName = $file->getClientOriginalName();
                    $filePath = public_path('/uploads/gallery/');
                    $thumbPath = public_path('/uploads/gallery/thumbs/'.$fileName);

                    $thumbnail = Image::read($file);
                    $thumbnail->resize(260, 260, function ($constraint) {
                        $constraint->aspectRatio();
                    });

                    $file->move($filePath, $fileName);
                    $thumbnail->save($thumbPath, 80);

                    $photosData[] = [
                        'thumb' => $fileName,
                        'image' => $fileName,
                        'rel'   => 'about',
                        'created_at' => now(),
                        'updated_at' => now(),
                        // Add any other fields you need, like 'user_id' if applicable
                    ];
                }
            }
            Gallery::insert($photosData);
            return true;
        }
        return false;
    }

    public function deleteImage($id): bool
    {
        if (!$id) {
            return false;
        }

        // Attempt to find the EventLogo by ID.
        $image = Gallery::find($id);

        if ($image) {
            $filePath = public_path("/uploads/gallery/{$image->image}"); // Convert relative path to absolute path
            $thumbPath = public_path("/uploads/gallery/thumbs/{$image->image}"); // Convert relative path to absolute path
            if (file_exists($filePath)) {
                unlink($filePath); // PHP's native file deletion function
            }
            if (file_exists($thumbPath)) {
                unlink($thumbPath); // PHP's native file deletion function
            }
            $image->delete();
            return true;
        } else {
            return false;
        }
    }
}
