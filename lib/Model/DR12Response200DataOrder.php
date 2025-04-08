<?php
/**
 * DR12Response200DataOrder
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
 * DR12Response200DataOrder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DR12Response200DataOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DR12_Response_200_Data_Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commercialId' => 'string',
        'id' => 'string',
        'referenceForCustomer' => 'string',
        'referenceForSeller' => 'string',
        'transactionInfo' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataOrderTransactionInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'commercialId' => null,
        'id' => null,
        'referenceForCustomer' => null,
        'referenceForSeller' => null,
        'transactionInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'commercialId' => false,
        'id' => false,
        'referenceForCustomer' => false,
        'referenceForSeller' => false,
        'transactionInfo' => false
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
        'commercialId' => 'commercial_id',
        'id' => 'id',
        'referenceForCustomer' => 'reference_for_customer',
        'referenceForSeller' => 'reference_for_seller',
        'transactionInfo' => 'transaction_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commercialId' => 'setCommercialId',
        'id' => 'setId',
        'referenceForCustomer' => 'setReferenceForCustomer',
        'referenceForSeller' => 'setReferenceForSeller',
        'transactionInfo' => 'setTransactionInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commercialId' => 'getCommercialId',
        'id' => 'getId',
        'referenceForCustomer' => 'getReferenceForCustomer',
        'referenceForSeller' => 'getReferenceForSeller',
        'transactionInfo' => 'getTransactionInfo'
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
        $this->setIfExists('commercialId', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('referenceForCustomer', $data ?? [], null);
        $this->setIfExists('referenceForSeller', $data ?? [], null);
        $this->setIfExists('transactionInfo', $data ?? [], null);
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
     * Gets commercialId
     *
     * @return string|null
     */
    public function getCommercialId()
    {
        return $this->container['commercialId'];
    }

    /**
     * Sets commercialId
     *
     * @param string|null $commercialId Order commercial identifier
     *
     * @return self
     */
    public function setCommercialId($commercialId)
    {
        if (is_null($commercialId)) {
            throw new \InvalidArgumentException('non-nullable commercialId cannot be null');
        }
        $this->container['commercialId'] = $commercialId;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Order identifier
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets referenceForCustomer
     *
     * @return string|null
     */
    public function getReferenceForCustomer()
    {
        return $this->container['referenceForCustomer'];
    }

    /**
     * Sets referenceForCustomer
     *
     * @param string|null $referenceForCustomer Order reference for customer
     *
     * @return self
     */
    public function setReferenceForCustomer($referenceForCustomer)
    {
        if (is_null($referenceForCustomer)) {
            throw new \InvalidArgumentException('non-nullable referenceForCustomer cannot be null');
        }
        $this->container['referenceForCustomer'] = $referenceForCustomer;

        return $this;
    }

    /**
     * Gets referenceForSeller
     *
     * @return string|null
     */
    public function getReferenceForSeller()
    {
        return $this->container['referenceForSeller'];
    }

    /**
     * Sets referenceForSeller
     *
     * @param string|null $referenceForSeller Order reference for seller
     *
     * @return self
     */
    public function setReferenceForSeller($referenceForSeller)
    {
        if (is_null($referenceForSeller)) {
            throw new \InvalidArgumentException('non-nullable referenceForSeller cannot be null');
        }
        $this->container['referenceForSeller'] = $referenceForSeller;

        return $this;
    }

    /**
     * Gets transactionInfo
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataOrderTransactionInfo|null
     */
    public function getTransactionInfo()
    {
        return $this->container['transactionInfo'];
    }

    /**
     * Sets transactionInfo
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataOrderTransactionInfo|null $transactionInfo transactionInfo
     *
     * @return self
     */
    public function setTransactionInfo($transactionInfo)
    {
        if (is_null($transactionInfo)) {
            throw new \InvalidArgumentException('non-nullable transactionInfo cannot be null');
        }
        $this->container['transactionInfo'] = $transactionInfo;

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


