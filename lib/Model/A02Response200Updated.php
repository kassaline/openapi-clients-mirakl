<?php
/**
 * A02Response200Updated
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
 * A02Response200Updated Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class A02Response200Updated implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'A02_Response_200_Updated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => '\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedAddress',
        'channels' => 'string[]',
        'closedFrom' => '\DateTime',
        'closedTo' => '\DateTime',
        'defaultBillingInformation' => '\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedDefaultBillingInformation',
        'description' => 'string',
        'email' => 'string',
        'fax' => 'string',
        'isProfessional' => 'bool',
        'model' => 'string',
        'paymentInfo' => '\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedPaymentInfo',
        'paymentMethodMandatory' => 'bool',
        'proDetails' => '\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedProDetails',
        'producerIdentifiers' => '\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedProducerIdentifiers[]',
        'recyclingPolicy' => 'string',
        'returnPolicy' => 'string',
        'shipping' => '\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedShipping',
        'shippingCountry' => 'string',
        'shopAdditionalFields' => '\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedShopAdditionalFields[]',
        'shopName' => 'string',
        'specificBillingInformations' => '\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedSpecificBillingInformations[]',
        'webSite' => 'string'
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
        'channels' => null,
        'closedFrom' => 'date-time',
        'closedTo' => 'date-time',
        'defaultBillingInformation' => null,
        'description' => null,
        'email' => null,
        'fax' => null,
        'isProfessional' => null,
        'model' => null,
        'paymentInfo' => null,
        'paymentMethodMandatory' => null,
        'proDetails' => null,
        'producerIdentifiers' => null,
        'recyclingPolicy' => null,
        'returnPolicy' => null,
        'shipping' => null,
        'shippingCountry' => null,
        'shopAdditionalFields' => null,
        'shopName' => null,
        'specificBillingInformations' => null,
        'webSite' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
        'channels' => false,
        'closedFrom' => false,
        'closedTo' => false,
        'defaultBillingInformation' => false,
        'description' => false,
        'email' => false,
        'fax' => false,
        'isProfessional' => false,
        'model' => false,
        'paymentInfo' => false,
        'paymentMethodMandatory' => false,
        'proDetails' => false,
        'producerIdentifiers' => false,
        'recyclingPolicy' => false,
        'returnPolicy' => false,
        'shipping' => false,
        'shippingCountry' => false,
        'shopAdditionalFields' => false,
        'shopName' => false,
        'specificBillingInformations' => false,
        'webSite' => false
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
        'channels' => 'channels',
        'closedFrom' => 'closed_from',
        'closedTo' => 'closed_to',
        'defaultBillingInformation' => 'default_billing_information',
        'description' => 'description',
        'email' => 'email',
        'fax' => 'fax',
        'isProfessional' => 'is_professional',
        'model' => 'model',
        'paymentInfo' => 'payment_info',
        'paymentMethodMandatory' => 'payment_method_mandatory',
        'proDetails' => 'pro_details',
        'producerIdentifiers' => 'producer_identifiers',
        'recyclingPolicy' => 'recycling_policy',
        'returnPolicy' => 'return_policy',
        'shipping' => 'shipping',
        'shippingCountry' => 'shipping_country',
        'shopAdditionalFields' => 'shop_additional_fields',
        'shopName' => 'shop_name',
        'specificBillingInformations' => 'specific_billing_informations',
        'webSite' => 'web_site'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'channels' => 'setChannels',
        'closedFrom' => 'setClosedFrom',
        'closedTo' => 'setClosedTo',
        'defaultBillingInformation' => 'setDefaultBillingInformation',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'fax' => 'setFax',
        'isProfessional' => 'setIsProfessional',
        'model' => 'setModel',
        'paymentInfo' => 'setPaymentInfo',
        'paymentMethodMandatory' => 'setPaymentMethodMandatory',
        'proDetails' => 'setProDetails',
        'producerIdentifiers' => 'setProducerIdentifiers',
        'recyclingPolicy' => 'setRecyclingPolicy',
        'returnPolicy' => 'setReturnPolicy',
        'shipping' => 'setShipping',
        'shippingCountry' => 'setShippingCountry',
        'shopAdditionalFields' => 'setShopAdditionalFields',
        'shopName' => 'setShopName',
        'specificBillingInformations' => 'setSpecificBillingInformations',
        'webSite' => 'setWebSite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'channels' => 'getChannels',
        'closedFrom' => 'getClosedFrom',
        'closedTo' => 'getClosedTo',
        'defaultBillingInformation' => 'getDefaultBillingInformation',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'fax' => 'getFax',
        'isProfessional' => 'getIsProfessional',
        'model' => 'getModel',
        'paymentInfo' => 'getPaymentInfo',
        'paymentMethodMandatory' => 'getPaymentMethodMandatory',
        'proDetails' => 'getProDetails',
        'producerIdentifiers' => 'getProducerIdentifiers',
        'recyclingPolicy' => 'getRecyclingPolicy',
        'returnPolicy' => 'getReturnPolicy',
        'shipping' => 'getShipping',
        'shippingCountry' => 'getShippingCountry',
        'shopAdditionalFields' => 'getShopAdditionalFields',
        'shopName' => 'getShopName',
        'specificBillingInformations' => 'getSpecificBillingInformations',
        'webSite' => 'getWebSite'
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
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('closedFrom', $data ?? [], null);
        $this->setIfExists('closedTo', $data ?? [], null);
        $this->setIfExists('defaultBillingInformation', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('isProfessional', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('paymentInfo', $data ?? [], null);
        $this->setIfExists('paymentMethodMandatory', $data ?? [], null);
        $this->setIfExists('proDetails', $data ?? [], null);
        $this->setIfExists('producerIdentifiers', $data ?? [], null);
        $this->setIfExists('recyclingPolicy', $data ?? [], null);
        $this->setIfExists('returnPolicy', $data ?? [], null);
        $this->setIfExists('shipping', $data ?? [], null);
        $this->setIfExists('shippingCountry', $data ?? [], null);
        $this->setIfExists('shopAdditionalFields', $data ?? [], null);
        $this->setIfExists('shopName', $data ?? [], null);
        $this->setIfExists('specificBillingInformations', $data ?? [], null);
        $this->setIfExists('webSite', $data ?? [], null);
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
     * Gets address
     *
     * @return \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedAddress|null $address address
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
     * Gets channels
     *
     * @return string[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param string[]|null $channels List of the channel codes associated to the shop
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
     * Gets closedFrom
     *
     * @return \DateTime|null
     */
    public function getClosedFrom()
    {
        return $this->container['closedFrom'];
    }

    /**
     * Sets closedFrom
     *
     * @param \DateTime|null $closedFrom The start date of the closing of the shop
     *
     * @return self
     */
    public function setClosedFrom($closedFrom)
    {
        if (is_null($closedFrom)) {
            throw new \InvalidArgumentException('non-nullable closedFrom cannot be null');
        }
        $this->container['closedFrom'] = $closedFrom;

        return $this;
    }

    /**
     * Gets closedTo
     *
     * @return \DateTime|null
     */
    public function getClosedTo()
    {
        return $this->container['closedTo'];
    }

    /**
     * Sets closedTo
     *
     * @param \DateTime|null $closedTo The end date of the closing of the shop
     *
     * @return self
     */
    public function setClosedTo($closedTo)
    {
        if (is_null($closedTo)) {
            throw new \InvalidArgumentException('non-nullable closedTo cannot be null');
        }
        $this->container['closedTo'] = $closedTo;

        return $this;
    }

    /**
     * Gets defaultBillingInformation
     *
     * @return \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedDefaultBillingInformation|null
     */
    public function getDefaultBillingInformation()
    {
        return $this->container['defaultBillingInformation'];
    }

    /**
     * Sets defaultBillingInformation
     *
     * @param \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedDefaultBillingInformation|null $defaultBillingInformation defaultBillingInformation
     *
     * @return self
     */
    public function setDefaultBillingInformation($defaultBillingInformation)
    {
        if (is_null($defaultBillingInformation)) {
            throw new \InvalidArgumentException('non-nullable defaultBillingInformation cannot be null');
        }
        $this->container['defaultBillingInformation'] = $defaultBillingInformation;

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
     * @param string|null $description Shop description
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Shop email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax Shop fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        if (is_null($fax)) {
            throw new \InvalidArgumentException('non-nullable fax cannot be null');
        }
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets isProfessional
     *
     * @return bool|null
     */
    public function getIsProfessional()
    {
        return $this->container['isProfessional'];
    }

    /**
     * Sets isProfessional
     *
     * @param bool|null $isProfessional Whether or not the shop is professional
     *
     * @return self
     */
    public function setIsProfessional($isProfessional)
    {
        if (is_null($isProfessional)) {
            throw new \InvalidArgumentException('non-nullable isProfessional cannot be null');
        }
        $this->container['isProfessional'] = $isProfessional;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model Shop platform model, current possible values : <ul>     <li><code>MARKETPLACE</code></li>     <li><code>DROPSHIP</code></li>     <li><code>ONE_CREDITOR</code></li> </ul>
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            throw new \InvalidArgumentException('non-nullable model cannot be null');
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets paymentInfo
     *
     * @return \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedPaymentInfo|null
     */
    public function getPaymentInfo()
    {
        return $this->container['paymentInfo'];
    }

    /**
     * Sets paymentInfo
     *
     * @param \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedPaymentInfo|null $paymentInfo paymentInfo
     *
     * @return self
     */
    public function setPaymentInfo($paymentInfo)
    {
        if (is_null($paymentInfo)) {
            throw new \InvalidArgumentException('non-nullable paymentInfo cannot be null');
        }
        $this->container['paymentInfo'] = $paymentInfo;

        return $this;
    }

    /**
     * Gets paymentMethodMandatory
     *
     * @return bool|null
     */
    public function getPaymentMethodMandatory()
    {
        return $this->container['paymentMethodMandatory'];
    }

    /**
     * Sets paymentMethodMandatory
     *
     * @param bool|null $paymentMethodMandatory Payment method is mandatory
     *
     * @return self
     */
    public function setPaymentMethodMandatory($paymentMethodMandatory)
    {
        if (is_null($paymentMethodMandatory)) {
            throw new \InvalidArgumentException('non-nullable paymentMethodMandatory cannot be null');
        }
        $this->container['paymentMethodMandatory'] = $paymentMethodMandatory;

        return $this;
    }

    /**
     * Gets proDetails
     *
     * @return \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedProDetails|null
     * @deprecated
     */
    public function getProDetails()
    {
        return $this->container['proDetails'];
    }

    /**
     * Sets proDetails
     *
     * @param \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedProDetails|null $proDetails proDetails
     *
     * @return self
     * @deprecated
     */
    public function setProDetails($proDetails)
    {
        if (is_null($proDetails)) {
            throw new \InvalidArgumentException('non-nullable proDetails cannot be null');
        }
        $this->container['proDetails'] = $proDetails;

        return $this;
    }

    /**
     * Gets producerIdentifiers
     *
     * @return \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedProducerIdentifiers[]|null
     */
    public function getProducerIdentifiers()
    {
        return $this->container['producerIdentifiers'];
    }

    /**
     * Sets producerIdentifiers
     *
     * @param \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedProducerIdentifiers[]|null $producerIdentifiers List of shop’s producer identifiers per Extended Producer Responsibility (EPR) categories. Only available if the operator setting <em>Activate data collection related to circular economy regulations</em> is enabled.
     *
     * @return self
     */
    public function setProducerIdentifiers($producerIdentifiers)
    {
        if (is_null($producerIdentifiers)) {
            throw new \InvalidArgumentException('non-nullable producerIdentifiers cannot be null');
        }
        $this->container['producerIdentifiers'] = $producerIdentifiers;

        return $this;
    }

    /**
     * Gets recyclingPolicy
     *
     * @return string|null
     */
    public function getRecyclingPolicy()
    {
        return $this->container['recyclingPolicy'];
    }

    /**
     * Sets recyclingPolicy
     *
     * @param string|null $recyclingPolicy <span>Recycling policy of the shop - only available if the operator setting </span><em>Activate data collection related to circular economy regulations</em><span> has been enabled.</span>
     *
     * @return self
     */
    public function setRecyclingPolicy($recyclingPolicy)
    {
        if (is_null($recyclingPolicy)) {
            throw new \InvalidArgumentException('non-nullable recyclingPolicy cannot be null');
        }
        $this->container['recyclingPolicy'] = $recyclingPolicy;

        return $this;
    }

    /**
     * Gets returnPolicy
     *
     * @return string|null
     */
    public function getReturnPolicy()
    {
        return $this->container['returnPolicy'];
    }

    /**
     * Sets returnPolicy
     *
     * @param string|null $returnPolicy Return policy of the shop
     *
     * @return self
     */
    public function setReturnPolicy($returnPolicy)
    {
        if (is_null($returnPolicy)) {
            throw new \InvalidArgumentException('non-nullable returnPolicy cannot be null');
        }
        $this->container['returnPolicy'] = $returnPolicy;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedShipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedShipping|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        if (is_null($shipping)) {
            throw new \InvalidArgumentException('non-nullable shipping cannot be null');
        }
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets shippingCountry
     *
     * @return string|null
     */
    public function getShippingCountry()
    {
        return $this->container['shippingCountry'];
    }

    /**
     * Sets shippingCountry
     *
     * @param string|null $shippingCountry Shipping country of the shop
     *
     * @return self
     */
    public function setShippingCountry($shippingCountry)
    {
        if (is_null($shippingCountry)) {
            throw new \InvalidArgumentException('non-nullable shippingCountry cannot be null');
        }
        $this->container['shippingCountry'] = $shippingCountry;

        return $this;
    }

    /**
     * Gets shopAdditionalFields
     *
     * @return \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedShopAdditionalFields[]|null
     */
    public function getShopAdditionalFields()
    {
        return $this->container['shopAdditionalFields'];
    }

    /**
     * Sets shopAdditionalFields
     *
     * @param \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedShopAdditionalFields[]|null $shopAdditionalFields Additional fields of the shop
     *
     * @return self
     */
    public function setShopAdditionalFields($shopAdditionalFields)
    {
        if (is_null($shopAdditionalFields)) {
            throw new \InvalidArgumentException('non-nullable shopAdditionalFields cannot be null');
        }
        $this->container['shopAdditionalFields'] = $shopAdditionalFields;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|null $shopName Shop name
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        if (is_null($shopName)) {
            throw new \InvalidArgumentException('non-nullable shopName cannot be null');
        }
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets specificBillingInformations
     *
     * @return \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedSpecificBillingInformations[]|null
     */
    public function getSpecificBillingInformations()
    {
        return $this->container['specificBillingInformations'];
    }

    /**
     * Sets specificBillingInformations
     *
     * @param \OpenAPI\Client\Mirakl\Model\A02Response200UpdatedSpecificBillingInformations[]|null $specificBillingInformations The list of specific billing information of the shop, used for invoicing and reporting purposes <br/><i>Applies only when the shop is <code>professional</code></i>
     *
     * @return self
     */
    public function setSpecificBillingInformations($specificBillingInformations)
    {
        if (is_null($specificBillingInformations)) {
            throw new \InvalidArgumentException('non-nullable specificBillingInformations cannot be null');
        }
        $this->container['specificBillingInformations'] = $specificBillingInformations;

        return $this;
    }

    /**
     * Gets webSite
     *
     * @return string|null
     */
    public function getWebSite()
    {
        return $this->container['webSite'];
    }

    /**
     * Sets webSite
     *
     * @param string|null $webSite Shop website
     *
     * @return self
     */
    public function setWebSite($webSite)
    {
        if (is_null($webSite)) {
            throw new \InvalidArgumentException('non-nullable webSite cannot be null');
        }
        $this->container['webSite'] = $webSite;

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


