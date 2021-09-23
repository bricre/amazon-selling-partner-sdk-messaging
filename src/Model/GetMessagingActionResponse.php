<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Describes a messaging action that can be taken for an order. Provides a JSON
 * Hypertext Application Language (HAL) link to the JSON schema document that
 * describes the expected input.
 */
class GetMessagingActionResponse extends AbstractModel
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
     * @var \Amz\Messaging\Model\MessagingAction
     */
    public $payload = null;

    /**
     * @var \Amz\Messaging\Model\ErrorList
     */
    public $errors = null;
}
