<?php
namespace Humanmade\S3_Uploads\Aws\KinesisVideoArchivedMedia;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video Streams Archived Media** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getClip(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getClipAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDASHStreamingSessionURL(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDASHStreamingSessionURLAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHLSStreamingSessionURL(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHLSStreamingSessionURLAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getImages(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getImagesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getMediaForFragmentList(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getMediaForFragmentListAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFragments(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFragmentsAsync(array $args = [])
 */
class KinesisVideoArchivedMediaClient extends AwsClient {}
