<?php
namespace Humanmade\S3_Uploads\Aws\Health;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Health APIs and Notifications** service.
 * @method \Humanmade\S3_Uploads\Aws\Result describeAffectedAccountsForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeAffectedAccountsForOrganizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeAffectedEntities(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeAffectedEntitiesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeAffectedEntitiesForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeAffectedEntitiesForOrganizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEntityAggregates(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEntityAggregatesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEntityAggregatesForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEntityAggregatesForOrganizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEventAggregates(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventAggregatesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEventDetails(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventDetailsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEventDetailsForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventDetailsForOrganizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEventTypes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventTypesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEvents(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEventsForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventsForOrganizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeHealthServiceStatusForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeHealthServiceStatusForOrganizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disableHealthServiceAccessForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disableHealthServiceAccessForOrganizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result enableHealthServiceAccessForOrganization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise enableHealthServiceAccessForOrganizationAsync(array $args = [])
 */
class HealthClient extends AwsClient {}
