<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getMessagingActionsForOrder operation.
 */
class GetMessagingActionsForOrderResponse extends AbstractModel
{
    /**
     * @var object
     */
    public $_links = null;

    /**
     * @var object
     */
    public $_embedded = null;

    /**
     * @var \Amz\Messaging\Model\ErrorList
     */
    public $errors = null;
}
