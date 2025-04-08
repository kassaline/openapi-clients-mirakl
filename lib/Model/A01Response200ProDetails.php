<?php
/**
 * A01Response200ProDetails
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
 * A01Response200ProDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class A01Response200ProDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'A01_Response_200_ProDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vATNumber' => 'string',
        'corporateName' => 'string',
        'identificationNumber' => 'string',
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
        'vATNumber' => null,
        'corporateName' => null,
        'identificationNumber' => null,
        'taxIdentificationNumber' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vATNumber' => false,
        'corporateName' => false,
        'identificationNumber' => false,
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
        'vATNumber' => 'VAT_number',
        'corporateName' => 'corporate_name',
        'identificationNumber' => 'identification_number',
        'taxIdentificationNumber' => 'tax_identification_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vATNumber' => 'setVATNumber',
        'corporateName' => 'setCorporateName',
        'identificationNumber' => 'setIdentificationNumber',
        'taxIdentificationNumber' => 'setTaxIdentificationNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vATNumber' => 'getVATNumber',
        'corporateName' => 'getCorporateName',
        'identificationNumber' => 'getIdentificationNumber',
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
        $this->setIfExists('vATNumber', $data ?? [], null);
        $this->setIfExists('corporateName', $data ?? [], null);
        $this->setIfExists('identificationNumber', $data ?? [], null);
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
     * Gets vATNumber
     *
     * @return string|null
     * @deprecated
     */
    public function getVATNumber()
    {
        return $this->container['vATNumber'];
    }

    /**
     * Sets vATNumber
     *
     * @param string|null $vATNumber VAT Number (for taxes)
     *
     * @return self
     * @deprecated
     */
    public function setVATNumber($vATNumber)
    {
        if (is_null($vATNumber)) {
            throw new \InvalidArgumentException('non-nullable vATNumber cannot be null');
        }
        $this->container['vATNumber'] = $vATNumber;

        return $this;
    }

    /**
     * Gets corporateName
     *
     * @return string|null
     * @deprecated
     */
    public function getCorporateName()
    {
        return $this->container['corporateName'];
    }

    /**
     * Sets corporateName
     *
     * @param string|null $corporateName Corporate name
     *
     * @return self
     * @deprecated
     */
    public function setCorporateName($corporateName)
    {
        if (is_null($corporateName)) {
            throw new \InvalidArgumentException('non-nullable corporateName cannot be null');
        }
        $this->container['corporateName'] = $corporateName;

        return $this;
    }

    /**
     * Gets identificationNumber
     *
     * @return string|null
     * @deprecated
     */
    public function getIdentificationNumber()
    {
        return $this->container['identificationNumber'];
    }

    /**
     * Sets identificationNumber
     *
     * @param string|null $identificationNumber Identification number of the shop. For France it would be the SIRET
     *
     * @return self
     * @deprecated
     */
    public function setIdentificationNumber($identificationNumber)
    {
        if (is_null($identificationNumber)) {
            throw new \InvalidArgumentException('non-nullable identificationNumber cannot be null');
        }
        $this->container['identificationNumber'] = $identificationNumber;

        return $this;
    }

    /**
     * Gets taxIdentificationNumber
     *
     * @return string|null
     * @deprecated
     */
    public function getTaxIdentificationNumber()
    {
        return $this->container['taxIdentificationNumber'];
    }

    /**
     * Sets taxIdentificationNumber
     *
     * @param string|null $taxIdentificationNumber Tax identification number
     *
     * @return self
     * @deprecated
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber)
    {
        if (is_null($taxIdentificationNumber)) {
            throw new \InvalidArgumentException('non-nullable taxIdentificationNumber cannot be null');
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


