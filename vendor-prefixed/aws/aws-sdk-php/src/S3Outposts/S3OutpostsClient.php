<?php
namespace Humanmade\S3_Uploads\Aws\S3Outposts;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon S3 on Outposts** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEndpointAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEndpoints(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEndpointsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listOutpostsWithS3(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listOutpostsWithS3Async(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSharedEndpoints(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSharedEndpointsAsync(array $args = [])
 */
class S3OutpostsClient extends AwsClient {}
