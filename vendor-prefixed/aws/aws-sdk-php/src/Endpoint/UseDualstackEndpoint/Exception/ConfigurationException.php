<?php
namespace Humanmade\S3_Uploads\Aws\Endpoint\UseDualstackEndpoint\Exception;

use Humanmade\S3_Uploads\Aws\HasMonitoringEventsTrait;
use Humanmade\S3_Uploads\Aws\MonitoringEventsInterface;

/**
 * Represents an error interacting with configuration for useDualstackRegion
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
