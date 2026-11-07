<?php

namespace Humanmade\S3_Uploads\Aws\ClientSideMonitoring;

use Humanmade\S3_Uploads\Aws\CommandInterface;
use Humanmade\S3_Uploads\Aws\Exception\AwsException;
use Humanmade\S3_Uploads\Aws\ResultInterface;
use Humanmade\S3_Uploads\GuzzleHttp\Psr7\Request;
use Humanmade\S3_Uploads\Psr\Http\Message\RequestInterface;

/**
 * @internal
 */
interface MonitoringMiddlewareInterface
{

    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param RequestInterface $request
     * @return array
     */
    public static function getRequestData(RequestInterface $request);


    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param ResultInterface|AwsException|\Exception $klass
     * @return array
     */
    public static function getResponseData($klass);

    public function __invoke(CommandInterface $cmd, RequestInterface $request);
}