<?php
namespace Humanmade\S3_Uploads\Aws\IoTSecureTunneling;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Secure Tunneling** service.
 * @method \Humanmade\S3_Uploads\Aws\Result closeTunnel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise closeTunnelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeTunnel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeTunnelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTunnels(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTunnelsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result openTunnel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise openTunnelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result rotateTunnelAccessToken(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rotateTunnelAccessTokenAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class IoTSecureTunnelingClient extends AwsClient {}
