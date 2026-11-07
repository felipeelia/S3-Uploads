<?php
namespace Humanmade\S3_Uploads\Aws\AugmentedAIRuntime;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Augmented AI Runtime** service.
 * @method \Humanmade\S3_Uploads\Aws\Result deleteHumanLoop(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteHumanLoopAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeHumanLoop(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeHumanLoopAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listHumanLoops(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listHumanLoopsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startHumanLoop(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startHumanLoopAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopHumanLoop(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopHumanLoopAsync(array $args = [])
 */
class AugmentedAIRuntimeClient extends AwsClient {}
