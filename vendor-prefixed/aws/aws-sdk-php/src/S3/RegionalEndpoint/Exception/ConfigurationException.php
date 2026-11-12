<?php
namespace Humanmade\S3_Uploads\Aws\S3\RegionalEndpoint\Exception;

use Humanmade\S3_Uploads\Aws\HasMonitoringEventsTrait;
use Humanmade\S3_Uploads\Aws\MonitoringEventsInterface;

/**
 * Represents an error interacting with configuration for sts regional endpoints
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
