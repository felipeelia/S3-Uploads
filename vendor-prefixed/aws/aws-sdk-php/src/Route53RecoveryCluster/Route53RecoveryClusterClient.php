<?php
namespace Humanmade\S3_Uploads\Aws\Route53RecoveryCluster;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Route53 Recovery Cluster** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getRoutingControlState(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRoutingControlStateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRoutingControls(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRoutingControlsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateRoutingControlState(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateRoutingControlStateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateRoutingControlStates(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateRoutingControlStatesAsync(array $args = [])
 */
class Route53RecoveryClusterClient extends AwsClient {}
