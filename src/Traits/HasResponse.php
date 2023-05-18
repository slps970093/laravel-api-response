<?php

namespace Slps970093\LaravelApiResponse\Traits;

use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;

trait HasResponse
{
    /**
     *    response ok
     * @param array $result
     * @param integer $responseCode [description]
     * @param array $custom [description]
     */
    protected function ok($result = [], int $responseCode = 200, array $custom = [])
    {
        $paginator = [];
        if ($result instanceof LengthAwarePaginator) {
            $paginator = collect($result->toArray());
            $result = $paginator->pull('data');
            $paginator = ['paginate' => $paginator];
        }

        $output = array_merge(['data' => $result], $paginator, $custom);

        return response()->json($output, $responseCode);
    }

    /**
     *    response fail
     *    @param  string $message        [description]
     *    @param  array    $payload        [description]
     *    @param  integer  $responseCode   [description]
     *    @return \Illuminate\Http\JsonResponse                    [description]
     */
    protected function fail(string $message = 'api error', int $responseCode = 400, string|int $errorCode = 0, array $payload = [])
    {
        return response()->json([
            'message' => $message,
            'code'    => $errorCode,
            'errors'  => $payload,
        ], $responseCode);
    }
}