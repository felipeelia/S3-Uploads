<?php
namespace Humanmade\S3_Uploads\Aws\PcaConnectorScep;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Private CA Connector for SCEP** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createChallenge(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createChallengeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createConnector(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createConnectorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteChallenge(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteChallengeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteConnector(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteConnectorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getChallengeMetadata(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getChallengeMetadataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getChallengePassword(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getChallengePasswordAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getConnector(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getConnectorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listChallengeMetadata(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listChallengeMetadataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listConnectors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listConnectorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class PcaConnectorScepClient extends AwsClient {}
