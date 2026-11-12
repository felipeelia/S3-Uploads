<?php

namespace Humanmade\S3_Uploads\Aws\S3\S3Transfer\Models;

use Humanmade\S3_Uploads\Aws\Result;

final class UploadResult extends Result
{
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }
}
