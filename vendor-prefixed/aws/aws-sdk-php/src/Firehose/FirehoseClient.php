<?php
namespace Humanmade\S3_Uploads\Aws\Firehose;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Firehose** service.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result createDeliveryStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDeliveryStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDeliveryStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDeliveryStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDeliveryStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDeliveryStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDeliveryStreams(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDeliveryStreamsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForDeliveryStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForDeliveryStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putRecord(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putRecordBatch(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putRecordBatchAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startDeliveryStreamEncryption(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startDeliveryStreamEncryptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopDeliveryStreamEncryption(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopDeliveryStreamEncryptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagDeliveryStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagDeliveryStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagDeliveryStream(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagDeliveryStreamAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateDestination(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateDestinationAsync(array $args = [])
 */
class FirehoseClient extends AwsClient {}
