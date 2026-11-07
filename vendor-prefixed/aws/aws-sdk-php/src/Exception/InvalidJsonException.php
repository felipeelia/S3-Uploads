<?php
namespace Humanmade\S3_Uploads\Aws\Exception;

use Humanmade\S3_Uploads\Aws\HasMonitoringEventsTrait;
use Humanmade\S3_Uploads\Aws\MonitoringEventsInterface;

class InvalidJsonException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
