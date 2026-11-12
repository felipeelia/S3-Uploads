<?php

namespace Humanmade\S3_Uploads\GuzzleHttp;

use Humanmade\S3_Uploads\Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
