<?php
namespace Humanmade\S3_Uploads\Aws\CloudHsm;

use Humanmade\S3_Uploads\Aws\Api\ApiProvider;
use Humanmade\S3_Uploads\Aws\Api\DocModel;
use Humanmade\S3_Uploads\Aws\Api\Service;
use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with **AWS CloudHSM**.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result addTagsToResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createHapg(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createHapgAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createHsm(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createHsmAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createLunaClient(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createLunaClientAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteHapg(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteHapgAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteHsm(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteHsmAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteLunaClient(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteLunaClientAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeHapg(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeHapgAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeHsm(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeHsmAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeLunaClient(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeLunaClientAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getConfigFiles(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getConfigFilesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAvailableZones(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAvailableZonesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listHapgs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listHapgsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listHsms(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listHsmsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listLunaClients(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listLunaClientsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyHapg(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyHapgAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyHsm(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyHsmAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyLunaClient(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyLunaClientAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result removeTagsFromResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 */
class CloudHsmClient extends AwsClient {}
