<?php
namespace Humanmade\S3_Uploads\Aws\Pipes;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon EventBridge Pipes** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createPipe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createPipeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deletePipe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deletePipeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describePipe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describePipeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listPipes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listPipesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startPipe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startPipeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopPipe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopPipeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updatePipe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updatePipeAsync(array $args = [])
 */
class PipesClient extends AwsClient {}
