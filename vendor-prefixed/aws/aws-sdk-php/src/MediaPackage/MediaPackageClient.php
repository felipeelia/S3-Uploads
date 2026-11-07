<?php
namespace Humanmade\S3_Uploads\Aws\MediaPackage;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage** service.
 * @method \Humanmade\S3_Uploads\Aws\Result configureLogs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise configureLogsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createChannel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createHarvestJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createHarvestJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createOriginEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createOriginEndpointAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteChannel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteOriginEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteOriginEndpointAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeChannel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeHarvestJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeHarvestJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeOriginEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeOriginEndpointAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listChannels(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listHarvestJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listHarvestJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listOriginEndpoints(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listOriginEndpointsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result rotateChannelCredentials(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rotateChannelCredentialsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result rotateIngestEndpointCredentials(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rotateIngestEndpointCredentialsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateChannel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateOriginEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateOriginEndpointAsync(array $args = [])
 */
class MediaPackageClient extends AwsClient {}
