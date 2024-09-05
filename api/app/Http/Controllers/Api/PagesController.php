<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\PagesRequest;
use App\Http\Resources\BaseResource;

class PagesController extends BaseController
{
    public function show(PagesRequest $request, $slug): BaseResource
    {
        return new BaseResource($request->getPageData($slug));
    }

    public function update(PagesRequest $request, $pageId): \Illuminate\Http\JsonResponse
    {
        return $request->updatePageData($pageId);
    }
}
