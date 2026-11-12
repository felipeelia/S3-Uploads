<?php
namespace Humanmade\S3_Uploads\Aws\GeoMaps;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Location Service Maps V2** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getGlyphs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getGlyphsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSprites(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSpritesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getStaticMap(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getStaticMapAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getStyleDescriptor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getStyleDescriptorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTileAsync(array $args = [])
 */
class GeoMapsClient extends AwsClient {}
