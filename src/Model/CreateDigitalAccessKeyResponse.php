<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createDigitalAccessKey operation.
 */
class CreateDigitalAccessKeyResponse extends AbstractModel
{
    /**
     * @var \Amz\Messaging\Model\ErrorList
     */
    public $errors = null;
}
