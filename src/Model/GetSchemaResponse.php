<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetSchemaResponse extends AbstractModel
{
    /**
     * @var object
     */
    public $_links = null;

    /**
     * @var \Amz\Messaging\Model\Schema
     */
    public $payload = null;

    /**
     * @var \Amz\Messaging\Model\ErrorList
     */
    public $errors = null;
}
