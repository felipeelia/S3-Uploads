<?php

namespace Humanmade\S3_Uploads\Psr\Http\Client;

use Humanmade\S3_Uploads\Psr\Http\Message\RequestInterface;
use Humanmade\S3_Uploads\Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Humanmade\S3_Uploads\Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request): ResponseInterface;
}
