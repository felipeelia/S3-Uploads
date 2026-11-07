<?php
namespace Humanmade\S3_Uploads\Aws\SupportApp;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Support App** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createSlackChannelConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createSlackChannelConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteAccountAlias(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteAccountAliasAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSlackChannelConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteSlackChannelConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSlackWorkspaceConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteSlackWorkspaceConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAccountAlias(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAccountAliasAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSlackChannelConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSlackChannelConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSlackWorkspaceConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSlackWorkspaceConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putAccountAlias(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putAccountAliasAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result registerSlackWorkspaceForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerSlackWorkspaceForOrganizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateSlackChannelConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateSlackChannelConfigurationAsync(array $args = [])
 */
class SupportAppClient extends AwsClient {}
