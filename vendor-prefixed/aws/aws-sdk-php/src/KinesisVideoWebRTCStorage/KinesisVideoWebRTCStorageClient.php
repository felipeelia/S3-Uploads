<?php
namespace Humanmade\S3_Uploads\Aws\KinesisVideoWebRTCStorage;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video WebRTC Storage** service.
 * @method \Humanmade\S3_Uploads\Aws\Result joinStorageSession(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise joinStorageSessionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result joinStorageSessionAsViewer(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise joinStorageSessionAsViewerAsync(array $args = [])
 */
class KinesisVideoWebRTCStorageClient extends AwsClient {}
