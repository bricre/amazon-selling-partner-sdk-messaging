<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Represents a file uploaded to a destination that was created by the
 * createUploadDestination operation of the Uploads API.
 */
class Attachment extends AbstractModel
{
    /**
     * The identifier of the upload destination. Get this value by calling the
     * createUploadDestination operation of the Uploads API.
     *
     * @var string
     */
    public $uploadDestinationId = null;

    /**
     * The name of the file, including the extension. This is the file name that will
     * appear in the message. This does not need to match the file name of the file
     * that you uploaded.
     *
     * @var string
     */
    public $fileName = null;
}
