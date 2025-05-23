<?php
/**
 * PM11Response200Attributes
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
 * PM11Response200Attributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PM11Response200Attributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PM11_Response_200_Attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channels' => '\OpenAPI\Client\Mirakl\Model\PM11Response200AttributesChannels[]',
        'code' => 'string',
        'defaultValue' => 'string',
        'description' => 'string',
        'descriptionTranslations' => '\OpenAPI\Client\Mirakl\Model\PM11Response200AttributesDescriptionTranslations[]',
        'example' => 'string',
        'hierarchyCode' => 'string',
        'label' => 'string',
        'labelTranslations' => '\OpenAPI\Client\Mirakl\Model\PM11Response200AttributesLabelTranslations[]',
        'locale' => 'string',
        'required' => 'bool',
        'requirementLevel' => 'string',
        'roles' => '\OpenAPI\Client\Mirakl\Model\PM11Response200AttributesRoles[]',
        'transformations' => 'string',
        'type' => 'string',
        'typeParameter' => 'string',
        'typeParameters' => '\OpenAPI\Client\Mirakl\Model\PM11Response200AttributesTypeParameters[]',
        'uniqueCode' => 'string',
        'validations' => 'string',
        'values' => '\OpenAPI\Client\Mirakl\Model\PM11Response200AttributesValues[]',
        'valuesList' => 'string',
        'variant' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channels' => null,
        'code' => null,
        'defaultValue' => null,
        'description' => null,
        'descriptionTranslations' => null,
        'example' => null,
        'hierarchyCode' => null,
        'label' => null,
        'labelTranslations' => null,
        'locale' => null,
        'required' => null,
        'requirementLevel' => null,
        'roles' => null,
        'transformations' => null,
        'type' => null,
        'typeParameter' => null,
        'typeParameters' => null,
        'uniqueCode' => null,
        'validations' => null,
        'values' => null,
        'valuesList' => null,
        'variant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'channels' => false,
        'code' => false,
        'defaultValue' => false,
        'description' => false,
        'descriptionTranslations' => false,
        'example' => false,
        'hierarchyCode' => false,
        'label' => false,
        'labelTranslations' => false,
        'locale' => false,
        'required' => false,
        'requirementLevel' => false,
        'roles' => false,
        'transformations' => false,
        'type' => false,
        'typeParameter' => false,
        'typeParameters' => false,
        'uniqueCode' => false,
        'validations' => false,
        'values' => false,
        'valuesList' => false,
        'variant' => false
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
        'channels' => 'channels',
        'code' => 'code',
        'defaultValue' => 'default_value',
        'description' => 'description',
        'descriptionTranslations' => 'description_translations',
        'example' => 'example',
        'hierarchyCode' => 'hierarchy_code',
        'label' => 'label',
        'labelTranslations' => 'label_translations',
        'locale' => 'locale',
        'required' => 'required',
        'requirementLevel' => 'requirement_level',
        'roles' => 'roles',
        'transformations' => 'transformations',
        'type' => 'type',
        'typeParameter' => 'type_parameter',
        'typeParameters' => 'type_parameters',
        'uniqueCode' => 'unique_code',
        'validations' => 'validations',
        'values' => 'values',
        'valuesList' => 'values_list',
        'variant' => 'variant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channels' => 'setChannels',
        'code' => 'setCode',
        'defaultValue' => 'setDefaultValue',
        'description' => 'setDescription',
        'descriptionTranslations' => 'setDescriptionTranslations',
        'example' => 'setExample',
        'hierarchyCode' => 'setHierarchyCode',
        'label' => 'setLabel',
        'labelTranslations' => 'setLabelTranslations',
        'locale' => 'setLocale',
        'required' => 'setRequired',
        'requirementLevel' => 'setRequirementLevel',
        'roles' => 'setRoles',
        'transformations' => 'setTransformations',
        'type' => 'setType',
        'typeParameter' => 'setTypeParameter',
        'typeParameters' => 'setTypeParameters',
        'uniqueCode' => 'setUniqueCode',
        'validations' => 'setValidations',
        'values' => 'setValues',
        'valuesList' => 'setValuesList',
        'variant' => 'setVariant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channels' => 'getChannels',
        'code' => 'getCode',
        'defaultValue' => 'getDefaultValue',
        'description' => 'getDescription',
        'descriptionTranslations' => 'getDescriptionTranslations',
        'example' => 'getExample',
        'hierarchyCode' => 'getHierarchyCode',
        'label' => 'getLabel',
        'labelTranslations' => 'getLabelTranslations',
        'locale' => 'getLocale',
        'required' => 'getRequired',
        'requirementLevel' => 'getRequirementLevel',
        'roles' => 'getRoles',
        'transformations' => 'getTransformations',
        'type' => 'getType',
        'typeParameter' => 'getTypeParameter',
        'typeParameters' => 'getTypeParameters',
        'uniqueCode' => 'getUniqueCode',
        'validations' => 'getValidations',
        'values' => 'getValues',
        'valuesList' => 'getValuesList',
        'variant' => 'getVariant'
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
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('defaultValue', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('descriptionTranslations', $data ?? [], null);
        $this->setIfExists('example', $data ?? [], null);
        $this->setIfExists('hierarchyCode', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('labelTranslations', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('requirementLevel', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('transformations', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('typeParameter', $data ?? [], null);
        $this->setIfExists('typeParameters', $data ?? [], null);
        $this->setIfExists('uniqueCode', $data ?? [], null);
        $this->setIfExists('validations', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
        $this->setIfExists('valuesList', $data ?? [], null);
        $this->setIfExists('variant', $data ?? [], null);
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
     * Gets channels
     *
     * @return \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesChannels[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesChannels[]|null $channels Channels
     *
     * @return self
     */
    public function setChannels($channels)
    {
        if (is_null($channels)) {
            throw new \InvalidArgumentException('non-nullable channels cannot be null');
        }
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Attribute code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets defaultValue
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     *
     * @param string|null $defaultValue Default value for value list type attributes
     *
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        if (is_null($defaultValue)) {
            throw new \InvalidArgumentException('non-nullable defaultValue cannot be null');
        }
        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Attribute description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets descriptionTranslations
     *
     * @return \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesDescriptionTranslations[]|null
     */
    public function getDescriptionTranslations()
    {
        return $this->container['descriptionTranslations'];
    }

    /**
     * Sets descriptionTranslations
     *
     * @param \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesDescriptionTranslations[]|null $descriptionTranslations Translations of the attribute description
     *
     * @return self
     */
    public function setDescriptionTranslations($descriptionTranslations)
    {
        if (is_null($descriptionTranslations)) {
            throw new \InvalidArgumentException('non-nullable descriptionTranslations cannot be null');
        }
        $this->container['descriptionTranslations'] = $descriptionTranslations;

        return $this;
    }

    /**
     * Gets example
     *
     * @return string|null
     */
    public function getExample()
    {
        return $this->container['example'];
    }

    /**
     * Sets example
     *
     * @param string|null $example Attribute example to help sellers when they fill the product creation form
     *
     * @return self
     */
    public function setExample($example)
    {
        if (is_null($example)) {
            throw new \InvalidArgumentException('non-nullable example cannot be null');
        }
        $this->container['example'] = $example;

        return $this;
    }

    /**
     * Gets hierarchyCode
     *
     * @return string|null
     */
    public function getHierarchyCode()
    {
        return $this->container['hierarchyCode'];
    }

    /**
     * Sets hierarchyCode
     *
     * @param string|null $hierarchyCode The code of the hierarchy (category) this attribute belongs to. If this field is empty, the attribute is shared among all hierarchies.
     *
     * @return self
     */
    public function setHierarchyCode($hierarchyCode)
    {
        if (is_null($hierarchyCode)) {
            throw new \InvalidArgumentException('non-nullable hierarchyCode cannot be null');
        }
        $this->container['hierarchyCode'] = $hierarchyCode;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Attribute label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets labelTranslations
     *
     * @return \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesLabelTranslations[]|null
     */
    public function getLabelTranslations()
    {
        return $this->container['labelTranslations'];
    }

    /**
     * Sets labelTranslations
     *
     * @param \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesLabelTranslations[]|null $labelTranslations Translations of the attribute label
     *
     * @return self
     */
    public function setLabelTranslations($labelTranslations)
    {
        if (is_null($labelTranslations)) {
            throw new \InvalidArgumentException('non-nullable labelTranslations cannot be null');
        }
        $this->container['labelTranslations'] = $labelTranslations;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale Attribute localization.<br/> The language format can either be:<br/> <ul>    <li>ISO-639 (E.g. \"en\")</li>    <li>ISO-639_ISO-3166 (E.g. \"en_US\")</li> </ul>
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     * @deprecated
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required Whether or not the attribute is required
     *
     * @return self
     * @deprecated
     */
    public function setRequired($required)
    {
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets requirementLevel
     *
     * @return string|null
     */
    public function getRequirementLevel()
    {
        return $this->container['requirementLevel'];
    }

    /**
     * Sets requirementLevel
     *
     * @param string|null $requirementLevel Requirement level of the attribute
     *
     * @return self
     */
    public function setRequirementLevel($requirementLevel)
    {
        if (is_null($requirementLevel)) {
            throw new \InvalidArgumentException('non-nullable requirementLevel cannot be null');
        }
        $this->container['requirementLevel'] = $requirementLevel;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesRoles[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesRoles[]|null $roles Attribute roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets transformations
     *
     * @return string|null
     */
    public function getTransformations()
    {
        return $this->container['transformations'];
    }

    /**
     * Sets transformations
     *
     * @param string|null $transformations Transformations applied to the attribute (a list of transformations separated by commas)
     *
     * @return self
     */
    public function setTransformations($transformations)
    {
        if (is_null($transformations)) {
            throw new \InvalidArgumentException('non-nullable transformations cannot be null');
        }
        $this->container['transformations'] = $transformations;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Attribute type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets typeParameter
     *
     * @return string|null
     * @deprecated
     */
    public function getTypeParameter()
    {
        return $this->container['typeParameter'];
    }

    /**
     * Sets typeParameter
     *
     * @param string|null $typeParameter Type parameter
     *
     * @return self
     * @deprecated
     */
    public function setTypeParameter($typeParameter)
    {
        if (is_null($typeParameter)) {
            throw new \InvalidArgumentException('non-nullable typeParameter cannot be null');
        }
        $this->container['typeParameter'] = $typeParameter;

        return $this;
    }

    /**
     * Gets typeParameters
     *
     * @return \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesTypeParameters[]|null
     */
    public function getTypeParameters()
    {
        return $this->container['typeParameters'];
    }

    /**
     * Sets typeParameters
     *
     * @param \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesTypeParameters[]|null $typeParameters Specificities of the attribute type, for example the date format, or the maximum size of a media
     *
     * @return self
     */
    public function setTypeParameters($typeParameters)
    {
        if (is_null($typeParameters)) {
            throw new \InvalidArgumentException('non-nullable typeParameters cannot be null');
        }
        $this->container['typeParameters'] = $typeParameters;

        return $this;
    }

    /**
     * Gets uniqueCode
     *
     * @return string|null
     */
    public function getUniqueCode()
    {
        return $this->container['uniqueCode'];
    }

    /**
     * Sets uniqueCode
     *
     * @param string|null $uniqueCode Unique code of the attribute
     *
     * @return self
     */
    public function setUniqueCode($uniqueCode)
    {
        if (is_null($uniqueCode)) {
            throw new \InvalidArgumentException('non-nullable uniqueCode cannot be null');
        }
        $this->container['uniqueCode'] = $uniqueCode;

        return $this;
    }

    /**
     * Gets validations
     *
     * @return string|null
     */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations
     *
     * @param string|null $validations Validations applied to the attribute (a list of validations separated by commas)
     *
     * @return self
     */
    public function setValidations($validations)
    {
        if (is_null($validations)) {
            throw new \InvalidArgumentException('non-nullable validations cannot be null');
        }
        $this->container['validations'] = $validations;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesValues[]|null
     * @deprecated
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \OpenAPI\Client\Mirakl\Model\PM11Response200AttributesValues[]|null $values A list of authorized values for this attribute
     *
     * @return self
     * @deprecated
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets valuesList
     *
     * @return string|null
     * @deprecated
     */
    public function getValuesList()
    {
        return $this->container['valuesList'];
    }

    /**
     * Sets valuesList
     *
     * @param string|null $valuesList This code points to the list defining the authorized values for this attribute.
     *
     * @return self
     * @deprecated
     */
    public function setValuesList($valuesList)
    {
        if (is_null($valuesList)) {
            throw new \InvalidArgumentException('non-nullable valuesList cannot be null');
        }
        $this->container['valuesList'] = $valuesList;

        return $this;
    }

    /**
     * Gets variant
     *
     * @return bool|null
     */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant
     *
     * @param bool|null $variant Whether or not the attribute is a variation axis. Possible values: <code>true</code> or <code>false</code>
     *
     * @return self
     */
    public function setVariant($variant)
    {
        if (is_null($variant)) {
            throw new \InvalidArgumentException('non-nullable variant cannot be null');
        }
        $this->container['variant'] = $variant;

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


