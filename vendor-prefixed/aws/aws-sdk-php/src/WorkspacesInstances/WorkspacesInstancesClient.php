<?php
namespace Humanmade\S3_Uploads\Aws\WorkspacesInstances;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Workspaces Instances** service.
 * @method \Humanmade\S3_Uploads\Aws\Result associateVolume(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise associateVolumeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createVolume(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createVolumeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createWorkspaceInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createWorkspaceInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteVolume(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteVolumeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteWorkspaceInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteWorkspaceInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disassociateVolume(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disassociateVolumeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getWorkspaceInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getWorkspaceInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listInstanceTypes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listInstanceTypesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRegions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRegionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkspaceInstances(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkspaceInstancesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class WorkspacesInstancesClient extends AwsClient {}
