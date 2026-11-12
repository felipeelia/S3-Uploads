<?php
namespace Humanmade\S3_Uploads\Aws\Repostspace;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS re:Post Private** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchAddChannelRoleToAccessors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchAddChannelRoleToAccessorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchAddRole(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchAddRoleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchRemoveChannelRoleFromAccessors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchRemoveChannelRoleFromAccessorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchRemoveRole(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchRemoveRoleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createChannel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createSpace(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createSpaceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSpace(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteSpaceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deregisterAdmin(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deregisterAdminAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getChannel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getChannelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSpace(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSpaceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listChannels(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSpaces(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSpacesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result registerAdmin(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerAdminAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendInvites(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendInvitesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateChannel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateSpace(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateSpaceAsync(array $args = [])
 */
class RepostspaceClient extends AwsClient {}
