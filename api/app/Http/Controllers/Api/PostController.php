<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\PostRequest;


class PostController extends BaseController
{
    public function index(PostRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getPosts(), 'Posts retrieved successfully.');
    }

    public function show(PostRequest $request): \Illuminate\Http\JsonResponse|\App\Http\Resources\BaseResource
    {
        return $request->getPostById();
    }

    public function createOrUpdate(PostRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->createOrUpdate();
    }

    public function delete(PostRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->deletePost();
    }
}
