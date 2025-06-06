<?php
/**
 * P11Response200ProductsOffersApplicablePricing
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
 * P11Response200ProductsOffersApplicablePricing Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class P11Response200ProductsOffersApplicablePricing implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'P11_Response_200_Products_Offers_ApplicablePricing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => '\OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffersApplicablePricingContext',
        'discountEndDate' => '\DateTime',
        'discountStartDate' => '\DateTime',
        'price' => 'float',
        'unitDiscountPrice' => 'float',
        'unitOriginPrice' => 'float',
        'volumePrices' => '\OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffersApplicablePricingVolumePrices[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'context' => null,
        'discountEndDate' => 'date-time',
        'discountStartDate' => 'date-time',
        'price' => null,
        'unitDiscountPrice' => null,
        'unitOriginPrice' => null,
        'volumePrices' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'context' => false,
        'discountEndDate' => false,
        'discountStartDate' => false,
        'price' => false,
        'unitDiscountPrice' => false,
        'unitOriginPrice' => false,
        'volumePrices' => false
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
        'context' => 'context',
        'discountEndDate' => 'discount_end_date',
        'discountStartDate' => 'discount_start_date',
        'price' => 'price',
        'unitDiscountPrice' => 'unit_discount_price',
        'unitOriginPrice' => 'unit_origin_price',
        'volumePrices' => 'volume_prices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'discountEndDate' => 'setDiscountEndDate',
        'discountStartDate' => 'setDiscountStartDate',
        'price' => 'setPrice',
        'unitDiscountPrice' => 'setUnitDiscountPrice',
        'unitOriginPrice' => 'setUnitOriginPrice',
        'volumePrices' => 'setVolumePrices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'discountEndDate' => 'getDiscountEndDate',
        'discountStartDate' => 'getDiscountStartDate',
        'price' => 'getPrice',
        'unitDiscountPrice' => 'getUnitDiscountPrice',
        'unitOriginPrice' => 'getUnitOriginPrice',
        'volumePrices' => 'getVolumePrices'
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
        $this->setIfExists('context', $data ?? [], null);
        $this->setIfExists('discountEndDate', $data ?? [], null);
        $this->setIfExists('discountStartDate', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('unitDiscountPrice', $data ?? [], null);
        $this->setIfExists('unitOriginPrice', $data ?? [], null);
        $this->setIfExists('volumePrices', $data ?? [], null);
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
     * Gets context
     *
     * @return \OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffersApplicablePricingContext|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffersApplicablePricingContext|null $context context
     *
     * @return self
     */
    public function setContext($context)
    {
        if (is_null($context)) {
            throw new \InvalidArgumentException('non-nullable context cannot be null');
        }
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets discountEndDate
     *
     * @return \DateTime|null
     */
    public function getDiscountEndDate()
    {
        return $this->container['discountEndDate'];
    }

    /**
     * Sets discountEndDate
     *
     * @param \DateTime|null $discountEndDate End date of the discount, or null if no discount exists or if the discount does not have an end date.
     *
     * @return self
     */
    public function setDiscountEndDate($discountEndDate)
    {
        if (is_null($discountEndDate)) {
            throw new \InvalidArgumentException('non-nullable discountEndDate cannot be null');
        }
        $this->container['discountEndDate'] = $discountEndDate;

        return $this;
    }

    /**
     * Gets discountStartDate
     *
     * @return \DateTime|null
     */
    public function getDiscountStartDate()
    {
        return $this->container['discountStartDate'];
    }

    /**
     * Sets discountStartDate
     *
     * @param \DateTime|null $discountStartDate Start date of the discount, or null if no discount exists or if the discount does not have a start date.
     *
     * @return self
     */
    public function setDiscountStartDate($discountStartDate)
    {
        if (is_null($discountStartDate)) {
            throw new \InvalidArgumentException('non-nullable discountStartDate cannot be null');
        }
        $this->container['discountStartDate'] = $discountStartDate;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Price of the offer. <br/> For Dropship specifically: the purchasing price of the offer <br/> If a discount is defined and is currently active (within the validity interval), it represents the unit_discount_price. <br/> In other cases, it represents the unit_origin_price.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets unitDiscountPrice
     *
     * @return float|null
     */
    public function getUnitDiscountPrice()
    {
        return $this->container['unitDiscountPrice'];
    }

    /**
     * Sets unitDiscountPrice
     *
     * @param float|null $unitDiscountPrice Discount price for a quantity of one, i.e. the discount price for a quantity of one. <br/> For Dropship specifically: the discount purchasing price for a quantity of one <br/> Set to null if no discount is defined or if no discount price for a quantity of one is defined.
     *
     * @return self
     */
    public function setUnitDiscountPrice($unitDiscountPrice)
    {
        if (is_null($unitDiscountPrice)) {
            throw new \InvalidArgumentException('non-nullable unitDiscountPrice cannot be null');
        }
        $this->container['unitDiscountPrice'] = $unitDiscountPrice;

        return $this;
    }

    /**
     * Gets unitOriginPrice
     *
     * @return float|null
     */
    public function getUnitOriginPrice()
    {
        return $this->container['unitOriginPrice'];
    }

    /**
     * Sets unitOriginPrice
     *
     * @param float|null $unitOriginPrice Original price for a quantity of one, i.e. the price for a quantity of one regardless of the discounts. <br/> For Dropship specifically: the purchasing price for a quantity of one, also referred to as cost or wholesale price
     *
     * @return self
     */
    public function setUnitOriginPrice($unitOriginPrice)
    {
        if (is_null($unitOriginPrice)) {
            throw new \InvalidArgumentException('non-nullable unitOriginPrice cannot be null');
        }
        $this->container['unitOriginPrice'] = $unitOriginPrice;

        return $this;
    }

    /**
     * Gets volumePrices
     *
     * @return \OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffersApplicablePricingVolumePrices[]|null
     */
    public function getVolumePrices()
    {
        return $this->container['volumePrices'];
    }

    /**
     * Sets volumePrices
     *
     * @param \OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffersApplicablePricingVolumePrices[]|null $volumePrices Volume prices for each quantity threshold. Returns at least the price for a quantity threshold of one. <br/> Not applicable for Dropship offers
     *
     * @return self
     */
    public function setVolumePrices($volumePrices)
    {
        if (is_null($volumePrices)) {
            throw new \InvalidArgumentException('non-nullable volumePrices cannot be null');
        }
        $this->container['volumePrices'] = $volumePrices;

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


