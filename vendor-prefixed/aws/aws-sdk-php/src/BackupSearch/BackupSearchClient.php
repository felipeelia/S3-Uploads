<?php
namespace Humanmade\S3_Uploads\Aws\BackupSearch;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Backup Search** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getSearchJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSearchJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSearchResultExportJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSearchResultExportJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSearchJobBackups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSearchJobBackupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSearchJobResults(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSearchJobResultsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSearchJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSearchJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSearchResultExportJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSearchResultExportJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startSearchJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startSearchJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startSearchResultExportJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startSearchResultExportJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopSearchJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopSearchJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class BackupSearchClient extends AwsClient {}
