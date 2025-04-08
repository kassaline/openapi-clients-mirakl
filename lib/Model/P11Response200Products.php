<?php
/**
 * P11Response200Products
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
 * P11Response200Products Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class P11Response200Products implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'P11_Response_200_Products';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryCode' => 'string',
        'categoryLabel' => 'string',
        'measurement' => '\OpenAPI\Client\Mirakl\Model\P11Response200ProductsMeasurement',
        'offers' => '\OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffers[]',
        'productBrand' => 'string',
        'productDescription' => 'string',
        'productMedia' => '\OpenAPI\Client\Mirakl\Model\P11Response200ProductsProductMedia',
        'productReferences' => '\OpenAPI\Client\Mirakl\Model\P11Response200ProductsProductReferences[]',
        'productSku' => 'string',
        'productTitle' => 'string',
        'totalCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categoryCode' => null,
        'categoryLabel' => null,
        'measurement' => null,
        'offers' => null,
        'productBrand' => null,
        'productDescription' => null,
        'productMedia' => null,
        'productReferences' => null,
        'productSku' => null,
        'productTitle' => null,
        'totalCount' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'categoryCode' => false,
        'categoryLabel' => false,
        'measurement' => false,
        'offers' => false,
        'productBrand' => false,
        'productDescription' => false,
        'productMedia' => false,
        'productReferences' => false,
        'productSku' => false,
        'productTitle' => false,
        'totalCount' => false
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
        'categoryCode' => 'category_code',
        'categoryLabel' => 'category_label',
        'measurement' => 'measurement',
        'offers' => 'offers',
        'productBrand' => 'product_brand',
        'productDescription' => 'product_description',
        'productMedia' => 'product_media',
        'productReferences' => 'product_references',
        'productSku' => 'product_sku',
        'productTitle' => 'product_title',
        'totalCount' => 'total_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryCode' => 'setCategoryCode',
        'categoryLabel' => 'setCategoryLabel',
        'measurement' => 'setMeasurement',
        'offers' => 'setOffers',
        'productBrand' => 'setProductBrand',
        'productDescription' => 'setProductDescription',
        'productMedia' => 'setProductMedia',
        'productReferences' => 'setProductReferences',
        'productSku' => 'setProductSku',
        'productTitle' => 'setProductTitle',
        'totalCount' => 'setTotalCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryCode' => 'getCategoryCode',
        'categoryLabel' => 'getCategoryLabel',
        'measurement' => 'getMeasurement',
        'offers' => 'getOffers',
        'productBrand' => 'getProductBrand',
        'productDescription' => 'getProductDescription',
        'productMedia' => 'getProductMedia',
        'productReferences' => 'getProductReferences',
        'productSku' => 'getProductSku',
        'productTitle' => 'getProductTitle',
        'totalCount' => 'getTotalCount'
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
        $this->setIfExists('categoryCode', $data ?? [], null);
        $this->setIfExists('categoryLabel', $data ?? [], null);
        $this->setIfExists('measurement', $data ?? [], null);
        $this->setIfExists('offers', $data ?? [], null);
        $this->setIfExists('productBrand', $data ?? [], null);
        $this->setIfExists('productDescription', $data ?? [], null);
        $this->setIfExists('productMedia', $data ?? [], null);
        $this->setIfExists('productReferences', $data ?? [], null);
        $this->setIfExists('productSku', $data ?? [], null);
        $this->setIfExists('productTitle', $data ?? [], null);
        $this->setIfExists('totalCount', $data ?? [], null);
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
     * Gets categoryCode
     *
     * @return string|null
     */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
     * Sets categoryCode
     *
     * @param string|null $categoryCode Code of the product category
     *
     * @return self
     */
    public function setCategoryCode($categoryCode)
    {
        if (is_null($categoryCode)) {
            throw new \InvalidArgumentException('non-nullable categoryCode cannot be null');
        }
        $this->container['categoryCode'] = $categoryCode;

        return $this;
    }

    /**
     * Gets categoryLabel
     *
     * @return string|null
     */
    public function getCategoryLabel()
    {
        return $this->container['categoryLabel'];
    }

    /**
     * Sets categoryLabel
     *
     * @param string|null $categoryLabel Label of the product category
     *
     * @return self
     */
    public function setCategoryLabel($categoryLabel)
    {
        if (is_null($categoryLabel)) {
            throw new \InvalidArgumentException('non-nullable categoryLabel cannot be null');
        }
        $this->container['categoryLabel'] = $categoryLabel;

        return $this;
    }

    /**
     * Gets measurement
     *
     * @return \OpenAPI\Client\Mirakl\Model\P11Response200ProductsMeasurement|null
     */
    public function getMeasurement()
    {
        return $this->container['measurement'];
    }

    /**
     * Sets measurement
     *
     * @param \OpenAPI\Client\Mirakl\Model\P11Response200ProductsMeasurement|null $measurement measurement
     *
     * @return self
     */
    public function setMeasurement($measurement)
    {
        if (is_null($measurement)) {
            throw new \InvalidArgumentException('non-nullable measurement cannot be null');
        }
        $this->container['measurement'] = $measurement;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffers[]|null
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffers[]|null $offers List of offers for the product
     *
     * @return self
     */
    public function setOffers($offers)
    {
        if (is_null($offers)) {
            throw new \InvalidArgumentException('non-nullable offers cannot be null');
        }
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets productBrand
     *
     * @return string|null
     */
    public function getProductBrand()
    {
        return $this->container['productBrand'];
    }

    /**
     * Sets productBrand
     *
     * @param string|null $productBrand Brand of the product
     *
     * @return self
     */
    public function setProductBrand($productBrand)
    {
        if (is_null($productBrand)) {
            throw new \InvalidArgumentException('non-nullable productBrand cannot be null');
        }
        $this->container['productBrand'] = $productBrand;

        return $this;
    }

    /**
     * Gets productDescription
     *
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->container['productDescription'];
    }

    /**
     * Sets productDescription
     *
     * @param string|null $productDescription Description of the product
     *
     * @return self
     */
    public function setProductDescription($productDescription)
    {
        if (is_null($productDescription)) {
            throw new \InvalidArgumentException('non-nullable productDescription cannot be null');
        }
        $this->container['productDescription'] = $productDescription;

        return $this;
    }

    /**
     * Gets productMedia
     *
     * @return \OpenAPI\Client\Mirakl\Model\P11Response200ProductsProductMedia|null
     */
    public function getProductMedia()
    {
        return $this->container['productMedia'];
    }

    /**
     * Sets productMedia
     *
     * @param \OpenAPI\Client\Mirakl\Model\P11Response200ProductsProductMedia|null $productMedia productMedia
     *
     * @return self
     */
    public function setProductMedia($productMedia)
    {
        if (is_null($productMedia)) {
            throw new \InvalidArgumentException('non-nullable productMedia cannot be null');
        }
        $this->container['productMedia'] = $productMedia;

        return $this;
    }

    /**
     * Gets productReferences
     *
     * @return \OpenAPI\Client\Mirakl\Model\P11Response200ProductsProductReferences[]|null
     */
    public function getProductReferences()
    {
        return $this->container['productReferences'];
    }

    /**
     * Sets productReferences
     *
     * @param \OpenAPI\Client\Mirakl\Model\P11Response200ProductsProductReferences[]|null $productReferences List of product's references
     *
     * @return self
     */
    public function setProductReferences($productReferences)
    {
        if (is_null($productReferences)) {
            throw new \InvalidArgumentException('non-nullable productReferences cannot be null');
        }
        $this->container['productReferences'] = $productReferences;

        return $this;
    }

    /**
     * Gets productSku
     *
     * @return string|null
     */
    public function getProductSku()
    {
        return $this->container['productSku'];
    }

    /**
     * Sets productSku
     *
     * @param string|null $productSku SKU of the product
     *
     * @return self
     */
    public function setProductSku($productSku)
    {
        if (is_null($productSku)) {
            throw new \InvalidArgumentException('non-nullable productSku cannot be null');
        }
        $this->container['productSku'] = $productSku;

        return $this;
    }

    /**
     * Gets productTitle
     *
     * @return string|null
     */
    public function getProductTitle()
    {
        return $this->container['productTitle'];
    }

    /**
     * Sets productTitle
     *
     * @param string|null $productTitle Title of the product
     *
     * @return self
     */
    public function setProductTitle($productTitle)
    {
        if (is_null($productTitle)) {
            throw new \InvalidArgumentException('non-nullable productTitle cannot be null');
        }
        $this->container['productTitle'] = $productTitle;

        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount Number of offers for this product
     *
     * @return self
     */
    public function setTotalCount($totalCount)
    {
        if (is_null($totalCount)) {
            throw new \InvalidArgumentException('non-nullable totalCount cannot be null');
        }
        $this->container['totalCount'] = $totalCount;

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


