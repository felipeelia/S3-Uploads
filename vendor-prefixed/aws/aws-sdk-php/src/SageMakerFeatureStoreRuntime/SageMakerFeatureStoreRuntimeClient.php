<?php
namespace Humanmade\S3_Uploads\Aws\SageMakerFeatureStoreRuntime;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon SageMaker Feature Store Runtime** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchGetRecord(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchGetRecordAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteRecord(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteRecordAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getRecord(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRecordAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putRecord(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 */
class SageMakerFeatureStoreRuntimeClient extends AwsClient {}
