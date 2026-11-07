<?php
namespace Humanmade\S3_Uploads\Aws\ControlCatalog;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Control Catalog** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getControl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getControlAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listCommonControls(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listCommonControlsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listControlMappings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listControlMappingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listControls(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listControlsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDomains(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listObjectives(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listObjectivesAsync(array $args = [])
 */
class ControlCatalogClient extends AwsClient {}
