<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\EventLogoRequest;

class EventLogoController extends BaseController
{
    public function index(EventLogoRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getEventLogos(), 'Event Logos retrieved successfully');
    }

    public function store(EventLogoRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->storeEventLogos();
    }

    public function delete(EventLogoRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        return $request->deleteEventLogo($id);
    }
}
