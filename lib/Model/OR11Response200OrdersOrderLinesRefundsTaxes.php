<?php
/**
 * OR11Response200OrdersOrderLinesRefundsTaxes
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
 * OR11Response200OrdersOrderLinesRefundsTaxes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OR11Response200OrdersOrderLinesRefundsTaxes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OR11_Response_200_Orders_OrderLines_Refunds_Taxes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'amountBreakdown' => '\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsTaxesAmountBreakdown',
        'code' => 'string',
        'purchaseTax' => '\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsTaxesPurchaseTax',
        'rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'amountBreakdown' => null,
        'code' => null,
        'purchaseTax' => null,
        'rate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'amountBreakdown' => false,
        'code' => false,
        'purchaseTax' => false,
        'rate' => false
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
        'amount' => 'amount',
        'amountBreakdown' => 'amount_breakdown',
        'code' => 'code',
        'purchaseTax' => 'purchase_tax',
        'rate' => 'rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'amountBreakdown' => 'setAmountBreakdown',
        'code' => 'setCode',
        'purchaseTax' => 'setPurchaseTax',
        'rate' => 'setRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'amountBreakdown' => 'getAmountBreakdown',
        'code' => 'getCode',
        'purchaseTax' => 'getPurchaseTax',
        'rate' => 'getRate'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('amountBreakdown', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('purchaseTax', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Tax amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amountBreakdown
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsTaxesAmountBreakdown|null
     */
    public function getAmountBreakdown()
    {
        return $this->container['amountBreakdown'];
    }

    /**
     * Sets amountBreakdown
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsTaxesAmountBreakdown|null $amountBreakdown amountBreakdown
     *
     * @return self
     */
    public function setAmountBreakdown($amountBreakdown)
    {
        if (is_null($amountBreakdown)) {
            throw new \InvalidArgumentException('non-nullable amountBreakdown cannot be null');
        }
        $this->container['amountBreakdown'] = $amountBreakdown;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Tax code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets purchaseTax
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsTaxesPurchaseTax|null
     */
    public function getPurchaseTax()
    {
        return $this->container['purchaseTax'];
    }

    /**
     * Sets purchaseTax
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsTaxesPurchaseTax|null $purchaseTax purchaseTax
     *
     * @return self
     */
    public function setPurchaseTax($purchaseTax)
    {
        if (is_null($purchaseTax)) {
            throw new \InvalidArgumentException('non-nullable purchaseTax cannot be null');
        }
        $this->container['purchaseTax'] = $purchaseTax;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate Tax rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }
        $this->container['rate'] = $rate;

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


