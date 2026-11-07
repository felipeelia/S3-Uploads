<?php
namespace Humanmade\S3_Uploads\Aws\KinesisVideoSignalingChannels;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video Signaling Channels** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getIceServerConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getIceServerConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendAlexaOfferToMaster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendAlexaOfferToMasterAsync(array $args = [])
 */
class KinesisVideoSignalingChannelsClient extends AwsClient {}
