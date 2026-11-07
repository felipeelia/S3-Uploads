<?php
namespace Humanmade\S3_Uploads\Aws\OAM;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **CloudWatch Observability Access Manager** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createLink(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createLinkAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createSink(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createSinkAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteLink(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteLinkAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSink(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteSinkAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getLink(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getLinkAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSink(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSinkAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSinkPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSinkPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAttachedLinks(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAttachedLinksAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listLinks(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listLinksAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSinks(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSinksAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putSinkPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putSinkPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateLink(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateLinkAsync(array $args = [])
 */
class OAMClient extends AwsClient {}
