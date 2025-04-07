<?php
/**
 * UnitPatchRequest
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

use \ArrayAccess;
use \OpenAPI\Client\Mirakl\ObjectSerializer;

/**
 * UnitPatchRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UnitPatchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnitPatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\OpenAPI\Client\Mirakl\Model\WriteableUnitStatuses',
        'amount' => 'int',
        'handlingTime' => 'int',
        'listingPrice' => 'int',
        'minimumPrice' => 'int',
        'note' => 'string',
        'idShippingGroup' => 'int',
        'idWarehouse' => 'int',
        'vatIndicator' => '\OpenAPI\Client\Mirakl\Model\WriteableVatIndicator'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'amount' => 'int32',
        'handlingTime' => 'int32',
        'listingPrice' => 'int32',
        'minimumPrice' => 'int32',
        'note' => null,
        'idShippingGroup' => 'int64',
        'idWarehouse' => 'int64',
        'vatIndicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'amount' => false,
        'handlingTime' => false,
        'listingPrice' => false,
        'minimumPrice' => false,
        'note' => false,
        'idShippingGroup' => false,
        'idWarehouse' => false,
        'vatIndicator' => false
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
        'status' => 'status',
        'amount' => 'amount',
        'handlingTime' => 'handling_time',
        'listingPrice' => 'listing_price',
        'minimumPrice' => 'minimum_price',
        'note' => 'note',
        'idShippingGroup' => 'id_shipping_group',
        'idWarehouse' => 'id_warehouse',
        'vatIndicator' => 'vat_indicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'handlingTime' => 'setHandlingTime',
        'listingPrice' => 'setListingPrice',
        'minimumPrice' => 'setMinimumPrice',
        'note' => 'setNote',
        'idShippingGroup' => 'setIdShippingGroup',
        'idWarehouse' => 'setIdWarehouse',
        'vatIndicator' => 'setVatIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'handlingTime' => 'getHandlingTime',
        'listingPrice' => 'getListingPrice',
        'minimumPrice' => 'getMinimumPrice',
        'note' => 'getNote',
        'idShippingGroup' => 'getIdShippingGroup',
        'idWarehouse' => 'getIdWarehouse',
        'vatIndicator' => 'getVatIndicator'
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('handlingTime', $data ?? [], null);
        $this->setIfExists('listingPrice', $data ?? [], null);
        $this->setIfExists('minimumPrice', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('idShippingGroup', $data ?? [], null);
        $this->setIfExists('idWarehouse', $data ?? [], null);
        $this->setIfExists('vatIndicator', $data ?? [], null);
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

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['handlingTime']) && ($this->container['handlingTime'] > 100)) {
            $invalidProperties[] = "invalid value for 'handlingTime', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['handlingTime']) && ($this->container['handlingTime'] < 0)) {
            $invalidProperties[] = "invalid value for 'handlingTime', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['listingPrice']) && ($this->container['listingPrice'] < 1)) {
            $invalidProperties[] = "invalid value for 'listingPrice', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['minimumPrice']) && ($this->container['minimumPrice'] < 1)) {
            $invalidProperties[] = "invalid value for 'minimumPrice', must be bigger than or equal to 1.";
        }

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
     * Gets status
     *
     * @return \OpenAPI\Client\Mirakl\Model\WriteableUnitStatuses|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Mirakl\Model\WriteableUnitStatuses|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Amount of available Units
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling UnitPatchRequest., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets handlingTime
     *
     * @return int|null
     */
    public function getHandlingTime()
    {
        return $this->container['handlingTime'];
    }

    /**
     * Sets handlingTime
     *
     * @param int|null $handlingTime handling time
     *
     * @return self
     */
    public function setHandlingTime($handlingTime)
    {
        if (is_null($handlingTime)) {
            throw new \InvalidArgumentException('non-nullable handlingTime cannot be null');
        }

        if (($handlingTime > 100)) {
            throw new \InvalidArgumentException('invalid value for $handlingTime when calling UnitPatchRequest., must be smaller than or equal to 100.');
        }
        if (($handlingTime < 0)) {
            throw new \InvalidArgumentException('invalid value for $handlingTime when calling UnitPatchRequest., must be bigger than or equal to 0.');
        }

        $this->container['handlingTime'] = $handlingTime;

        return $this;
    }

    /**
     * Gets listingPrice
     *
     * @return int|null
     */
    public function getListingPrice()
    {
        return $this->container['listingPrice'];
    }

    /**
     * Sets listingPrice
     *
     * @param int|null $listingPrice Listing price, in integral cents of the storefront's currency (CZK for cz, EUR for de, sk, at and PLN for pl). Minimum 1 cent, maximum differs by storefront (25 million CZK, 1 million EUR or 4.5 million PLN).
     *
     * @return self
     */
    public function setListingPrice($listingPrice)
    {
        if (is_null($listingPrice)) {
            throw new \InvalidArgumentException('non-nullable listingPrice cannot be null');
        }

        if (($listingPrice < 1)) {
            throw new \InvalidArgumentException('invalid value for $listingPrice when calling UnitPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['listingPrice'] = $listingPrice;

        return $this;
    }

    /**
     * Gets minimumPrice
     *
     * @return int|null
     */
    public function getMinimumPrice()
    {
        return $this->container['minimumPrice'];
    }

    /**
     * Sets minimumPrice
     *
     * @param int|null $minimumPrice Minimum price, in integral cents of the storefront's currency. Only relevant if you want to use Smart Pricing.
     *
     * @return self
     */
    public function setMinimumPrice($minimumPrice)
    {
        if (is_null($minimumPrice)) {
            throw new \InvalidArgumentException('non-nullable minimumPrice cannot be null');
        }

        if (($minimumPrice < 1)) {
            throw new \InvalidArgumentException('invalid value for $minimumPrice when calling UnitPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['minimumPrice'] = $minimumPrice;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note A note for this unit
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets idShippingGroup
     *
     * @return int|null
     */
    public function getIdShippingGroup()
    {
        return $this->container['idShippingGroup'];
    }

    /**
     * Sets idShippingGroup
     *
     * @param int|null $idShippingGroup ID of the shipping group
     *
     * @return self
     */
    public function setIdShippingGroup($idShippingGroup)
    {
        if (is_null($idShippingGroup)) {
            throw new \InvalidArgumentException('non-nullable idShippingGroup cannot be null');
        }
        $this->container['idShippingGroup'] = $idShippingGroup;

        return $this;
    }

    /**
     * Gets idWarehouse
     *
     * @return int|null
     */
    public function getIdWarehouse()
    {
        return $this->container['idWarehouse'];
    }

    /**
     * Sets idWarehouse
     *
     * @param int|null $idWarehouse ID of warehouse
     *
     * @return self
     */
    public function setIdWarehouse($idWarehouse)
    {
        if (is_null($idWarehouse)) {
            throw new \InvalidArgumentException('non-nullable idWarehouse cannot be null');
        }
        $this->container['idWarehouse'] = $idWarehouse;

        return $this;
    }

    /**
     * Gets vatIndicator
     *
     * @return \OpenAPI\Client\Mirakl\Model\WriteableVatIndicator|null
     */
    public function getVatIndicator()
    {
        return $this->container['vatIndicator'];
    }

    /**
     * Sets vatIndicator
     *
     * @param \OpenAPI\Client\Mirakl\Model\WriteableVatIndicator|null $vatIndicator vatIndicator
     *
     * @return self
     */
    public function setVatIndicator($vatIndicator)
    {
        if (is_null($vatIndicator)) {
            throw new \InvalidArgumentException('non-nullable vatIndicator cannot be null');
        }
        $this->container['vatIndicator'] = $vatIndicator;

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


