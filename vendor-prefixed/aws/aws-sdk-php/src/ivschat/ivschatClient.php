<?php
namespace Humanmade\S3_Uploads\Aws\ivschat;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Interactive Video Service Chat** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createChatToken(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createChatTokenAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createLoggingConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createLoggingConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createRoom(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createRoomAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteLoggingConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteLoggingConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteMessage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteMessageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteRoom(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteRoomAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disconnectUser(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disconnectUserAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getLoggingConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getLoggingConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getRoom(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRoomAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listLoggingConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listLoggingConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRooms(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRoomsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendEvent(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendEventAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateLoggingConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateLoggingConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateRoom(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateRoomAsync(array $args = [])
 */
class ivschatClient extends AwsClient {}
