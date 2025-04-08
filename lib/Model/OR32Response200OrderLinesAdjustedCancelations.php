<?php
/**
 * OR32Response200OrderLinesAdjustedCancelations
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
 * OR32Response200OrderLinesAdjustedCancelations Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OR32Response200OrderLinesAdjustedCancelations implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OR32_Response_200_OrderLinesAdjusted_Cancelations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'currencyIsoCode' => 'string',
        'ecoContributions' => '\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsEcoContributions[]',
        'quantity' => 'int',
        'reasonCode' => 'string',
        'shippingAmount' => 'float',
        'shippingTaxes' => '\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsShippingTaxes[]',
        'taxes' => '\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsTaxes[]'
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
        'currencyIsoCode' => null,
        'ecoContributions' => null,
        'quantity' => 'int32',
        'reasonCode' => null,
        'shippingAmount' => null,
        'shippingTaxes' => null,
        'taxes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'currencyIsoCode' => false,
        'ecoContributions' => false,
        'quantity' => false,
        'reasonCode' => false,
        'shippingAmount' => false,
        'shippingTaxes' => false,
        'taxes' => false
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
        'currencyIsoCode' => 'currency_iso_code',
        'ecoContributions' => 'eco_contributions',
        'quantity' => 'quantity',
        'reasonCode' => 'reason_code',
        'shippingAmount' => 'shipping_amount',
        'shippingTaxes' => 'shipping_taxes',
        'taxes' => 'taxes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currencyIsoCode' => 'setCurrencyIsoCode',
        'ecoContributions' => 'setEcoContributions',
        'quantity' => 'setQuantity',
        'reasonCode' => 'setReasonCode',
        'shippingAmount' => 'setShippingAmount',
        'shippingTaxes' => 'setShippingTaxes',
        'taxes' => 'setTaxes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currencyIsoCode' => 'getCurrencyIsoCode',
        'ecoContributions' => 'getEcoContributions',
        'quantity' => 'getQuantity',
        'reasonCode' => 'getReasonCode',
        'shippingAmount' => 'getShippingAmount',
        'shippingTaxes' => 'getShippingTaxes',
        'taxes' => 'getTaxes'
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
        $this->setIfExists('currencyIsoCode', $data ?? [], null);
        $this->setIfExists('ecoContributions', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('reasonCode', $data ?? [], null);
        $this->setIfExists('shippingAmount', $data ?? [], null);
        $this->setIfExists('shippingTaxes', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
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
     * @param float|null $amount The offer part amount canceled
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
     * Gets currencyIsoCode
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->container['currencyIsoCode'];
    }

    /**
     * Sets currencyIsoCode
     *
     * @param string|null $currencyIsoCode currencyIsoCode
     *
     * @return self
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
        if (is_null($currencyIsoCode)) {
            throw new \InvalidArgumentException('non-nullable currencyIsoCode cannot be null');
        }
        $this->container['currencyIsoCode'] = $currencyIsoCode;

        return $this;
    }

    /**
     * Gets ecoContributions
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsEcoContributions[]|null
     */
    public function getEcoContributions()
    {
        return $this->container['ecoContributions'];
    }

    /**
     * Sets ecoContributions
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsEcoContributions[]|null $ecoContributions List of eco-contribution amounts and corresponding producer identifiers, if applicable<br/> Only available if the operator activates the circular economy information collection.
     *
     * @return self
     */
    public function setEcoContributions($ecoContributions)
    {
        if (is_null($ecoContributions)) {
            throw new \InvalidArgumentException('non-nullable ecoContributions cannot be null');
        }
        $this->container['ecoContributions'] = $ecoContributions;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity of goods canceled
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets reasonCode
     *
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
     * Sets reasonCode
     *
     * @param string|null $reasonCode Cancellation's reason code
     *
     * @return self
     */
    public function setReasonCode($reasonCode)
    {
        if (is_null($reasonCode)) {
            throw new \InvalidArgumentException('non-nullable reasonCode cannot be null');
        }
        $this->container['reasonCode'] = $reasonCode;

        return $this;
    }

    /**
     * Gets shippingAmount
     *
     * @return float|null
     */
    public function getShippingAmount()
    {
        return $this->container['shippingAmount'];
    }

    /**
     * Sets shippingAmount
     *
     * @param float|null $shippingAmount The shipping charges part amount canceled
     *
     * @return self
     */
    public function setShippingAmount($shippingAmount)
    {
        if (is_null($shippingAmount)) {
            throw new \InvalidArgumentException('non-nullable shippingAmount cannot be null');
        }
        $this->container['shippingAmount'] = $shippingAmount;

        return $this;
    }

    /**
     * Gets shippingTaxes
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsShippingTaxes[]|null
     */
    public function getShippingTaxes()
    {
        return $this->container['shippingTaxes'];
    }

    /**
     * Sets shippingTaxes
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsShippingTaxes[]|null $shippingTaxes The taxes canceled on the shipping price
     *
     * @return self
     */
    public function setShippingTaxes($shippingTaxes)
    {
        if (is_null($shippingTaxes)) {
            throw new \InvalidArgumentException('non-nullable shippingTaxes cannot be null');
        }
        $this->container['shippingTaxes'] = $shippingTaxes;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsTaxes[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsTaxes[]|null $taxes The taxes canceled on the product price
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        if (is_null($taxes)) {
            throw new \InvalidArgumentException('non-nullable taxes cannot be null');
        }
        $this->container['taxes'] = $taxes;

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


