<?php

namespace Slps970093\LaravelApiResponse\Resources;

use Illuminate\Http\Resources\Json\ResourceResponse;

class PaginatedResourceResponse extends ResourceResponse
{

    /**
     * Add the pagination information to the response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function paginationInformation($request)
    {
        return [
            'paginate' => [
                'current_page'      => $this->resource->currentPage(),
                'from'              => $this->resource->firstItem(),
                'last_page'         => $this->resource->lastPage(),
                'per_page'          => $this->resource->perPage(),
                'to'                => $this->resource->lastItem(),
                'total'             => $this->resource->total(),
            ]
        ];
    }
}