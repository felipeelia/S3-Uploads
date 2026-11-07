<?php
namespace Humanmade\S3_Uploads\Aws\GeoPlaces;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Location Service Places V2** service.
 * @method \Humanmade\S3_Uploads\Aws\Result autocomplete(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise autocompleteAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result geocode(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise geocodeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPlace(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPlaceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result reverseGeocode(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise reverseGeocodeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result searchNearby(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise searchNearbyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result searchText(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise searchTextAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result suggest(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise suggestAsync(array $args = [])
 */
class GeoPlacesClient extends AwsClient {}
