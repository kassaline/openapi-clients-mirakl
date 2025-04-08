<?php
/**
 * IV01Response200InvoicesAutoInvoicePaymentInfoJapanese
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
 * IV01Response200InvoicesAutoInvoicePaymentInfoJapanese Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IV01Response200InvoicesAutoInvoicePaymentInfoJapanese extends IV01Response200InvoicesAutoInvoicePaymentInfo
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IV01_Response_200_Invoices_AutoInvoice_PaymentInfo_Japanese';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bankAccountNumber' => 'string',
        'bankAccountType' => 'string',
        'bankCode' => 'string',
        'branchCode' => 'string',
        'branchName' => 'string',
        'swiftCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bankAccountNumber' => null,
        'bankAccountType' => null,
        'bankCode' => null,
        'branchCode' => null,
        'branchName' => null,
        'swiftCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bankAccountNumber' => false,
        'bankAccountType' => false,
        'bankCode' => false,
        'branchCode' => false,
        'branchName' => false,
        'swiftCode' => false
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
        'bankAccountNumber' => 'bank_account_number',
        'bankAccountType' => 'bank_account_type',
        'bankCode' => 'bank_code',
        'branchCode' => 'branch_code',
        'branchName' => 'branch_name',
        'swiftCode' => 'swift_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankAccountNumber' => 'setBankAccountNumber',
        'bankAccountType' => 'setBankAccountType',
        'bankCode' => 'setBankCode',
        'branchCode' => 'setBranchCode',
        'branchName' => 'setBranchName',
        'swiftCode' => 'setSwiftCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankAccountNumber' => 'getBankAccountNumber',
        'bankAccountType' => 'getBankAccountType',
        'bankCode' => 'getBankCode',
        'branchCode' => 'getBranchCode',
        'branchName' => 'getBranchName',
        'swiftCode' => 'getSwiftCode'
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

        $this->setIfExists('bankAccountNumber', $data ?? [], null);
        $this->setIfExists('bankAccountType', $data ?? [], null);
        $this->setIfExists('bankCode', $data ?? [], null);
        $this->setIfExists('branchCode', $data ?? [], null);
        $this->setIfExists('branchName', $data ?? [], null);
        $this->setIfExists('swiftCode', $data ?? [], null);
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
     * Gets bankAccountNumber
     *
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->container['bankAccountNumber'];
    }

    /**
     * Sets bankAccountNumber
     *
     * @param string|null $bankAccountNumber Bank account number
     *
     * @return self
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        if (is_null($bankAccountNumber)) {
            throw new \InvalidArgumentException('non-nullable bankAccountNumber cannot be null');
        }
        $this->container['bankAccountNumber'] = $bankAccountNumber;

        return $this;
    }

    /**
     * Gets bankAccountType
     *
     * @return string|null
     */
    public function getBankAccountType()
    {
        return $this->container['bankAccountType'];
    }

    /**
     * Sets bankAccountType
     *
     * @param string|null $bankAccountType Account type <br> <ul>     <li><code>C</code> : Checking account</li>     <li><code>P</code> : Savings account</li> </ul>
     *
     * @return self
     */
    public function setBankAccountType($bankAccountType)
    {
        if (is_null($bankAccountType)) {
            throw new \InvalidArgumentException('non-nullable bankAccountType cannot be null');
        }
        $this->container['bankAccountType'] = $bankAccountType;

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
        $this->container['bankCode'] = $bankCode;

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
        $this->container['branchCode'] = $branchCode;

        return $this;
    }

    /**
     * Gets branchName
     *
     * @return string|null
     */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
     * Sets branchName
     *
     * @param string|null $branchName Branch name
     *
     * @return self
     */
    public function setBranchName($branchName)
    {
        if (is_null($branchName)) {
            throw new \InvalidArgumentException('non-nullable branchName cannot be null');
        }
        $this->container['branchName'] = $branchName;

        return $this;
    }

    /**
     * Gets swiftCode
     *
     * @return string|null
     */
    public function getSwiftCode()
    {
        return $this->container['swiftCode'];
    }

    /**
     * Sets swiftCode
     *
     * @param string|null $swiftCode Bank account swift code
     *
     * @return self
     */
    public function setSwiftCode($swiftCode)
    {
        if (is_null($swiftCode)) {
            throw new \InvalidArgumentException('non-nullable swiftCode cannot be null');
        }
        $this->container['swiftCode'] = $swiftCode;

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


