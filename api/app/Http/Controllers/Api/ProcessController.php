<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\ProcessRequest;

class ProcessController extends BaseController
{
    public function index(ProcessRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getProcesses(), 'Processes retrieved successfully.');
    }

    public function store(ProcessRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->storeProcesses();
    }
}
