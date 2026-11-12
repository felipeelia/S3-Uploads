<?php
namespace Humanmade\S3_Uploads\Aws\MigrationHubConfig;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Migration Hub Config** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createHomeRegionControl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createHomeRegionControlAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteHomeRegionControl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteHomeRegionControlAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeHomeRegionControls(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeHomeRegionControlsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHomeRegion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHomeRegionAsync(array $args = [])
 */
class MigrationHubConfigClient extends AwsClient {}
