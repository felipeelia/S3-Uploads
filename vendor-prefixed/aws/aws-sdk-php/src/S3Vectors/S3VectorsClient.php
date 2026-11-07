<?php
namespace Humanmade\S3_Uploads\Aws\S3Vectors;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon S3 Vectors** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createIndex(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createIndexAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createVectorBucket(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createVectorBucketAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteIndex(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteIndexAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteVectorBucket(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteVectorBucketAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteVectorBucketPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteVectorBucketPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteVectors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteVectorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getIndex(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getIndexAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getVectorBucket(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getVectorBucketAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getVectorBucketPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getVectorBucketPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getVectors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getVectorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listIndexes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listIndexesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listVectorBuckets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listVectorBucketsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listVectors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listVectorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putVectorBucketPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putVectorBucketPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putVectors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putVectorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result queryVectors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise queryVectorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class S3VectorsClient extends AwsClient {}
