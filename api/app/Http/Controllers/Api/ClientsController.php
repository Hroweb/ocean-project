<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\ClientsRequest;

class ClientsController extends BaseController
{
    public function index(ClientsRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getClients(), 'Clients retrieved successfully.');
    }

    public function store(ClientsRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->storeClients();
    }

    public function delete(ClientsRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->deleteClients();
    }
}
