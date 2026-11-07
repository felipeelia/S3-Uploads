<?php
namespace Humanmade\S3_Uploads\Aws\HealthLake;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon HealthLake** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createFHIRDatastore(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createFHIRDatastoreAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteFHIRDatastore(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteFHIRDatastoreAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeFHIRDatastore(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeFHIRDatastoreAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeFHIRExportJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeFHIRExportJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeFHIRImportJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeFHIRImportJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFHIRDatastores(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFHIRDatastoresAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFHIRExportJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFHIRExportJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFHIRImportJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFHIRImportJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startFHIRExportJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startFHIRExportJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startFHIRImportJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startFHIRImportJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class HealthLakeClient extends AwsClient {}
