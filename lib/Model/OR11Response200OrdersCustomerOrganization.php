<?php
/**
 * OR11Response200OrdersCustomerOrganization
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
 * OR11Response200OrdersCustomerOrganization Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OR11Response200OrdersCustomerOrganization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OR11_Response_200_Orders_Customer_Organization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => '\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersCustomerOrganizationAddress',
        'identificationNumber' => 'string',
        'name' => 'string',
        'organizationId' => 'string',
        'taxIdentificationNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'identificationNumber' => null,
        'name' => null,
        'organizationId' => null,
        'taxIdentificationNumber' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
        'identificationNumber' => false,
        'name' => false,
        'organizationId' => false,
        'taxIdentificationNumber' => false
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
        'address' => 'address',
        'identificationNumber' => 'identification_number',
        'name' => 'name',
        'organizationId' => 'organization_id',
        'taxIdentificationNumber' => 'tax_identification_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'identificationNumber' => 'setIdentificationNumber',
        'name' => 'setName',
        'organizationId' => 'setOrganizationId',
        'taxIdentificationNumber' => 'setTaxIdentificationNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'identificationNumber' => 'getIdentificationNumber',
        'name' => 'getName',
        'organizationId' => 'getOrganizationId',
        'taxIdentificationNumber' => 'getTaxIdentificationNumber'
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('identificationNumber', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('organizationId', $data ?? [], null);
        $this->setIfExists('taxIdentificationNumber', $data ?? [], null);
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

        if (!is_null($this->container['identificationNumber']) && (mb_strlen($this->container['identificationNumber']) > 255)) {
            $invalidProperties[] = "invalid value for 'identificationNumber', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['organizationId']) && (mb_strlen($this->container['organizationId']) > 50)) {
            $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['taxIdentificationNumber']) && (mb_strlen($this->container['taxIdentificationNumber']) > 255)) {
            $invalidProperties[] = "invalid value for 'taxIdentificationNumber', the character length must be smaller than or equal to 255.";
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
     * Gets address
     *
     * @return \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersCustomerOrganizationAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Mirakl\Model\OR11Response200OrdersCustomerOrganizationAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets identificationNumber
     *
     * @return string|null
     */
    public function getIdentificationNumber()
    {
        return $this->container['identificationNumber'];
    }

    /**
     * Sets identificationNumber
     *
     * @param string|null $identificationNumber Number used to identify the customer organization as an established business in a country. E.g: SIRET number in France, NIF in Spain. Required for new organizations.<br/>Null before shipping (or acceptance, depending on platform setting).
     *
     * @return self
     */
    public function setIdentificationNumber($identificationNumber)
    {
        if (is_null($identificationNumber)) {
            throw new \InvalidArgumentException('non-nullable identificationNumber cannot be null');
        }
        if ((mb_strlen($identificationNumber) > 255)) {
            throw new \InvalidArgumentException('invalid length for $identificationNumber when calling OR11Response200OrdersCustomerOrganization., must be smaller than or equal to 255.');
        }

        $this->container['identificationNumber'] = $identificationNumber;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the organization. Required for new organizations.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling OR11Response200OrdersCustomerOrganization., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param string|null $organizationId Customer's organization id (from the operator's system).<br/>Null before shipping (or acceptance, depending on platform setting).
     *
     * @return self
     */
    public function setOrganizationId($organizationId)
    {
        if (is_null($organizationId)) {
            throw new \InvalidArgumentException('non-nullable organizationId cannot be null');
        }
        if ((mb_strlen($organizationId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $organizationId when calling OR11Response200OrdersCustomerOrganization., must be smaller than or equal to 50.');
        }

        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets taxIdentificationNumber
     *
     * @return string|null
     */
    public function getTaxIdentificationNumber()
    {
        return $this->container['taxIdentificationNumber'];
    }

    /**
     * Sets taxIdentificationNumber
     *
     * @param string|null $taxIdentificationNumber Tax identification number of the organization.<br/>Null before shipping (or acceptance, depending on platform setting).
     *
     * @return self
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber)
    {
        if (is_null($taxIdentificationNumber)) {
            throw new \InvalidArgumentException('non-nullable taxIdentificationNumber cannot be null');
        }
        if ((mb_strlen($taxIdentificationNumber) > 255)) {
            throw new \InvalidArgumentException('invalid length for $taxIdentificationNumber when calling OR11Response200OrdersCustomerOrganization., must be smaller than or equal to 255.');
        }

        $this->container['taxIdentificationNumber'] = $taxIdentificationNumber;

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


