<?php
namespace Humanmade\S3_Uploads\Aws\ImportExport;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Import/Export** service.
 * @method \Humanmade\S3_Uploads\Aws\Result cancelJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getShippingLabel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getShippingLabelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class ImportExportClient extends AwsClient {}
