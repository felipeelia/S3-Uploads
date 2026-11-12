<?php
namespace Humanmade\S3_Uploads\Aws\KafkaConnect;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Managed Streaming for Kafka Connect** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createConnector(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createConnectorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCustomPlugin(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCustomPluginAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createWorkerConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createWorkerConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteConnector(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteConnectorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCustomPlugin(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteCustomPluginAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteWorkerConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteWorkerConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeConnector(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeConnectorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeConnectorOperation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeConnectorOperationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeCustomPlugin(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeCustomPluginAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeWorkerConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeWorkerConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listConnectorOperations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listConnectorOperationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listConnectors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listConnectorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listCustomPlugins(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listCustomPluginsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkerConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkerConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateConnector(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateConnectorAsync(array $args = [])
 */
class KafkaConnectClient extends AwsClient {}
