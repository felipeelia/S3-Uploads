<?php
namespace Humanmade\S3_Uploads\Aws\MedicalImaging;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Health Imaging** service.
 * @method \Humanmade\S3_Uploads\Aws\Result copyImageSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyImageSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDatastore(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDatastoreAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDatastore(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDatastoreAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteImageSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteImageSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDICOMImportJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDICOMImportJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDatastore(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDatastoreAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getImageFrame(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getImageFrameAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getImageSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getImageSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getImageSetMetadata(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getImageSetMetadataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDICOMImportJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDICOMImportJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDatastores(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDatastoresAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listImageSetVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listImageSetVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result searchImageSets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise searchImageSetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startDICOMImportJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startDICOMImportJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateImageSetMetadata(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateImageSetMetadataAsync(array $args = [])
 */
class MedicalImagingClient extends AwsClient {}
