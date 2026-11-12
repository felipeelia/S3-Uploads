<?php
namespace Humanmade\S3_Uploads\Aws\SSMQuickSetup;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Systems Manager QuickSetup** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createConfigurationManager(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createConfigurationManagerAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteConfigurationManager(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteConfigurationManagerAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getConfigurationManager(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getConfigurationManagerAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getServiceSettings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getServiceSettingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listConfigurationManagers(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listConfigurationManagersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listQuickSetupTypes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listQuickSetupTypesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateConfigurationDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateConfigurationDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateConfigurationManager(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateConfigurationManagerAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateServiceSettings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateServiceSettingsAsync(array $args = [])
 */
class SSMQuickSetupClient extends AwsClient {}
