<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A simple object containing the name of the template.
 */
class MessagingAction extends AbstractModel
{
    /**
     * @var string
     */
    public $name = null;
}
