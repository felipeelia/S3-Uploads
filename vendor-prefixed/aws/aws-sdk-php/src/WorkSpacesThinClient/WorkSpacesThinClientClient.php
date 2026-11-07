<?php
namespace Humanmade\S3_Uploads\Aws\WorkSpacesThinClient;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkSpaces Thin Client** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDevice(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDeviceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deregisterDevice(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deregisterDeviceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDevice(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSoftwareSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSoftwareSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDevices(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEnvironments(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSoftwareSets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSoftwareSetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateDevice(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateDeviceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateSoftwareSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateSoftwareSetAsync(array $args = [])
 */
class WorkSpacesThinClientClient extends AwsClient {}
