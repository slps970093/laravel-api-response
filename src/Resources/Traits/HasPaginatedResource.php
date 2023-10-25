<?php

namespace Slps970093\LaravelApiResponse\Resources\Traits;


use Slps970093\LaravelApiResponse\Resources\PaginatedResourceResponse;

trait HasPaginatedResource
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function toResponse($request)
    {
        return (new PaginatedResourceResponse($this))->toResponse($request);
    }
}