<?php
namespace Humanmade\S3_Uploads\Aws\MediaStoreData;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaStore Data Plane** service.
 * @method \Humanmade\S3_Uploads\Aws\Result deleteObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listItems(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listItemsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putObjectAsync(array $args = [])
 */
class MediaStoreDataClient extends AwsClient {}
