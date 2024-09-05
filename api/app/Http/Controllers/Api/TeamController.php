<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\TeamRequest;

class TeamController extends BaseController
{
    public function index(TeamRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse($request->getTeamMembers(), 'Team members retrieved successfully.');
    }

    public function store(TeamRequest $request): \Illuminate\Http\JsonResponse
    {
        $status = $request->updateTeamMembers();

        if (!$status) {
            return response()->json(['message' => 'Something went wrong'], 422);
        }

        return response()->json(['message' => 'Team members were updated successfully', 'ok' => true], 200);
    }
}
