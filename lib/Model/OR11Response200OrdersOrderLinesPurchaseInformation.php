<?php
/**
 * OR11Response200OrdersOrderLinesPurchaseInformation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mirakl Marketplace APIs
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: latest-release
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Mirakl\Model;

use \ArrayAccess;
use \OpenAPI\Client\Mirakl\ObjectSerializer;

/**
 * OR11Response200OrdersOrderLinesPurchaseInformation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OR11Response200OrdersOrderLinesPurchaseInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OR11_Response_200_Orders_OrderLines_PurchaseInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchaseCommissionOnFees' => '\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPurchaseInformationPurchaseCommissionOnFees',
        'purchaseCommissionOnPrice' => 'float',
        'purchaseCommissionOnShipping' => 'float',
        'purchaseFeeAmount' => '\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPurchaseInformationPurchaseFeeAmount',
        'purchasePrice' => 'float',
        'purchaseShippingPrice' => 'float',
        'purchaseUnitPrice' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'purchaseCommissionOnFees' => null,
        'purchaseCommissionOnPrice' => null,
        'purchaseCommissionOnShipping' => null,
        'purchaseFeeAmount' => null,
        'purchasePrice' => null,
        'purchaseShippingPrice' => null,
        'purchaseUnitPrice' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'purchaseCommissionOnFees' => false,
        'purchaseCommissionOnPrice' => false,
        'purchaseCommissionOnShipping' => false,
        'purchaseFeeAmount' => false,
        'purchasePrice' => false,
        'purchaseShippingPrice' => false,
        'purchaseUnitPrice' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'purchaseCommissionOnFees' => 'purchase_commission_on_fees',
        'purchaseCommissionOnPrice' => 'purchase_commission_on_price',
        'purchaseCommissionOnShipping' => 'purchase_commission_on_shipping',
        'purchaseFeeAmount' => 'purchase_fee_amount',
        'purchasePrice' => 'purchase_price',
        'purchaseShippingPrice' => 'purchase_shipping_price',
        'purchaseUnitPrice' => 'purchase_unit_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaseCommissionOnFees' => 'setPurchaseCommissionOnFees',
        'purchaseCommissionOnPrice' => 'setPurchaseCommissionOnPrice',
        'purchaseCommissionOnShipping' => 'setPurchaseCommissionOnShipping',
        'purchaseFeeAmount' => 'setPurchaseFeeAmount',
        'purchasePrice' => 'setPurchasePrice',
        'purchaseShippingPrice' => 'setPurchaseShippingPrice',
        'purchaseUnitPrice' => 'setPurchaseUnitPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaseCommissionOnFees' => 'getPurchaseCommissionOnFees',
        'purchaseCommissionOnPrice' => 'getPurchaseCommissionOnPrice',
        'purchaseCommissionOnShipping' => 'getPurchaseCommissionOnShipping',
        'purchaseFeeAmount' => 'getPurchaseFeeAmount',
        'purchasePrice' => 'getPurchasePrice',
        'purchaseShippingPrice' => 'getPurchaseShippingPrice',
        'purchaseUnitPrice' => 'getPurchaseUnitPrice'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('purchaseCommissionOnFees', $data ?? [], null);
        $this->setIfExists('purchaseCommissionOnPrice', $data ?? [], null);
        $this->setIfExists('purchaseCommissionOnShipping', $data ?? [], null);
        $this->setIfExists('purchaseFeeAmount', $data ?? [], null);
        $this->setIfExists('purchasePrice', $data ?? [], null);
        $this->setIfExists('purchaseShippingPrice', $data ?? [], null);
        $this->setIfExists('purchaseUnitPrice', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets purchaseCommissionOnFees
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPurchaseInformationPurchaseCommissionOnFees|null
     */
    public function getPurchaseCommissionOnFees()
    {
        return $this->container['purchaseCommissionOnFees'];
    }

    /**
     * Sets purchaseCommissionOnFees
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPurchaseInformationPurchaseCommissionOnFees|null $purchaseCommissionOnFees purchaseCommissionOnFees
     *
     * @return self
     */
    public function setPurchaseCommissionOnFees($purchaseCommissionOnFees)
    {
        if (is_null($purchaseCommissionOnFees)) {
            throw new \InvalidArgumentException('non-nullable purchaseCommissionOnFees cannot be null');
        }
        $this->container['purchaseCommissionOnFees'] = $purchaseCommissionOnFees;

        return $this;
    }

    /**
     * Gets purchaseCommissionOnPrice
     *
     * @return float|null
     */
    public function getPurchaseCommissionOnPrice()
    {
        return $this->container['purchaseCommissionOnPrice'];
    }

    /**
     * Sets purchaseCommissionOnPrice
     *
     * @param float|null $purchaseCommissionOnPrice Purchase order line’s commission amount
     *
     * @return self
     */
    public function setPurchaseCommissionOnPrice($purchaseCommissionOnPrice)
    {
        if (is_null($purchaseCommissionOnPrice)) {
            throw new \InvalidArgumentException('non-nullable purchaseCommissionOnPrice cannot be null');
        }
        $this->container['purchaseCommissionOnPrice'] = $purchaseCommissionOnPrice;

        return $this;
    }

    /**
     * Gets purchaseCommissionOnShipping
     *
     * @return float|null
     */
    public function getPurchaseCommissionOnShipping()
    {
        return $this->container['purchaseCommissionOnShipping'];
    }

    /**
     * Sets purchaseCommissionOnShipping
     *
     * @param float|null $purchaseCommissionOnShipping Purchase order line’s commission amount on shipping
     *
     * @return self
     */
    public function setPurchaseCommissionOnShipping($purchaseCommissionOnShipping)
    {
        if (is_null($purchaseCommissionOnShipping)) {
            throw new \InvalidArgumentException('non-nullable purchaseCommissionOnShipping cannot be null');
        }
        $this->container['purchaseCommissionOnShipping'] = $purchaseCommissionOnShipping;

        return $this;
    }

    /**
     * Gets purchaseFeeAmount
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPurchaseInformationPurchaseFeeAmount|null
     */
    public function getPurchaseFeeAmount()
    {
        return $this->container['purchaseFeeAmount'];
    }

    /**
     * Sets purchaseFeeAmount
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPurchaseInformationPurchaseFeeAmount|null $purchaseFeeAmount purchaseFeeAmount
     *
     * @return self
     */
    public function setPurchaseFeeAmount($purchaseFeeAmount)
    {
        if (is_null($purchaseFeeAmount)) {
            throw new \InvalidArgumentException('non-nullable purchaseFeeAmount cannot be null');
        }
        $this->container['purchaseFeeAmount'] = $purchaseFeeAmount;

        return $this;
    }

    /**
     * Gets purchasePrice
     *
     * @return float|null
     */
    public function getPurchasePrice()
    {
        return $this->container['purchasePrice'];
    }

    /**
     * Sets purchasePrice
     *
     * @param float|null $purchasePrice Purchase order line’s price excluding shipping charges and fees
     *
     * @return self
     */
    public function setPurchasePrice($purchasePrice)
    {
        if (is_null($purchasePrice)) {
            throw new \InvalidArgumentException('non-nullable purchasePrice cannot be null');
        }
        $this->container['purchasePrice'] = $purchasePrice;

        return $this;
    }

    /**
     * Gets purchaseShippingPrice
     *
     * @return float|null
     */
    public function getPurchaseShippingPrice()
    {
        return $this->container['purchaseShippingPrice'];
    }

    /**
     * Sets purchaseShippingPrice
     *
     * @param float|null $purchaseShippingPrice Purchase order line’s shipping charges
     *
     * @return self
     */
    public function setPurchaseShippingPrice($purchaseShippingPrice)
    {
        if (is_null($purchaseShippingPrice)) {
            throw new \InvalidArgumentException('non-nullable purchaseShippingPrice cannot be null');
        }
        $this->container['purchaseShippingPrice'] = $purchaseShippingPrice;

        return $this;
    }

    /**
     * Gets purchaseUnitPrice
     *
     * @return float|null
     */
    public function getPurchaseUnitPrice()
    {
        return $this->container['purchaseUnitPrice'];
    }

    /**
     * Sets purchaseUnitPrice
     *
     * @param float|null $purchaseUnitPrice Purchase unit price computed from the given offer price
     *
     * @return self
     */
    public function setPurchaseUnitPrice($purchaseUnitPrice)
    {
        if (is_null($purchaseUnitPrice)) {
            throw new \InvalidArgumentException('non-nullable purchaseUnitPrice cannot be null');
        }
        $this->container['purchaseUnitPrice'] = $purchaseUnitPrice;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


