<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\EventRequest;

class EventController extends BaseController
{
    public function index(EventRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getEvents(), 'Events retrieved successfully');
    }

    public function show(EventRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getEventById(), 'Event retrieved successfully');
    }

    public function delete(EventRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->removeEvent();
    }

    public function createOrUpdate(EventRequest $request): \Illuminate\Http\JsonResponse
    {
        return $request->storeEvent();
    }

    public function deletePhoto(EventRequest $request, $type, $eventID, $photoID): \Illuminate\Http\JsonResponse
    {
        return $request->deletePhoto($type, $eventID, $photoID);
    }

    public function deleteTemplate(EventRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        return $request->deleteTemplate($id);
    }
}
