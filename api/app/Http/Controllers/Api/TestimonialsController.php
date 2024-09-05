<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\TestimonialsRequest;
use App\Http\Resources\BaseResource;

class TestimonialsController extends BaseController
{
    public function index(TestimonialsRequest $request): \Illuminate\Http\JsonResponse|BaseResource
    {
        return $this->sendResponse($request->getTestimonials(), 'Testimonials retrieved successfully.');
    }

    public function getOne(TestimonialsRequest $request, int $id): \Illuminate\Http\JsonResponse|BaseResource
    {
        return $request->getOne($id);
    }

    public function store(TestimonialsRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->storeTestimonials();
    }

    public function delete(TestimonialsRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->delete();
    }

    public function attach(TestimonialsRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->attachToEvent();
    }
}
