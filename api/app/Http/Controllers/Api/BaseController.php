<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BaseController extends Controller
{
    public function sendResponse($result, $message): \Illuminate\Http\JsonResponse
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        // Check if result is a paginated resource collection
        if ($result instanceof ResourceCollection && $result->resource instanceof \Illuminate\Pagination\LengthAwarePaginator) {
            $response = array_merge($response, [
                'links' => [
                    'first' => $result->resource->url(1),
                    'last' => $result->resource->url($result->resource->lastPage()),
                    'prev' => $result->resource->previousPageUrl(),
                    'next' => $result->resource->nextPageUrl(),
                ],
                'meta' => [
                    'current_page' => $result->resource->currentPage(),
                    'from' => $result->resource->firstItem(),
                    'last_page' => $result->resource->lastPage(),
                    'per_page' => $result->resource->perPage(),
                    'to' => $result->resource->lastItem(),
                    'total' => $result->resource->total(),
                ]
            ]);
        }

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404): \Illuminate\Http\JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
