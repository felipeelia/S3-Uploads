<?php
namespace Humanmade\S3_Uploads\Aws\BedrockRuntime;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Bedrock Runtime** service.
 * @method \Humanmade\S3_Uploads\Aws\Result applyGuardrail(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise applyGuardrailAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result converse(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise converseAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result converseStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise converseStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result countTokens(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise countTokensAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAsyncInvoke(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAsyncInvokeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeModel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeModelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeModelWithResponseStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeModelWithResponseStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAsyncInvokes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAsyncInvokesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startAsyncInvoke(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startAsyncInvokeAsync(array $args = [])
 */
class BedrockRuntimeClient extends AwsClient {}
