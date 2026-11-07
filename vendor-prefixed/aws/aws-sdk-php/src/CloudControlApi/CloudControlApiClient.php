<?php
namespace Humanmade\S3_Uploads\Aws\CloudControlApi;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Cloud Control API** service.
 * @method \Humanmade\S3_Uploads\Aws\Result cancelResourceRequest(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelResourceRequestAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getResourceRequestStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getResourceRequestStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listResourceRequests(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listResourceRequestsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listResources(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 */
class CloudControlApiClient extends AwsClient {}
