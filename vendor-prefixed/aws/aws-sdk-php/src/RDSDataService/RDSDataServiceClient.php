<?php
namespace Humanmade\S3_Uploads\Aws\RDSDataService;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS RDS DataService** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchExecuteStatement(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchExecuteStatementAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result beginTransaction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise beginTransactionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result commitTransaction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise commitTransactionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result executeSql(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise executeSqlAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result executeStatement(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise executeStatementAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result rollbackTransaction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rollbackTransactionAsync(array $args = [])
 */
class RDSDataServiceClient extends AwsClient {}
