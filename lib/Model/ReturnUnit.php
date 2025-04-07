<?php
/**
 * ReturnUnit
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
 * ReturnUnit Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReturnUnit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnUnit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'idReturnUnit' => 'int',
        'idReturn' => 'int',
        'idOrderUnit' => 'int',
        'tsCreatedIso' => '\DateTime',
        'status' => '\OpenAPI\Client\Mirakl\Model\ReturnUnitStatus',
        'note' => 'string',
        'reason' => '\OpenAPI\Client\Mirakl\Model\ReturnReason',
        'storefront' => '\OpenAPI\Client\Mirakl\Model\Storefront',
        'fulfillmentType' => '\OpenAPI\Client\Mirakl\Model\FulfillmentType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'idReturnUnit' => 'int64',
        'idReturn' => 'int64',
        'idOrderUnit' => 'int64',
        'tsCreatedIso' => 'date-time',
        'status' => null,
        'note' => null,
        'reason' => null,
        'storefront' => null,
        'fulfillmentType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'idReturnUnit' => false,
        'idReturn' => false,
        'idOrderUnit' => false,
        'tsCreatedIso' => false,
        'status' => false,
        'note' => true,
        'reason' => false,
        'storefront' => false,
        'fulfillmentType' => false
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
        'idReturnUnit' => 'id_return_unit',
        'idReturn' => 'id_return',
        'idOrderUnit' => 'id_order_unit',
        'tsCreatedIso' => 'ts_created_iso',
        'status' => 'status',
        'note' => 'note',
        'reason' => 'reason',
        'storefront' => 'storefront',
        'fulfillmentType' => 'fulfillment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'idReturnUnit' => 'setIdReturnUnit',
        'idReturn' => 'setIdReturn',
        'idOrderUnit' => 'setIdOrderUnit',
        'tsCreatedIso' => 'setTsCreatedIso',
        'status' => 'setStatus',
        'note' => 'setNote',
        'reason' => 'setReason',
        'storefront' => 'setStorefront',
        'fulfillmentType' => 'setFulfillmentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'idReturnUnit' => 'getIdReturnUnit',
        'idReturn' => 'getIdReturn',
        'idOrderUnit' => 'getIdOrderUnit',
        'tsCreatedIso' => 'getTsCreatedIso',
        'status' => 'getStatus',
        'note' => 'getNote',
        'reason' => 'getReason',
        'storefront' => 'getStorefront',
        'fulfillmentType' => 'getFulfillmentType'
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
        $this->setIfExists('idReturnUnit', $data ?? [], null);
        $this->setIfExists('idReturn', $data ?? [], null);
        $this->setIfExists('idOrderUnit', $data ?? [], null);
        $this->setIfExists('tsCreatedIso', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('storefront', $data ?? [], null);
        $this->setIfExists('fulfillmentType', $data ?? [], null);
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

        if ($this->container['idReturnUnit'] === null) {
            $invalidProperties[] = "'idReturnUnit' can't be null";
        }
        if ($this->container['idReturn'] === null) {
            $invalidProperties[] = "'idReturn' can't be null";
        }
        if ($this->container['idOrderUnit'] === null) {
            $invalidProperties[] = "'idOrderUnit' can't be null";
        }
        if ($this->container['tsCreatedIso'] === null) {
            $invalidProperties[] = "'tsCreatedIso' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
        }
        if ($this->container['fulfillmentType'] === null) {
            $invalidProperties[] = "'fulfillmentType' can't be null";
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
     * Gets idReturnUnit
     *
     * @return int
     */
    public function getIdReturnUnit()
    {
        return $this->container['idReturnUnit'];
    }

    /**
     * Sets idReturnUnit
     *
     * @param int $idReturnUnit idReturnUnit
     *
     * @return self
     */
    public function setIdReturnUnit($idReturnUnit)
    {
        if (is_null($idReturnUnit)) {
            throw new \InvalidArgumentException('non-nullable idReturnUnit cannot be null');
        }
        $this->container['idReturnUnit'] = $idReturnUnit;

        return $this;
    }

    /**
     * Gets idReturn
     *
     * @return int
     */
    public function getIdReturn()
    {
        return $this->container['idReturn'];
    }

    /**
     * Sets idReturn
     *
     * @param int $idReturn idReturn
     *
     * @return self
     */
    public function setIdReturn($idReturn)
    {
        if (is_null($idReturn)) {
            throw new \InvalidArgumentException('non-nullable idReturn cannot be null');
        }
        $this->container['idReturn'] = $idReturn;

        return $this;
    }

    /**
     * Gets idOrderUnit
     *
     * @return int
     */
    public function getIdOrderUnit()
    {
        return $this->container['idOrderUnit'];
    }

    /**
     * Sets idOrderUnit
     *
     * @param int $idOrderUnit idOrderUnit
     *
     * @return self
     */
    public function setIdOrderUnit($idOrderUnit)
    {
        if (is_null($idOrderUnit)) {
            throw new \InvalidArgumentException('non-nullable idOrderUnit cannot be null');
        }
        $this->container['idOrderUnit'] = $idOrderUnit;

        return $this;
    }

    /**
     * Gets tsCreatedIso
     *
     * @return \DateTime
     */
    public function getTsCreatedIso()
    {
        return $this->container['tsCreatedIso'];
    }

    /**
     * Sets tsCreatedIso
     *
     * @param \DateTime $tsCreatedIso tsCreatedIso
     *
     * @return self
     */
    public function setTsCreatedIso($tsCreatedIso)
    {
        if (is_null($tsCreatedIso)) {
            throw new \InvalidArgumentException('non-nullable tsCreatedIso cannot be null');
        }
        $this->container['tsCreatedIso'] = $tsCreatedIso;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Mirakl\Model\ReturnUnitStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Mirakl\Model\ReturnUnitStatus $status status
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
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            array_push($this->openAPINullablesSetToNull, 'note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \OpenAPI\Client\Mirakl\Model\ReturnReason
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \OpenAPI\Client\Mirakl\Model\ReturnReason $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets storefront
     *
     * @return \OpenAPI\Client\Mirakl\Model\Storefront
     */
    public function getStorefront()
    {
        return $this->container['storefront'];
    }

    /**
     * Sets storefront
     *
     * @param \OpenAPI\Client\Mirakl\Model\Storefront $storefront storefront
     *
     * @return self
     */
    public function setStorefront($storefront)
    {
        if (is_null($storefront)) {
            throw new \InvalidArgumentException('non-nullable storefront cannot be null');
        }
        $this->container['storefront'] = $storefront;

        return $this;
    }

    /**
     * Gets fulfillmentType
     *
     * @return \OpenAPI\Client\Mirakl\Model\FulfillmentType
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param \OpenAPI\Client\Mirakl\Model\FulfillmentType $fulfillmentType fulfillmentType
     *
     * @return self
     */
    public function setFulfillmentType($fulfillmentType)
    {
        if (is_null($fulfillmentType)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentType cannot be null');
        }
        $this->container['fulfillmentType'] = $fulfillmentType;

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


