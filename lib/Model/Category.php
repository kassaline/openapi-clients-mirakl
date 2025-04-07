<?php
/**
 * Category
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
 * Category Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Category implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'titleSingular' => 'string',
        'titlePlural' => 'string',
        'level' => 'float',
        'url' => 'string',
        'isLeaf' => 'bool',
        'idCategory' => 'int',
        'idParentCategory' => 'int',
        'shippingCategory' => 'string',
        'variableFee' => 'float',
        'fixedFee' => 'float',
        'vat' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'titleSingular' => null,
        'titlePlural' => null,
        'level' => 'double',
        'url' => null,
        'isLeaf' => null,
        'idCategory' => 'int64',
        'idParentCategory' => 'int64',
        'shippingCategory' => null,
        'variableFee' => 'double',
        'fixedFee' => 'double',
        'vat' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'titleSingular' => false,
        'titlePlural' => false,
        'level' => false,
        'url' => false,
        'isLeaf' => false,
        'idCategory' => false,
        'idParentCategory' => false,
        'shippingCategory' => false,
        'variableFee' => false,
        'fixedFee' => false,
        'vat' => false
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
        'name' => 'name',
        'titleSingular' => 'title_singular',
        'titlePlural' => 'title_plural',
        'level' => 'level',
        'url' => 'url',
        'isLeaf' => 'is_leaf',
        'idCategory' => 'id_category',
        'idParentCategory' => 'id_parent_category',
        'shippingCategory' => 'shipping_category',
        'variableFee' => 'variable_fee',
        'fixedFee' => 'fixed_fee',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'titleSingular' => 'setTitleSingular',
        'titlePlural' => 'setTitlePlural',
        'level' => 'setLevel',
        'url' => 'setUrl',
        'isLeaf' => 'setIsLeaf',
        'idCategory' => 'setIdCategory',
        'idParentCategory' => 'setIdParentCategory',
        'shippingCategory' => 'setShippingCategory',
        'variableFee' => 'setVariableFee',
        'fixedFee' => 'setFixedFee',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'titleSingular' => 'getTitleSingular',
        'titlePlural' => 'getTitlePlural',
        'level' => 'getLevel',
        'url' => 'getUrl',
        'isLeaf' => 'getIsLeaf',
        'idCategory' => 'getIdCategory',
        'idParentCategory' => 'getIdParentCategory',
        'shippingCategory' => 'getShippingCategory',
        'variableFee' => 'getVariableFee',
        'fixedFee' => 'getFixedFee',
        'vat' => 'getVat'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('titleSingular', $data ?? [], null);
        $this->setIfExists('titlePlural', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('isLeaf', $data ?? [], null);
        $this->setIfExists('idCategory', $data ?? [], null);
        $this->setIfExists('idParentCategory', $data ?? [], null);
        $this->setIfExists('shippingCategory', $data ?? [], null);
        $this->setIfExists('variableFee', $data ?? [], null);
        $this->setIfExists('fixedFee', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['titleSingular'] === null) {
            $invalidProperties[] = "'titleSingular' can't be null";
        }
        if ($this->container['titlePlural'] === null) {
            $invalidProperties[] = "'titlePlural' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['isLeaf'] === null) {
            $invalidProperties[] = "'isLeaf' can't be null";
        }
        if ($this->container['idCategory'] === null) {
            $invalidProperties[] = "'idCategory' can't be null";
        }
        if (($this->container['idCategory'] < 1)) {
            $invalidProperties[] = "invalid value for 'idCategory', must be bigger than or equal to 1.";
        }

        if ($this->container['idParentCategory'] === null) {
            $invalidProperties[] = "'idParentCategory' can't be null";
        }
        if (($this->container['idParentCategory'] < 1)) {
            $invalidProperties[] = "invalid value for 'idParentCategory', must be bigger than or equal to 1.";
        }

        if ($this->container['shippingCategory'] === null) {
            $invalidProperties[] = "'shippingCategory' can't be null";
        }
        if ($this->container['variableFee'] === null) {
            $invalidProperties[] = "'variableFee' can't be null";
        }
        if ($this->container['fixedFee'] === null) {
            $invalidProperties[] = "'fixedFee' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets titleSingular
     *
     * @return string
     */
    public function getTitleSingular()
    {
        return $this->container['titleSingular'];
    }

    /**
     * Sets titleSingular
     *
     * @param string $titleSingular titleSingular
     *
     * @return self
     */
    public function setTitleSingular($titleSingular)
    {
        if (is_null($titleSingular)) {
            throw new \InvalidArgumentException('non-nullable titleSingular cannot be null');
        }
        $this->container['titleSingular'] = $titleSingular;

        return $this;
    }

    /**
     * Gets titlePlural
     *
     * @return string
     */
    public function getTitlePlural()
    {
        return $this->container['titlePlural'];
    }

    /**
     * Sets titlePlural
     *
     * @param string $titlePlural titlePlural
     *
     * @return self
     */
    public function setTitlePlural($titlePlural)
    {
        if (is_null($titlePlural)) {
            throw new \InvalidArgumentException('non-nullable titlePlural cannot be null');
        }
        $this->container['titlePlural'] = $titlePlural;

        return $this;
    }

    /**
     * Gets level
     *
     * @return float
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param float $level level
     *
     * @return self
     */
    public function setLevel($level)
    {
        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets isLeaf
     *
     * @return bool
     */
    public function getIsLeaf()
    {
        return $this->container['isLeaf'];
    }

    /**
     * Sets isLeaf
     *
     * @param bool $isLeaf isLeaf
     *
     * @return self
     */
    public function setIsLeaf($isLeaf)
    {
        if (is_null($isLeaf)) {
            throw new \InvalidArgumentException('non-nullable isLeaf cannot be null');
        }
        $this->container['isLeaf'] = $isLeaf;

        return $this;
    }

    /**
     * Gets idCategory
     *
     * @return int
     */
    public function getIdCategory()
    {
        return $this->container['idCategory'];
    }

    /**
     * Sets idCategory
     *
     * @param int $idCategory idCategory
     *
     * @return self
     */
    public function setIdCategory($idCategory)
    {
        if (is_null($idCategory)) {
            throw new \InvalidArgumentException('non-nullable idCategory cannot be null');
        }

        if (($idCategory < 1)) {
            throw new \InvalidArgumentException('invalid value for $idCategory when calling Category., must be bigger than or equal to 1.');
        }

        $this->container['idCategory'] = $idCategory;

        return $this;
    }

    /**
     * Gets idParentCategory
     *
     * @return int
     */
    public function getIdParentCategory()
    {
        return $this->container['idParentCategory'];
    }

    /**
     * Sets idParentCategory
     *
     * @param int $idParentCategory idParentCategory
     *
     * @return self
     */
    public function setIdParentCategory($idParentCategory)
    {
        if (is_null($idParentCategory)) {
            throw new \InvalidArgumentException('non-nullable idParentCategory cannot be null');
        }

        if (($idParentCategory < 1)) {
            throw new \InvalidArgumentException('invalid value for $idParentCategory when calling Category., must be bigger than or equal to 1.');
        }

        $this->container['idParentCategory'] = $idParentCategory;

        return $this;
    }

    /**
     * Gets shippingCategory
     *
     * @return string
     */
    public function getShippingCategory()
    {
        return $this->container['shippingCategory'];
    }

    /**
     * Sets shippingCategory
     *
     * @param string $shippingCategory shippingCategory
     *
     * @return self
     */
    public function setShippingCategory($shippingCategory)
    {
        if (is_null($shippingCategory)) {
            throw new \InvalidArgumentException('non-nullable shippingCategory cannot be null');
        }
        $this->container['shippingCategory'] = $shippingCategory;

        return $this;
    }

    /**
     * Gets variableFee
     *
     * @return float
     */
    public function getVariableFee()
    {
        return $this->container['variableFee'];
    }

    /**
     * Sets variableFee
     *
     * @param float $variableFee variableFee
     *
     * @return self
     */
    public function setVariableFee($variableFee)
    {
        if (is_null($variableFee)) {
            throw new \InvalidArgumentException('non-nullable variableFee cannot be null');
        }
        $this->container['variableFee'] = $variableFee;

        return $this;
    }

    /**
     * Gets fixedFee
     *
     * @return float
     */
    public function getFixedFee()
    {
        return $this->container['fixedFee'];
    }

    /**
     * Sets fixedFee
     *
     * @param float $fixedFee fixedFee
     *
     * @return self
     */
    public function setFixedFee($fixedFee)
    {
        if (is_null($fixedFee)) {
            throw new \InvalidArgumentException('non-nullable fixedFee cannot be null');
        }
        $this->container['fixedFee'] = $fixedFee;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param float $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

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


