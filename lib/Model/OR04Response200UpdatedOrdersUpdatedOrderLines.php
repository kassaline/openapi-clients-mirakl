<?php
/**
 * OR04Response200UpdatedOrdersUpdatedOrderLines
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
 * OR04Response200UpdatedOrdersUpdatedOrderLines Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OR04Response200UpdatedOrdersUpdatedOrderLines implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OR04_Response_200_UpdatedOrders_Updated_OrderLines';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cancelations' => '\OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesCancelations[]',
        'ecoContributions' => '\OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesEcoContributions[]',
        'orderLineId' => 'string',
        'refunds' => '\OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesRefunds[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cancelations' => null,
        'ecoContributions' => null,
        'orderLineId' => null,
        'refunds' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cancelations' => false,
        'ecoContributions' => false,
        'orderLineId' => false,
        'refunds' => false
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
        'cancelations' => 'cancelations',
        'ecoContributions' => 'eco_contributions',
        'orderLineId' => 'order_line_id',
        'refunds' => 'refunds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancelations' => 'setCancelations',
        'ecoContributions' => 'setEcoContributions',
        'orderLineId' => 'setOrderLineId',
        'refunds' => 'setRefunds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancelations' => 'getCancelations',
        'ecoContributions' => 'getEcoContributions',
        'orderLineId' => 'getOrderLineId',
        'refunds' => 'getRefunds'
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
        $this->setIfExists('cancelations', $data ?? [], null);
        $this->setIfExists('ecoContributions', $data ?? [], null);
        $this->setIfExists('orderLineId', $data ?? [], null);
        $this->setIfExists('refunds', $data ?? [], null);
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
     * Gets cancelations
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesCancelations[]|null
     */
    public function getCancelations()
    {
        return $this->container['cancelations'];
    }

    /**
     * Sets cancelations
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesCancelations[]|null $cancelations List of the cancelations
     *
     * @return self
     */
    public function setCancelations($cancelations)
    {
        if (is_null($cancelations)) {
            throw new \InvalidArgumentException('non-nullable cancelations cannot be null');
        }
        $this->container['cancelations'] = $cancelations;

        return $this;
    }

    /**
     * Gets ecoContributions
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesEcoContributions[]|null
     */
    public function getEcoContributions()
    {
        return $this->container['ecoContributions'];
    }

    /**
     * Sets ecoContributions
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesEcoContributions[]|null $ecoContributions List of eco-contribution amounts and corresponding producer identifiers, if applicable
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
     * Gets orderLineId
     *
     * @return string|null
     */
    public function getOrderLineId()
    {
        return $this->container['orderLineId'];
    }

    /**
     * Sets orderLineId
     *
     * @param string|null $orderLineId Order line's identifier
     *
     * @return self
     */
    public function setOrderLineId($orderLineId)
    {
        if (is_null($orderLineId)) {
            throw new \InvalidArgumentException('non-nullable orderLineId cannot be null');
        }
        $this->container['orderLineId'] = $orderLineId;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesRefunds[]|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR04Response200UpdatedOrdersUpdatedOrderLinesRefunds[]|null $refunds List of the refunds
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        if (is_null($refunds)) {
            throw new \InvalidArgumentException('non-nullable refunds cannot be null');
        }
        $this->container['refunds'] = $refunds;

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


