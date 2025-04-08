<?php
/**
 * A02Response200UpdatedAddress
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
 * A02Response200UpdatedAddress Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class A02Response200UpdatedAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'A02_Response_200_Updated_Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'civility' => 'string',
        'country' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'phone' => 'string',
        'phoneSecondary' => 'string',
        'state' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'zipCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'city' => null,
        'civility' => null,
        'country' => null,
        'firstname' => null,
        'lastname' => null,
        'phone' => null,
        'phoneSecondary' => null,
        'state' => null,
        'street1' => null,
        'street2' => null,
        'zipCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'city' => false,
        'civility' => false,
        'country' => false,
        'firstname' => false,
        'lastname' => false,
        'phone' => false,
        'phoneSecondary' => false,
        'state' => false,
        'street1' => false,
        'street2' => false,
        'zipCode' => false
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
        'city' => 'city',
        'civility' => 'civility',
        'country' => 'country',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'phone' => 'phone',
        'phoneSecondary' => 'phone_secondary',
        'state' => 'state',
        'street1' => 'street1',
        'street2' => 'street2',
        'zipCode' => 'zip_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'civility' => 'setCivility',
        'country' => 'setCountry',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'phone' => 'setPhone',
        'phoneSecondary' => 'setPhoneSecondary',
        'state' => 'setState',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'zipCode' => 'setZipCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'civility' => 'getCivility',
        'country' => 'getCountry',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'phone' => 'getPhone',
        'phoneSecondary' => 'getPhoneSecondary',
        'state' => 'getState',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'zipCode' => 'getZipCode'
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
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('civility', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('phoneSecondary', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('street1', $data ?? [], null);
        $this->setIfExists('street2', $data ?? [], null);
        $this->setIfExists('zipCode', $data ?? [], null);
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City of the shop contact
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets civility
     *
     * @return string|null
     */
    public function getCivility()
    {
        return $this->container['civility'];
    }

    /**
     * Sets civility
     *
     * @param string|null $civility Civility of the shop contact
     *
     * @return self
     */
    public function setCivility($civility)
    {
        if (is_null($civility)) {
            throw new \InvalidArgumentException('non-nullable civility cannot be null');
        }
        $this->container['civility'] = $civility;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country ISO 3166-1 code of the shop contact
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname First name of the shop contact
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        if (is_null($firstname)) {
            throw new \InvalidArgumentException('non-nullable firstname cannot be null');
        }
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname Last name of the shop contact
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        if (is_null($lastname)) {
            throw new \InvalidArgumentException('non-nullable lastname cannot be null');
        }
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone of the shop contact
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets phoneSecondary
     *
     * @return string|null
     */
    public function getPhoneSecondary()
    {
        return $this->container['phoneSecondary'];
    }

    /**
     * Sets phoneSecondary
     *
     * @param string|null $phoneSecondary Secondary phone of the shop contact
     *
     * @return self
     */
    public function setPhoneSecondary($phoneSecondary)
    {
        if (is_null($phoneSecondary)) {
            throw new \InvalidArgumentException('non-nullable phoneSecondary cannot be null');
        }
        $this->container['phoneSecondary'] = $phoneSecondary;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State (address) of the shop contact
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street1
     *
     * @return string|null
     */
    public function getStreet1()
    {
        return $this->container['street1'];
    }

    /**
     * Sets street1
     *
     * @param string|null $street1 First line of the address of the shop contact
     *
     * @return self
     */
    public function setStreet1($street1)
    {
        if (is_null($street1)) {
            throw new \InvalidArgumentException('non-nullable street1 cannot be null');
        }
        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string|null $street2 Second line of the address of the shop contact
     *
     * @return self
     */
    public function setStreet2($street2)
    {
        if (is_null($street2)) {
            throw new \InvalidArgumentException('non-nullable street2 cannot be null');
        }
        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets zipCode
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param string|null $zipCode Zip code of the shop contact
     *
     * @return self
     */
    public function setZipCode($zipCode)
    {
        if (is_null($zipCode)) {
            throw new \InvalidArgumentException('non-nullable zipCode cannot be null');
        }
        $this->container['zipCode'] = $zipCode;

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


