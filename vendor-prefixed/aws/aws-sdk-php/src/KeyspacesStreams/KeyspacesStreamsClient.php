<?php
namespace Humanmade\S3_Uploads\Aws\KeyspacesStreams;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Keyspaces Streams** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getRecords(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRecordsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getShardIterator(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getShardIteratorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listStreams(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 */
class KeyspacesStreamsClient extends AwsClient {}
