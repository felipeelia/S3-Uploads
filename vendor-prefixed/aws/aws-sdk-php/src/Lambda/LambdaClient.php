<?php
namespace Humanmade\S3_Uploads\Aws\Lambda;

use Humanmade\S3_Uploads\Aws\AwsClient;
use Humanmade\S3_Uploads\Aws\CommandInterface;
use Humanmade\S3_Uploads\Aws\Middleware;

/**
 * This client is used to interact with AWS Lambda
 *
 * @method \Humanmade\S3_Uploads\Aws\Result addLayerVersionPermission(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addLayerVersionPermissionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result addPermission(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addPermissionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result checkpointDurableExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise checkpointDurableExecutionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createAlias(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCapacityProvider(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCapacityProviderAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCodeSigningConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCodeSigningConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createEventSourceMapping(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEventSourceMappingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createFunction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createFunctionUrlConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createFunctionUrlConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteAlias(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCapacityProvider(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteCapacityProviderAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCodeSigningConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteCodeSigningConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEventSourceMapping(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEventSourceMappingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteFunction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteFunctionCodeSigningConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteFunctionCodeSigningConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteFunctionConcurrency(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteFunctionConcurrencyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteFunctionEventInvokeConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteFunctionEventInvokeConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteFunctionUrlConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteFunctionUrlConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteLayerVersion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteLayerVersionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteProvisionedConcurrencyConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteProvisionedConcurrencyConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAccountSettings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAlias(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAliasAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCapacityProvider(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getCapacityProviderAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCodeSigningConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getCodeSigningConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDurableExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDurableExecutionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDurableExecutionHistory(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDurableExecutionHistoryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDurableExecutionState(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDurableExecutionStateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getEventSourceMapping(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getEventSourceMappingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFunction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFunctionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFunctionCodeSigningConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFunctionCodeSigningConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFunctionConcurrency(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFunctionConcurrencyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFunctionConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFunctionConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFunctionEventInvokeConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFunctionEventInvokeConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFunctionRecursionConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFunctionRecursionConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFunctionScalingConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFunctionScalingConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFunctionUrlConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFunctionUrlConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getLayerVersion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getLayerVersionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getLayerVersionByArn(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getLayerVersionByArnAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getLayerVersionPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getLayerVersionPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getProvisionedConcurrencyConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getProvisionedConcurrencyConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getRuntimeManagementConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRuntimeManagementConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invoke(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeAsynchronous(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeAsynchronousAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeWithResponseStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeWithResponseStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAliases(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listCapacityProviders(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listCapacityProvidersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listCodeSigningConfigs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listCodeSigningConfigsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDurableExecutionsByFunction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDurableExecutionsByFunctionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEventSourceMappings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEventSourceMappingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFunctionEventInvokeConfigs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFunctionEventInvokeConfigsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFunctionUrlConfigs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFunctionUrlConfigsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFunctionVersionsByCapacityProvider(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFunctionVersionsByCapacityProviderAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFunctions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFunctionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFunctionsByCodeSigningConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFunctionsByCodeSigningConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listLayerVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listLayerVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listLayers(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listLayersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listProvisionedConcurrencyConfigs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listProvisionedConcurrencyConfigsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTags(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listVersionsByFunction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listVersionsByFunctionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result publishLayerVersion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise publishLayerVersionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result publishVersion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise publishVersionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putFunctionCodeSigningConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putFunctionCodeSigningConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putFunctionConcurrency(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putFunctionConcurrencyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putFunctionEventInvokeConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putFunctionEventInvokeConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putFunctionRecursionConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putFunctionRecursionConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putFunctionScalingConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putFunctionScalingConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putProvisionedConcurrencyConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putProvisionedConcurrencyConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putRuntimeManagementConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putRuntimeManagementConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result removeLayerVersionPermission(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeLayerVersionPermissionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result removePermission(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendDurableExecutionCallbackFailure(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendDurableExecutionCallbackFailureAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendDurableExecutionCallbackHeartbeat(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendDurableExecutionCallbackHeartbeatAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendDurableExecutionCallbackSuccess(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendDurableExecutionCallbackSuccessAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopDurableExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopDurableExecutionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateAlias(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateCapacityProvider(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateCapacityProviderAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateCodeSigningConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateCodeSigningConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateEventSourceMapping(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateEventSourceMappingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateFunctionCode(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateFunctionCodeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateFunctionConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateFunctionConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateFunctionEventInvokeConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateFunctionEventInvokeConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateFunctionUrlConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateFunctionUrlConfigAsync(array $args = [])
 */
class LambdaClient extends AwsClient
{
    /**
     * {@inheritdoc}
     */
    public function __construct(array $args)
    {
        parent::__construct($args);
        $list = $this->getHandlerList();
        if (extension_loaded('curl')) {
            $list->appendInit($this->getDefaultCurlOptionsMiddleware());
        }
    }

    /**
     * Provides a middleware that sets default Curl options for the command
     *
     * @return callable
     */
    public function getDefaultCurlOptionsMiddleware()
    {
        return Middleware::mapCommand(function (CommandInterface $cmd) {
            $defaultCurlOptions = [
                CURLOPT_TCP_KEEPALIVE => 1,
            ];
            if (!isset($cmd['@http']['curl'])) {
                $cmd['@http']['curl'] = $defaultCurlOptions;
            } else {
                $cmd['@http']['curl'] += $defaultCurlOptions;
            }
            return $cmd;
        });
    }
}
