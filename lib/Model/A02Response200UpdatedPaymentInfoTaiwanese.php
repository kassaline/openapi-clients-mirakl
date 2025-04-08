<?php
/**
 * A02Response200UpdatedPaymentInfoTaiwanese
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
use \OpenAPI\Client\Mirakl\ObjectSerializer;

/**
 * A02Response200UpdatedPaymentInfoTaiwanese Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class A02Response200UpdatedPaymentInfoTaiwanese extends A02Response200UpdatedPaymentInfo
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'A02_Response_200_Updated_PaymentInfo_Taiwanese';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountNumber' => 'string',
        'bankCity' => 'string',
        'bankCode' => 'string',
        'bankName' => 'string',
        'bankStreet' => 'string',
        'bankZip' => 'string',
        'branchCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountNumber' => null,
        'bankCity' => null,
        'bankCode' => null,
        'bankName' => null,
        'bankStreet' => null,
        'bankZip' => null,
        'branchCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accountNumber' => false,
        'bankCity' => false,
        'bankCode' => false,
        'bankName' => false,
        'bankStreet' => false,
        'bankZip' => false,
        'branchCode' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'accountNumber' => 'account_number',
        'bankCity' => 'bank_city',
        'bankCode' => 'bank_code',
        'bankName' => 'bank_name',
        'bankStreet' => 'bank_street',
        'bankZip' => 'bank_zip',
        'branchCode' => 'branch_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountNumber' => 'setAccountNumber',
        'bankCity' => 'setBankCity',
        'bankCode' => 'setBankCode',
        'bankName' => 'setBankName',
        'bankStreet' => 'setBankStreet',
        'bankZip' => 'setBankZip',
        'branchCode' => 'setBranchCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountNumber' => 'getAccountNumber',
        'bankCity' => 'getBankCity',
        'bankCode' => 'getBankCode',
        'bankName' => 'getBankName',
        'bankStreet' => 'getBankStreet',
        'bankZip' => 'getBankZip',
        'branchCode' => 'getBranchCode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('accountNumber', $data ?? [], null);
        $this->setIfExists('bankCity', $data ?? [], null);
        $this->setIfExists('bankCode', $data ?? [], null);
        $this->setIfExists('bankName', $data ?? [], null);
        $this->setIfExists('bankStreet', $data ?? [], null);
        $this->setIfExists('bankZip', $data ?? [], null);
        $this->setIfExists('branchCode', $data ?? [], null);
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
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['accountNumber']) && (mb_strlen($this->container['accountNumber']) > 14)) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['accountNumber']) && (mb_strlen($this->container['accountNumber']) < 8)) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be bigger than or equal to 8.";
        }

        if (!is_null($this->container['accountNumber']) && !preg_match("/[0-9]+/", $this->container['accountNumber'])) {
            $invalidProperties[] = "invalid value for 'accountNumber', must be conform to the pattern /[0-9]+/.";
        }

        if (!is_null($this->container['bankCity']) && (mb_strlen($this->container['bankCity']) > 100)) {
            $invalidProperties[] = "invalid value for 'bankCity', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['bankCity']) && (mb_strlen($this->container['bankCity']) < 3)) {
            $invalidProperties[] = "invalid value for 'bankCity', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['bankCode']) && (mb_strlen($this->container['bankCode']) > 3)) {
            $invalidProperties[] = "invalid value for 'bankCode', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['bankCode']) && (mb_strlen($this->container['bankCode']) < 2)) {
            $invalidProperties[] = "invalid value for 'bankCode', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['bankCode']) && !preg_match("/[0-9a-zA-Z]+/", $this->container['bankCode'])) {
            $invalidProperties[] = "invalid value for 'bankCode', must be conform to the pattern /[0-9a-zA-Z]+/.";
        }

        if (!is_null($this->container['bankName']) && (mb_strlen($this->container['bankName']) > 255)) {
            $invalidProperties[] = "invalid value for 'bankName', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['bankName']) && (mb_strlen($this->container['bankName']) < 0)) {
            $invalidProperties[] = "invalid value for 'bankName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['bankStreet']) && (mb_strlen($this->container['bankStreet']) > 100)) {
            $invalidProperties[] = "invalid value for 'bankStreet', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['bankStreet']) && (mb_strlen($this->container['bankStreet']) < 3)) {
            $invalidProperties[] = "invalid value for 'bankStreet', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['bankZip']) && (mb_strlen($this->container['bankZip']) > 255)) {
            $invalidProperties[] = "invalid value for 'bankZip', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['bankZip']) && (mb_strlen($this->container['bankZip']) < 0)) {
            $invalidProperties[] = "invalid value for 'bankZip', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['branchCode']) && (mb_strlen($this->container['branchCode']) > 4)) {
            $invalidProperties[] = "invalid value for 'branchCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['branchCode']) && (mb_strlen($this->container['branchCode']) < 3)) {
            $invalidProperties[] = "invalid value for 'branchCode', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['branchCode']) && !preg_match("/[0-9a-zA-Z]+/", $this->container['branchCode'])) {
            $invalidProperties[] = "invalid value for 'branchCode', must be conform to the pattern /[0-9a-zA-Z]+/.";
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
     * Gets accountNumber
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber
     *
     * @param string|null $accountNumber Account number
     *
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        if (is_null($accountNumber)) {
            throw new \InvalidArgumentException('non-nullable accountNumber cannot be null');
        }
        if ((mb_strlen($accountNumber) > 14)) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling A02Response200UpdatedPaymentInfoTaiwanese., must be smaller than or equal to 14.');
        }
        if ((mb_strlen($accountNumber) < 8)) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling A02Response200UpdatedPaymentInfoTaiwanese., must be bigger than or equal to 8.');
        }
        if ((!preg_match("/[0-9]+/", ObjectSerializer::toString($accountNumber)))) {
            throw new \InvalidArgumentException("invalid value for \$accountNumber when calling A02Response200UpdatedPaymentInfoTaiwanese., must conform to the pattern /[0-9]+/.");
        }

        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets bankCity
     *
     * @return string|null
     */
    public function getBankCity()
    {
        return $this->container['bankCity'];
    }

    /**
     * Sets bankCity
     *
     * @param string|null $bankCity Bank city
     *
     * @return self
     */
    public function setBankCity($bankCity)
    {
        if (is_null($bankCity)) {
            throw new \InvalidArgumentException('non-nullable bankCity cannot be null');
        }
        if ((mb_strlen($bankCity) > 100)) {
            throw new \InvalidArgumentException('invalid length for $bankCity when calling A02Response200UpdatedPaymentInfoTaiwanese., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($bankCity) < 3)) {
            throw new \InvalidArgumentException('invalid length for $bankCity when calling A02Response200UpdatedPaymentInfoTaiwanese., must be bigger than or equal to 3.');
        }

        $this->container['bankCity'] = $bankCity;

        return $this;
    }

    /**
     * Gets bankCode
     *
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->container['bankCode'];
    }

    /**
     * Sets bankCode
     *
     * @param string|null $bankCode Bank code
     *
     * @return self
     */
    public function setBankCode($bankCode)
    {
        if (is_null($bankCode)) {
            throw new \InvalidArgumentException('non-nullable bankCode cannot be null');
        }
        if ((mb_strlen($bankCode) > 3)) {
            throw new \InvalidArgumentException('invalid length for $bankCode when calling A02Response200UpdatedPaymentInfoTaiwanese., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($bankCode) < 2)) {
            throw new \InvalidArgumentException('invalid length for $bankCode when calling A02Response200UpdatedPaymentInfoTaiwanese., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/[0-9a-zA-Z]+/", ObjectSerializer::toString($bankCode)))) {
            throw new \InvalidArgumentException("invalid value for \$bankCode when calling A02Response200UpdatedPaymentInfoTaiwanese., must conform to the pattern /[0-9a-zA-Z]+/.");
        }

        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets bankName
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
     * Sets bankName
     *
     * @param string|null $bankName Bank name
     *
     * @return self
     */
    public function setBankName($bankName)
    {
        if (is_null($bankName)) {
            throw new \InvalidArgumentException('non-nullable bankName cannot be null');
        }
        if ((mb_strlen($bankName) > 255)) {
            throw new \InvalidArgumentException('invalid length for $bankName when calling A02Response200UpdatedPaymentInfoTaiwanese., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($bankName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $bankName when calling A02Response200UpdatedPaymentInfoTaiwanese., must be bigger than or equal to 0.');
        }

        $this->container['bankName'] = $bankName;

        return $this;
    }

    /**
     * Gets bankStreet
     *
     * @return string|null
     */
    public function getBankStreet()
    {
        return $this->container['bankStreet'];
    }

    /**
     * Sets bankStreet
     *
     * @param string|null $bankStreet Bank street name
     *
     * @return self
     */
    public function setBankStreet($bankStreet)
    {
        if (is_null($bankStreet)) {
            throw new \InvalidArgumentException('non-nullable bankStreet cannot be null');
        }
        if ((mb_strlen($bankStreet) > 100)) {
            throw new \InvalidArgumentException('invalid length for $bankStreet when calling A02Response200UpdatedPaymentInfoTaiwanese., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($bankStreet) < 3)) {
            throw new \InvalidArgumentException('invalid length for $bankStreet when calling A02Response200UpdatedPaymentInfoTaiwanese., must be bigger than or equal to 3.');
        }

        $this->container['bankStreet'] = $bankStreet;

        return $this;
    }

    /**
     * Gets bankZip
     *
     * @return string|null
     */
    public function getBankZip()
    {
        return $this->container['bankZip'];
    }

    /**
     * Sets bankZip
     *
     * @param string|null $bankZip Bank zip code
     *
     * @return self
     */
    public function setBankZip($bankZip)
    {
        if (is_null($bankZip)) {
            throw new \InvalidArgumentException('non-nullable bankZip cannot be null');
        }
        if ((mb_strlen($bankZip) > 255)) {
            throw new \InvalidArgumentException('invalid length for $bankZip when calling A02Response200UpdatedPaymentInfoTaiwanese., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($bankZip) < 0)) {
            throw new \InvalidArgumentException('invalid length for $bankZip when calling A02Response200UpdatedPaymentInfoTaiwanese., must be bigger than or equal to 0.');
        }

        $this->container['bankZip'] = $bankZip;

        return $this;
    }

    /**
     * Gets branchCode
     *
     * @return string|null
     */
    public function getBranchCode()
    {
        return $this->container['branchCode'];
    }

    /**
     * Sets branchCode
     *
     * @param string|null $branchCode Branch code
     *
     * @return self
     */
    public function setBranchCode($branchCode)
    {
        if (is_null($branchCode)) {
            throw new \InvalidArgumentException('non-nullable branchCode cannot be null');
        }
        if ((mb_strlen($branchCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $branchCode when calling A02Response200UpdatedPaymentInfoTaiwanese., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($branchCode) < 3)) {
            throw new \InvalidArgumentException('invalid length for $branchCode when calling A02Response200UpdatedPaymentInfoTaiwanese., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/[0-9a-zA-Z]+/", ObjectSerializer::toString($branchCode)))) {
            throw new \InvalidArgumentException("invalid value for \$branchCode when calling A02Response200UpdatedPaymentInfoTaiwanese., must conform to the pattern /[0-9a-zA-Z]+/.");
        }

        $this->container['branchCode'] = $branchCode;

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


