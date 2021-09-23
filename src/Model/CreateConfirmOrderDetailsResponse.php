<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createConfirmOrderDetails operation.
 */
class CreateConfirmOrderDetailsResponse extends AbstractModel
{
    /**
     * @var \Amz\Messaging\Model\ErrorList
     */
    public $errors = null;
}
