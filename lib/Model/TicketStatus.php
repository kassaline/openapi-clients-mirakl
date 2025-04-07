<?php
/**
 * TicketStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kaufland.de Seller API v2
 *
 * This is the Kaufland.de Seller API v2. You can find more information on [https://sellerapi.kaufland.com/](https://sellerapi.kaufland.com/)
 *
 * The version of the OpenAPI document: 2.18.3
 * Contact: seller-api-support@kaufland-online.de
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Mirakl\Model;
use \OpenAPI\Client\Mirakl\ObjectSerializer;

/**
 * TicketStatus Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TicketStatus
{
    /**
     * Possible values of this enum
     */
    public const OPENED = 'opened';

    public const BUYER_CLOSED = 'buyer_closed';

    public const SELLER_CLOSED = 'seller_closed';

    public const BOTH_CLOSED = 'both_closed';

    public const CUSTOMER_SERVICE_CLOSED_FINAL = 'customer_service_closed_final';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPENED,
            self::BUYER_CLOSED,
            self::SELLER_CLOSED,
            self::BOTH_CLOSED,
            self::CUSTOMER_SERVICE_CLOSED_FINAL
        ];
    }
}


