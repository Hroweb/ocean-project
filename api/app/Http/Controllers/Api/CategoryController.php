<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\CategoryRequest;

class CategoryController extends BaseController
{
    public function index(CategoryRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->list(), 'Categories retrieved successfully.');
    }

    public function store(CategoryRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->store();
    }

    public function delete(CategoryRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->deleteCategory();
    }

    public function events(CategoryRequest $request, $cat = false): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->events($cat), 'Events retrieved successfully.');
    }
}
