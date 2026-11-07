<?php
namespace Humanmade\S3_Uploads\Aws\AppConfigData;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS AppConfig Data** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getLatestConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getLatestConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startConfigurationSession(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startConfigurationSessionAsync(array $args = [])
 */
class AppConfigDataClient extends AwsClient {}
