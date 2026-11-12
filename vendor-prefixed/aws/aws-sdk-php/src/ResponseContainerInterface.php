<?php

namespace Humanmade\S3_Uploads\Aws;

use Humanmade\S3_Uploads\Psr\Http\Message\ResponseInterface;

interface ResponseContainerInterface
{
    /**
     * Get the received HTTP response if any.
     *
     * @return ResponseInterface|null
     */
    public function getResponse();
}