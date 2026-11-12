<?php
namespace Humanmade\S3_Uploads\Aws\GeoRoutes;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Location Service Routes V2** service.
 * @method \Humanmade\S3_Uploads\Aws\Result calculateIsolines(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise calculateIsolinesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result calculateRouteMatrix(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise calculateRouteMatrixAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result calculateRoutes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise calculateRoutesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result optimizeWaypoints(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise optimizeWaypointsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result snapToRoads(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise snapToRoadsAsync(array $args = [])
 */
class GeoRoutesClient extends AwsClient {}
