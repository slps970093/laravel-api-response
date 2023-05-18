<?php

namespace Slps970093\LaravelApiResponse\Exceptions;


use Exception;
use Illuminate\Http\Request;
use Slps970093\LaravelApiResponse\Traits\HasResponse;

class ApiException extends Exception
{
    use HasResponse;

    protected int $httpResponseCode = 400;

    public function __construct(string $message = "", int $code = 0, int $httpStatusCode = 400, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->httpResponseCode = $httpStatusCode;
    }

    /**
     * Render the exception into an HTTP response.
     * @see https://laravel.com/docs/10.x/errors#rendering-exceptions
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function render(Request $request): \Illuminate\Http\JsonResponse
    {
        return $this->fail($this->getMessage(),$this->httpResponseCode,$this->getCode(),[]);
    }
}