<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the GetAttributes operation.
 */
class GetAttributesResponse extends AbstractModel
{
    /**
     * The list of attributes related to the buyer.
     *
     * @var object
     */
    public $buyer = null;

    /**
     * @var \Amz\Messaging\Model\ErrorList
     */
    public $errors = null;
}
