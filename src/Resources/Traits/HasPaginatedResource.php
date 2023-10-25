<?php

namespace Slps970093\LaravelApiResponse\Resources\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Slps970093\LaravelApiResponse\Resources\PaginatedResourceCollection;

trait HasPaginatedResource
{
    /**
     * Transform the resource into a JSON array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(Request $request)
    {
        $this->collection->transform(function ($item) {
            return $this->collectionTransform($item);
        });

        return $this->collection->map->toArray($request)->all();
    }

    protected abstract function collectionTransform($item);

    /**
     * Create a new resource collection instance.
     *
     * @param  mixed  $resource
     * @return \Slps970093\LaravelApiResponse\Resources\PaginatedResourceCollection
     */
    protected static function newCollection($resource)
    {
        return new PaginatedResourceCollection($resource, static::class);
    }
}