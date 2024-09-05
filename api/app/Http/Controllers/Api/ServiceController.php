<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\ServicesRequest;


class ServiceController extends BaseController
{
    public function index(ServicesRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getServices(), 'Services retrieved successfully');
    }

    public function store(ServicesRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->storeServices();
    }

    public function delete(ServicesRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        return $request->removeService($id);
    }
}
