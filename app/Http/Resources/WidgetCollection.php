<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class WidgetCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($widget) {
                return [
                    'id' => $widget->id,
                    'name1' => $widget->name,
                    'description' => $widget->description,
                    'created_at' => $widget->created_at,
                    'updated_at' => $widget->updated_at,
                    'links' => [
                        'item' => route('widgets.show', ['widget' => $widget->id]),
                    ],
                ];
            }),
            'links' => [
                'self' => url()->current(),
            ],
        ];
    }
}
