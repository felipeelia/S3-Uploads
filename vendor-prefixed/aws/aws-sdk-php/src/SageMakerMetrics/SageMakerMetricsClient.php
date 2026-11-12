<?php
namespace Humanmade\S3_Uploads\Aws\SageMakerMetrics;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon SageMaker Metrics Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchGetMetrics(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchGetMetricsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchPutMetrics(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchPutMetricsAsync(array $args = [])
 */
class SageMakerMetricsClient extends AwsClient {}
