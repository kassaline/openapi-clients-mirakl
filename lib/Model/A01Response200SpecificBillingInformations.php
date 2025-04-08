<?php
/**
 * A01Response200SpecificBillingInformations
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
 * A01Response200SpecificBillingInformations Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class A01Response200SpecificBillingInformations implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'A01_Response_200_SpecificBillingInformations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'corporateInformation' => '\OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsCorporateInformation',
        'fiscalInformation' => '\OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsFiscalInformation',
        'fiscalRepresentative' => '\OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsFiscalRepresentative',
        'id' => 'string',
        'personalInformation' => '\OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsPersonalInformation',
        'registrationAddress' => '\OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsRegistrationAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'corporateInformation' => null,
        'fiscalInformation' => null,
        'fiscalRepresentative' => null,
        'id' => null,
        'personalInformation' => null,
        'registrationAddress' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'corporateInformation' => false,
        'fiscalInformation' => false,
        'fiscalRepresentative' => false,
        'id' => false,
        'personalInformation' => false,
        'registrationAddress' => false
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
        'corporateInformation' => 'corporate_information',
        'fiscalInformation' => 'fiscal_information',
        'fiscalRepresentative' => 'fiscal_representative',
        'id' => 'id',
        'personalInformation' => 'personal_information',
        'registrationAddress' => 'registration_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'corporateInformation' => 'setCorporateInformation',
        'fiscalInformation' => 'setFiscalInformation',
        'fiscalRepresentative' => 'setFiscalRepresentative',
        'id' => 'setId',
        'personalInformation' => 'setPersonalInformation',
        'registrationAddress' => 'setRegistrationAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'corporateInformation' => 'getCorporateInformation',
        'fiscalInformation' => 'getFiscalInformation',
        'fiscalRepresentative' => 'getFiscalRepresentative',
        'id' => 'getId',
        'personalInformation' => 'getPersonalInformation',
        'registrationAddress' => 'getRegistrationAddress'
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
        $this->setIfExists('corporateInformation', $data ?? [], null);
        $this->setIfExists('fiscalInformation', $data ?? [], null);
        $this->setIfExists('fiscalRepresentative', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('personalInformation', $data ?? [], null);
        $this->setIfExists('registrationAddress', $data ?? [], null);
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
     * Gets corporateInformation
     *
     * @return \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsCorporateInformation|null
     */
    public function getCorporateInformation()
    {
        return $this->container['corporateInformation'];
    }

    /**
     * Sets corporateInformation
     *
     * @param \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsCorporateInformation|null $corporateInformation corporateInformation
     *
     * @return self
     */
    public function setCorporateInformation($corporateInformation)
    {
        if (is_null($corporateInformation)) {
            throw new \InvalidArgumentException('non-nullable corporateInformation cannot be null');
        }
        $this->container['corporateInformation'] = $corporateInformation;

        return $this;
    }

    /**
     * Gets fiscalInformation
     *
     * @return \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsFiscalInformation|null
     */
    public function getFiscalInformation()
    {
        return $this->container['fiscalInformation'];
    }

    /**
     * Sets fiscalInformation
     *
     * @param \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsFiscalInformation|null $fiscalInformation fiscalInformation
     *
     * @return self
     */
    public function setFiscalInformation($fiscalInformation)
    {
        if (is_null($fiscalInformation)) {
            throw new \InvalidArgumentException('non-nullable fiscalInformation cannot be null');
        }
        $this->container['fiscalInformation'] = $fiscalInformation;

        return $this;
    }

    /**
     * Gets fiscalRepresentative
     *
     * @return \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsFiscalRepresentative|null
     */
    public function getFiscalRepresentative()
    {
        return $this->container['fiscalRepresentative'];
    }

    /**
     * Sets fiscalRepresentative
     *
     * @param \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsFiscalRepresentative|null $fiscalRepresentative fiscalRepresentative
     *
     * @return self
     */
    public function setFiscalRepresentative($fiscalRepresentative)
    {
        if (is_null($fiscalRepresentative)) {
            throw new \InvalidArgumentException('non-nullable fiscalRepresentative cannot be null');
        }
        $this->container['fiscalRepresentative'] = $fiscalRepresentative;

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
     * @param string|null $id The unique identifier of the specific billing information.
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
     * Gets personalInformation
     *
     * @return \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsPersonalInformation|null
     */
    public function getPersonalInformation()
    {
        return $this->container['personalInformation'];
    }

    /**
     * Sets personalInformation
     *
     * @param \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsPersonalInformation|null $personalInformation personalInformation
     *
     * @return self
     */
    public function setPersonalInformation($personalInformation)
    {
        if (is_null($personalInformation)) {
            throw new \InvalidArgumentException('non-nullable personalInformation cannot be null');
        }
        $this->container['personalInformation'] = $personalInformation;

        return $this;
    }

    /**
     * Gets registrationAddress
     *
     * @return \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsRegistrationAddress|null
     */
    public function getRegistrationAddress()
    {
        return $this->container['registrationAddress'];
    }

    /**
     * Sets registrationAddress
     *
     * @param \OpenAPI\Client\Mirakl\Model\A01Response200SpecificBillingInformationsRegistrationAddress|null $registrationAddress registrationAddress
     *
     * @return self
     */
    public function setRegistrationAddress($registrationAddress)
    {
        if (is_null($registrationAddress)) {
            throw new \InvalidArgumentException('non-nullable registrationAddress cannot be null');
        }
        $this->container['registrationAddress'] = $registrationAddress;

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


