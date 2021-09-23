<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the createLegalDisclosure operation.
 */
class CreateLegalDisclosureRequest extends AbstractModel
{
    /**
     * Attachments to include in the message to the buyer. If any text is included in
     * the attachment, the text must be written in the buyer's language of preference,
     * which can be retrieved from the GetAttributes operation.
     *
     * @var \Amz\Messaging\Model\Attachment[]
     */
    public $attachments = null;
}
