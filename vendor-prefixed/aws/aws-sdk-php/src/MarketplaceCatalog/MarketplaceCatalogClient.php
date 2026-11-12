<?php
namespace Humanmade\S3_Uploads\Aws\MarketplaceCatalog;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Marketplace Catalog Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchDescribeEntities(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchDescribeEntitiesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result cancelChangeSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelChangeSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeChangeSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeChangeSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEntity(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEntityAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listChangeSets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listChangeSetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEntities(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEntitiesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startChangeSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startChangeSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class MarketplaceCatalogClient extends AwsClient {}
