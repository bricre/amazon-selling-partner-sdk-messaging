<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the confirmCustomizationDetails operation.
 */
class CreateConfirmCustomizationDetailsRequest extends AbstractModel
{
    /**
     * The text to be sent to the buyer. Only links related to customization details
     * are allowed. Do not include HTML or email addresses. The text must be written in
     * the buyer's language of preference, which can be retrieved from the
     * GetAttributes operation.
     *
     * @var string
     */
    public $text = null;

    /**
     * Attachments to include in the message to the buyer.
     *
     * @var \Amz\Messaging\Model\Attachment[]
     */
    public $attachments = null;
}
