<?php

namespace Amz\Messaging\Api;

use Amz\Messaging\Model\CreateAmazonMotorsRequest as CreateAmazonMotorsRequest;
use Amz\Messaging\Model\CreateAmazonMotorsResponse as CreateAmazonMotorsResponse;
use Amz\Messaging\Model\CreateConfirmCustomizationDetailsRequest as CreateConfirmCustomizationDetailsRequest;
use Amz\Messaging\Model\CreateConfirmCustomizationDetailsResponse as CreateConfirmCustomizationDetailsResponse;
use Amz\Messaging\Model\CreateConfirmDeliveryDetailsRequest as CreateConfirmDeliveryDetailsRequest;
use Amz\Messaging\Model\CreateConfirmDeliveryDetailsResponse as CreateConfirmDeliveryDetailsResponse;
use Amz\Messaging\Model\CreateConfirmOrderDetailsRequest as CreateConfirmOrderDetailsRequest;
use Amz\Messaging\Model\CreateConfirmOrderDetailsResponse as CreateConfirmOrderDetailsResponse;
use Amz\Messaging\Model\CreateConfirmServiceDetailsRequest as CreateConfirmServiceDetailsRequest;
use Amz\Messaging\Model\CreateConfirmServiceDetailsResponse as CreateConfirmServiceDetailsResponse;
use Amz\Messaging\Model\CreateDigitalAccessKeyRequest as CreateDigitalAccessKeyRequest;
use Amz\Messaging\Model\CreateDigitalAccessKeyResponse as CreateDigitalAccessKeyResponse;
use Amz\Messaging\Model\CreateLegalDisclosureRequest as CreateLegalDisclosureRequest;
use Amz\Messaging\Model\CreateLegalDisclosureResponse as CreateLegalDisclosureResponse;
use Amz\Messaging\Model\CreateNegativeFeedbackRemovalResponse as CreateNegativeFeedbackRemovalResponse;
use Amz\Messaging\Model\CreateUnexpectedProblemRequest as CreateUnexpectedProblemRequest;
use Amz\Messaging\Model\CreateUnexpectedProblemResponse as CreateUnexpectedProblemResponse;
use Amz\Messaging\Model\CreateWarrantyRequest as CreateWarrantyRequest;
use Amz\Messaging\Model\CreateWarrantyResponse as CreateWarrantyResponse;
use Amz\Messaging\Model\GetAttributesResponse as GetAttributesResponse;
use Amz\Messaging\Model\GetMessagingActionsForOrderResponse as GetMessagingActionsForOrderResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Messaging extends AbstractAPI
{
    /**
     * Returns a list of message types that are available for an order that you
     * specify. A message type is represented by an actions object, which contains a
     * path and query parameter(s). You can use the path and parameter(s) to call an
     * operation that sends a message.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which you want a list of available message types.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return GetMessagingActionsForOrderResponse
     */
    public function getActionsForOrder($amazonOrderId, array $queries = []): GetMessagingActionsForOrderResponse
    {
        return $this->client->request('getMessagingActionsForOrder', 'GET', "messaging/v1/orders/{$amazonOrderId}",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a message asking a buyer to provide or verify customization details such
     * as name spelling, images, initials, etc.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateConfirmCustomizationDetailsRequest $Model Sends a message asking a
     *                                                        buyer to provide or verify customization details such as name spelling, images,
     *                                                        initials, etc.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateConfirmCustomizationDetailsResponse
     */
    public function confirmCustomizationDetails($amazonOrderId, CreateConfirmCustomizationDetailsRequest $Model, array $queries = []): CreateConfirmCustomizationDetailsResponse
    {
        return $this->client->request('confirmCustomizationDetails', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/confirmCustomizationDetails",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a message to a buyer to arrange a delivery or to confirm contact
     * information for making a delivery.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateConfirmDeliveryDetailsRequest $Model Sends a message to a buyer to
     *                                                   arrange a delivery or to confirm contact information for making a delivery.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateConfirmDeliveryDetailsResponse
     */
    public function createConfirmDeliveryDetails($amazonOrderId, CreateConfirmDeliveryDetailsRequest $Model, array $queries = []): CreateConfirmDeliveryDetailsResponse
    {
        return $this->client->request('createConfirmDeliveryDetails', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/confirmDeliveryDetails",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a critical message that contains documents that a seller is legally
     * obligated to provide to the buyer. This message should only be used to deliver
     * documents that are required by law.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateLegalDisclosureRequest $Model Sends a critical message that
     *                                            contains documents that a seller is legally obligated to provide to the buyer.
     *                                            This message should only be used to deliver documents that are required by law.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateLegalDisclosureResponse
     */
    public function createLegalDisclosure($amazonOrderId, CreateLegalDisclosureRequest $Model, array $queries = []): CreateLegalDisclosureResponse
    {
        return $this->client->request('createLegalDisclosure', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/legalDisclosure",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a non-critical message that asks a buyer to remove their negative
     * feedback. This message should only be sent after the seller has resolved the
     * buyer's problem.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateNegativeFeedbackRemovalResponse
     */
    public function createNegativeFeedbackRemoval($amazonOrderId, array $queries = []): CreateNegativeFeedbackRemovalResponse
    {
        return $this->client->request('createNegativeFeedbackRemoval', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/negativeFeedbackRemoval",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a message to ask a buyer an order-related question prior to shipping their
     * order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateConfirmOrderDetailsRequest $Model Sends a message to ask a buyer
     *                                                an order-related question prior to shipping their order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateConfirmOrderDetailsResponse
     */
    public function createConfirmOrderDetails($amazonOrderId, CreateConfirmOrderDetailsRequest $Model, array $queries = []): CreateConfirmOrderDetailsResponse
    {
        return $this->client->request('createConfirmOrderDetails', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/confirmOrderDetails",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a message to contact a Home Service customer to arrange a service call or
     * to gather information prior to a service call.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateConfirmServiceDetailsRequest $Model Sends a message to contact a
     *                                                  Home Service customer to arrange a service call or to gather information prior
     *                                                  to a service call.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateConfirmServiceDetailsResponse
     */
    public function createConfirmServiceDetails($amazonOrderId, CreateConfirmServiceDetailsRequest $Model, array $queries = []): CreateConfirmServiceDetailsResponse
    {
        return $this->client->request('createConfirmServiceDetails', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/confirmServiceDetails",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a message to a buyer to provide details about an Amazon Motors order. This
     * message can only be sent by Amazon Motors sellers.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateAmazonMotorsRequest $Model Sends a message to a buyer to provide
     *                                         details about an Amazon Motors order. This message can only be sent by Amazon
     *                                         Motors sellers.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateAmazonMotorsResponse
     */
    public function CreateAmazonMotors($amazonOrderId, CreateAmazonMotorsRequest $Model, array $queries = []): CreateAmazonMotorsResponse
    {
        return $this->client->request('CreateAmazonMotors', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/amazonMotors",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a message to a buyer to provide details about warranty information on a
     * purchase in their order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateWarrantyRequest $Model Sends a message to a buyer to provide
     *                                     details about warranty information on a purchase in their order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateWarrantyResponse
     */
    public function CreateWarranty($amazonOrderId, CreateWarrantyRequest $Model, array $queries = []): CreateWarrantyResponse
    {
        return $this->client->request('CreateWarranty', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/warranty",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a response containing attributes related to an order. This includes
     * buyer preferences.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return GetAttributesResponse
     */
    public function GetAttributes($amazonOrderId, array $queries = []): GetAttributesResponse
    {
        return $this->client->request('GetAttributes', 'GET', "messaging/v1/orders/{$amazonOrderId}/attributes",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a message to a buyer to share a digital access key needed to utilize
     * digital content in their order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateDigitalAccessKeyRequest $Model Sends a message to a buyer to share
     *                                             a digital access key needed to utilize digital content in their order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateDigitalAccessKeyResponse
     */
    public function createDigitalAccessKey($amazonOrderId, CreateDigitalAccessKeyRequest $Model, array $queries = []): CreateDigitalAccessKeyResponse
    {
        return $this->client->request('createDigitalAccessKey', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/digitalAccessKey",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a critical message to a buyer that an unexpected problem was encountered
     * affecting the completion of the order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a message is sent.
     * @param CreateUnexpectedProblemRequest $Model Sends a critical message to a
     *                                              buyer that an unexpected problem was encountered affecting the completion of the
     *                                              order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateUnexpectedProblemResponse
     */
    public function createUnexpectedProblem($amazonOrderId, CreateUnexpectedProblemRequest $Model, array $queries = []): CreateUnexpectedProblemResponse
    {
        return $this->client->request('createUnexpectedProblem', 'POST', "messaging/v1/orders/{$amazonOrderId}/messages/unexpectedProblem",
            [
                'json' => $Model->getArrayCopy(),
                'query' => $queries,
            ]
        );
    }
}
