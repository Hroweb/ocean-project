<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\GalleryRequest;

class GalleryController extends BaseController
{
    public function index(GalleryRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getImages(), 'Images retrieved successfully');
    }

    public function store(GalleryRequest $request): \Illuminate\Http\JsonResponse
    {
        $status = $request->storeImages();

        if (!$status) {
            return response()->json(['message' => 'Error occurred while uploading files'], 422);
        }

        return response()->json(['message' => 'Photos uploaded successfully!', 'ok' => true]);
    }

    public function delete(GalleryRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $status = $request->deleteImage($id);

        if (!$status) {
            return response()->json(['message' => 'Photo not found or could not be deleted.'], 422);
        }

        return response()->json(['message' => 'Photo deleted successfully.', 'ok' => true], 200);
    }
}
