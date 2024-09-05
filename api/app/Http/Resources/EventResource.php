<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $eventData = parent::toArray($request);

        // Initialize an array to hold grouped categories
        $groupedCategories = [];

        // Group categories by type
        foreach ($this->categories as $category) {
            $type = $category->type;
            $groupedCategories[$type][] = $category->toArray();
        }

        // Remove the original "categories" key
        unset($eventData['categories']);

        // Add the grouped categories directly to the event data
        return array_merge($eventData, $groupedCategories);
    }
}
