<?php

namespace Amz\Messaging\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the createWarranty operation.
 */
class CreateWarrantyRequest extends AbstractModel
{
    /**
     * Attachments to include in the message to the buyer. If any text is included in
     * the attachment, the text must be written in the buyer's language of preference,
     * which can be retrieved from the GetAttributes operation.
     *
     * @var \Amz\Messaging\Model\Attachment[]
     */
    public $attachments = null;

    /**
     * The start date of the warranty coverage to include in the message to the buyer.
     *
     * @var string
     */
    public $coverageStartDate = null;

    /**
     * The end date of the warranty coverage to include in the message to the buyer.
     *
     * @var string
     */
    public $coverageEndDate = null;
}
