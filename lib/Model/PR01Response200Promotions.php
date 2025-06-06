<?php
/**
 * PR01Response200Promotions
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
 * PR01Response200Promotions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PR01Response200Promotions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PR01_Response_200_Promotions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amountOff' => 'float',
        'applicationToCart' => '\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsApplicationToCart[]',
        'campaign' => '\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsCampaign',
        'channels' => '\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsChannels[]',
        'customerGroupIds' => 'string[]',
        'customerOrganizationIds' => 'string[]',
        'dateCreated' => '\DateTime',
        'endDate' => '\DateTime',
        'freeItemsQuantity' => 'int',
        'internalDescription' => 'string',
        'internalId' => 'string',
        'lastUpdated' => '\DateTime',
        'maxQuantityToDiscount' => 'int',
        'medias' => '\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsMedias[]',
        'percentageOff' => 'float',
        'publicDescriptions' => '\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsPublicDescriptions[]',
        'rewardOfferIds' => 'int[]',
        'rewardOnPurchasedItems' => 'bool',
        'startDate' => '\DateTime',
        'state' => 'string',
        'triggerOfferIds' => 'int[]',
        'triggers' => '\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsTriggers[]',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amountOff' => null,
        'applicationToCart' => null,
        'campaign' => null,
        'channels' => null,
        'customerGroupIds' => null,
        'customerOrganizationIds' => null,
        'dateCreated' => 'date-time',
        'endDate' => 'date-time',
        'freeItemsQuantity' => 'int32',
        'internalDescription' => null,
        'internalId' => null,
        'lastUpdated' => 'date-time',
        'maxQuantityToDiscount' => 'int32',
        'medias' => null,
        'percentageOff' => null,
        'publicDescriptions' => null,
        'rewardOfferIds' => 'int64',
        'rewardOnPurchasedItems' => null,
        'startDate' => 'date-time',
        'state' => null,
        'triggerOfferIds' => 'int64',
        'triggers' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amountOff' => false,
        'applicationToCart' => false,
        'campaign' => false,
        'channels' => false,
        'customerGroupIds' => false,
        'customerOrganizationIds' => false,
        'dateCreated' => false,
        'endDate' => false,
        'freeItemsQuantity' => false,
        'internalDescription' => false,
        'internalId' => false,
        'lastUpdated' => false,
        'maxQuantityToDiscount' => false,
        'medias' => false,
        'percentageOff' => false,
        'publicDescriptions' => false,
        'rewardOfferIds' => false,
        'rewardOnPurchasedItems' => false,
        'startDate' => false,
        'state' => false,
        'triggerOfferIds' => false,
        'triggers' => false,
        'type' => false
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
        'amountOff' => 'amount_off',
        'applicationToCart' => 'application_to_cart',
        'campaign' => 'campaign',
        'channels' => 'channels',
        'customerGroupIds' => 'customer_group_ids',
        'customerOrganizationIds' => 'customer_organization_ids',
        'dateCreated' => 'date_created',
        'endDate' => 'end_date',
        'freeItemsQuantity' => 'free_items_quantity',
        'internalDescription' => 'internal_description',
        'internalId' => 'internal_id',
        'lastUpdated' => 'last_updated',
        'maxQuantityToDiscount' => 'max_quantity_to_discount',
        'medias' => 'medias',
        'percentageOff' => 'percentage_off',
        'publicDescriptions' => 'public_descriptions',
        'rewardOfferIds' => 'reward_offer_ids',
        'rewardOnPurchasedItems' => 'reward_on_purchased_items',
        'startDate' => 'start_date',
        'state' => 'state',
        'triggerOfferIds' => 'trigger_offer_ids',
        'triggers' => 'triggers',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amountOff' => 'setAmountOff',
        'applicationToCart' => 'setApplicationToCart',
        'campaign' => 'setCampaign',
        'channels' => 'setChannels',
        'customerGroupIds' => 'setCustomerGroupIds',
        'customerOrganizationIds' => 'setCustomerOrganizationIds',
        'dateCreated' => 'setDateCreated',
        'endDate' => 'setEndDate',
        'freeItemsQuantity' => 'setFreeItemsQuantity',
        'internalDescription' => 'setInternalDescription',
        'internalId' => 'setInternalId',
        'lastUpdated' => 'setLastUpdated',
        'maxQuantityToDiscount' => 'setMaxQuantityToDiscount',
        'medias' => 'setMedias',
        'percentageOff' => 'setPercentageOff',
        'publicDescriptions' => 'setPublicDescriptions',
        'rewardOfferIds' => 'setRewardOfferIds',
        'rewardOnPurchasedItems' => 'setRewardOnPurchasedItems',
        'startDate' => 'setStartDate',
        'state' => 'setState',
        'triggerOfferIds' => 'setTriggerOfferIds',
        'triggers' => 'setTriggers',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amountOff' => 'getAmountOff',
        'applicationToCart' => 'getApplicationToCart',
        'campaign' => 'getCampaign',
        'channels' => 'getChannels',
        'customerGroupIds' => 'getCustomerGroupIds',
        'customerOrganizationIds' => 'getCustomerOrganizationIds',
        'dateCreated' => 'getDateCreated',
        'endDate' => 'getEndDate',
        'freeItemsQuantity' => 'getFreeItemsQuantity',
        'internalDescription' => 'getInternalDescription',
        'internalId' => 'getInternalId',
        'lastUpdated' => 'getLastUpdated',
        'maxQuantityToDiscount' => 'getMaxQuantityToDiscount',
        'medias' => 'getMedias',
        'percentageOff' => 'getPercentageOff',
        'publicDescriptions' => 'getPublicDescriptions',
        'rewardOfferIds' => 'getRewardOfferIds',
        'rewardOnPurchasedItems' => 'getRewardOnPurchasedItems',
        'startDate' => 'getStartDate',
        'state' => 'getState',
        'triggerOfferIds' => 'getTriggerOfferIds',
        'triggers' => 'getTriggers',
        'type' => 'getType'
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
        $this->setIfExists('amountOff', $data ?? [], null);
        $this->setIfExists('applicationToCart', $data ?? [], null);
        $this->setIfExists('campaign', $data ?? [], null);
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('customerGroupIds', $data ?? [], null);
        $this->setIfExists('customerOrganizationIds', $data ?? [], null);
        $this->setIfExists('dateCreated', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('freeItemsQuantity', $data ?? [], null);
        $this->setIfExists('internalDescription', $data ?? [], null);
        $this->setIfExists('internalId', $data ?? [], null);
        $this->setIfExists('lastUpdated', $data ?? [], null);
        $this->setIfExists('maxQuantityToDiscount', $data ?? [], null);
        $this->setIfExists('medias', $data ?? [], null);
        $this->setIfExists('percentageOff', $data ?? [], null);
        $this->setIfExists('publicDescriptions', $data ?? [], null);
        $this->setIfExists('rewardOfferIds', $data ?? [], null);
        $this->setIfExists('rewardOnPurchasedItems', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('triggerOfferIds', $data ?? [], null);
        $this->setIfExists('triggers', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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
     * Gets amountOff
     *
     * @return float|null
     */
    public function getAmountOff()
    {
        return $this->container['amountOff'];
    }

    /**
     * Sets amountOff
     *
     * @param float|null $amountOff The amount off of the promotion. Only applicable when promotion is of type AMOUNT_OFF, null otherwise
     *
     * @return self
     */
    public function setAmountOff($amountOff)
    {
        if (is_null($amountOff)) {
            throw new \InvalidArgumentException('non-nullable amountOff cannot be null');
        }
        $this->container['amountOff'] = $amountOff;

        return $this;
    }

    /**
     * Gets applicationToCart
     *
     * @return \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsApplicationToCart[]|null
     */
    public function getApplicationToCart()
    {
        return $this->container['applicationToCart'];
    }

    /**
     * Sets applicationToCart
     *
     * @param \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsApplicationToCart[]|null $applicationToCart If applicable, returns promo code associated to the promotion
     *
     * @return self
     */
    public function setApplicationToCart($applicationToCart)
    {
        if (is_null($applicationToCart)) {
            throw new \InvalidArgumentException('non-nullable applicationToCart cannot be null');
        }
        $this->container['applicationToCart'] = $applicationToCart;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsCampaign|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsCampaign|null $campaign campaign
     *
     * @return self
     */
    public function setCampaign($campaign)
    {
        if (is_null($campaign)) {
            throw new \InvalidArgumentException('non-nullable campaign cannot be null');
        }
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsChannels[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsChannels[]|null $channels Channels on which the promotion is applied. If none, promotion applied on all channels
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
     * Gets customerGroupIds
     *
     * @return string[]|null
     */
    public function getCustomerGroupIds()
    {
        return $this->container['customerGroupIds'];
    }

    /**
     * Sets customerGroupIds
     *
     * @param string[]|null $customerGroupIds The customer groups on which the promotion is applied. If none, promotion applies to all customer groups.
     *
     * @return self
     */
    public function setCustomerGroupIds($customerGroupIds)
    {
        if (is_null($customerGroupIds)) {
            throw new \InvalidArgumentException('non-nullable customerGroupIds cannot be null');
        }
        $this->container['customerGroupIds'] = $customerGroupIds;

        return $this;
    }

    /**
     * Gets customerOrganizationIds
     *
     * @return string[]|null
     */
    public function getCustomerOrganizationIds()
    {
        return $this->container['customerOrganizationIds'];
    }

    /**
     * Sets customerOrganizationIds
     *
     * @param string[]|null $customerOrganizationIds The customer organizations on which the promotion is applied. If none, promotion applies to all customer organizations.
     *
     * @return self
     */
    public function setCustomerOrganizationIds($customerOrganizationIds)
    {
        if (is_null($customerOrganizationIds)) {
            throw new \InvalidArgumentException('non-nullable customerOrganizationIds cannot be null');
        }
        $this->container['customerOrganizationIds'] = $customerOrganizationIds;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime|null $dateCreated Creation date of the promotion
     *
     * @return self
     */
    public function setDateCreated($dateCreated)
    {
        if (is_null($dateCreated)) {
            throw new \InvalidArgumentException('non-nullable dateCreated cannot be null');
        }
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate End date of the promotion period of activity
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            throw new \InvalidArgumentException('non-nullable endDate cannot be null');
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets freeItemsQuantity
     *
     * @return int|null
     */
    public function getFreeItemsQuantity()
    {
        return $this->container['freeItemsQuantity'];
    }

    /**
     * Sets freeItemsQuantity
     *
     * @param int|null $freeItemsQuantity The free item target quantity of the promotion. Only applicable when promotion is of type FREE_ITEMS, null otherwise
     *
     * @return self
     */
    public function setFreeItemsQuantity($freeItemsQuantity)
    {
        if (is_null($freeItemsQuantity)) {
            throw new \InvalidArgumentException('non-nullable freeItemsQuantity cannot be null');
        }
        $this->container['freeItemsQuantity'] = $freeItemsQuantity;

        return $this;
    }

    /**
     * Gets internalDescription
     *
     * @return string|null
     */
    public function getInternalDescription()
    {
        return $this->container['internalDescription'];
    }

    /**
     * Sets internalDescription
     *
     * @param string|null $internalDescription Internal description of the promotion, set by the shop
     *
     * @return self
     */
    public function setInternalDescription($internalDescription)
    {
        if (is_null($internalDescription)) {
            throw new \InvalidArgumentException('non-nullable internalDescription cannot be null');
        }
        $this->container['internalDescription'] = $internalDescription;

        return $this;
    }

    /**
     * Gets internalId
     *
     * @return string|null
     */
    public function getInternalId()
    {
        return $this->container['internalId'];
    }

    /**
     * Sets internalId
     *
     * @param string|null $internalId Promotion identifier
     *
     * @return self
     */
    public function setInternalId($internalId)
    {
        if (is_null($internalId)) {
            throw new \InvalidArgumentException('non-nullable internalId cannot be null');
        }
        $this->container['internalId'] = $internalId;

        return $this;
    }

    /**
     * Gets lastUpdated
     *
     * @return \DateTime|null
     */
    public function getLastUpdated()
    {
        return $this->container['lastUpdated'];
    }

    /**
     * Sets lastUpdated
     *
     * @param \DateTime|null $lastUpdated Last update date of the promotion
     *
     * @return self
     */
    public function setLastUpdated($lastUpdated)
    {
        if (is_null($lastUpdated)) {
            throw new \InvalidArgumentException('non-nullable lastUpdated cannot be null');
        }
        $this->container['lastUpdated'] = $lastUpdated;

        return $this;
    }

    /**
     * Gets maxQuantityToDiscount
     *
     * @return int|null
     */
    public function getMaxQuantityToDiscount()
    {
        return $this->container['maxQuantityToDiscount'];
    }

    /**
     * Sets maxQuantityToDiscount
     *
     * @param int|null $maxQuantityToDiscount Maximum quantity of items on which a percentage off discount applies. Only applicable when promotion is of type PERCENTAGE_OFF, null otherwise
     *
     * @return self
     */
    public function setMaxQuantityToDiscount($maxQuantityToDiscount)
    {
        if (is_null($maxQuantityToDiscount)) {
            throw new \InvalidArgumentException('non-nullable maxQuantityToDiscount cannot be null');
        }
        $this->container['maxQuantityToDiscount'] = $maxQuantityToDiscount;

        return $this;
    }

    /**
     * Gets medias
     *
     * @return \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsMedias[]|null
     */
    public function getMedias()
    {
        return $this->container['medias'];
    }

    /**
     * Sets medias
     *
     * @param \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsMedias[]|null $medias The medias associated with this promotion, with the locales they apply to
     *
     * @return self
     */
    public function setMedias($medias)
    {
        if (is_null($medias)) {
            throw new \InvalidArgumentException('non-nullable medias cannot be null');
        }
        $this->container['medias'] = $medias;

        return $this;
    }

    /**
     * Gets percentageOff
     *
     * @return float|null
     */
    public function getPercentageOff()
    {
        return $this->container['percentageOff'];
    }

    /**
     * Sets percentageOff
     *
     * @param float|null $percentageOff The percentage off of the promotion. Only applicable when promotion is of type PERCENTAGE_OFF, null otherwise
     *
     * @return self
     */
    public function setPercentageOff($percentageOff)
    {
        if (is_null($percentageOff)) {
            throw new \InvalidArgumentException('non-nullable percentageOff cannot be null');
        }
        $this->container['percentageOff'] = $percentageOff;

        return $this;
    }

    /**
     * Gets publicDescriptions
     *
     * @return \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsPublicDescriptions[]|null
     */
    public function getPublicDescriptions()
    {
        return $this->container['publicDescriptions'];
    }

    /**
     * Sets publicDescriptions
     *
     * @param \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsPublicDescriptions[]|null $publicDescriptions The public descriptions of the promotion, with the locales they apply to
     *
     * @return self
     */
    public function setPublicDescriptions($publicDescriptions)
    {
        if (is_null($publicDescriptions)) {
            throw new \InvalidArgumentException('non-nullable publicDescriptions cannot be null');
        }
        $this->container['publicDescriptions'] = $publicDescriptions;

        return $this;
    }

    /**
     * Gets rewardOfferIds
     *
     * @return int[]|null
     */
    public function getRewardOfferIds()
    {
        return $this->container['rewardOfferIds'];
    }

    /**
     * Sets rewardOfferIds
     *
     * @param int[]|null $rewardOfferIds Offers used as reward in the promotion, according to the requested reward_offer_ids
     *
     * @return self
     */
    public function setRewardOfferIds($rewardOfferIds)
    {
        if (is_null($rewardOfferIds)) {
            throw new \InvalidArgumentException('non-nullable rewardOfferIds cannot be null');
        }
        $this->container['rewardOfferIds'] = $rewardOfferIds;

        return $this;
    }

    /**
     * Gets rewardOnPurchasedItems
     *
     * @return bool|null
     */
    public function getRewardOnPurchasedItems()
    {
        return $this->container['rewardOnPurchasedItems'];
    }

    /**
     * Sets rewardOnPurchasedItems
     *
     * @param bool|null $rewardOnPurchasedItems Specifies if the promotion's reward applies to purchased items or to a specific selection
     *
     * @return self
     */
    public function setRewardOnPurchasedItems($rewardOnPurchasedItems)
    {
        if (is_null($rewardOnPurchasedItems)) {
            throw new \InvalidArgumentException('non-nullable rewardOnPurchasedItems cannot be null');
        }
        $this->container['rewardOnPurchasedItems'] = $rewardOnPurchasedItems;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate Start date of the promotion period of activity
     *
     * @return self
     */
    public function setStartDate($startDate)
    {
        if (is_null($startDate)) {
            throw new \InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

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
     * @param string|null $state Promotion state
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
     * Gets triggerOfferIds
     *
     * @return int[]|null
     */
    public function getTriggerOfferIds()
    {
        return $this->container['triggerOfferIds'];
    }

    /**
     * Sets triggerOfferIds
     *
     * @param int[]|null $triggerOfferIds Offers which trigger the promotion, according to the requested trigger_offer_ids
     *
     * @return self
     */
    public function setTriggerOfferIds($triggerOfferIds)
    {
        if (is_null($triggerOfferIds)) {
            throw new \InvalidArgumentException('non-nullable triggerOfferIds cannot be null');
        }
        $this->container['triggerOfferIds'] = $triggerOfferIds;

        return $this;
    }

    /**
     * Gets triggers
     *
     * @return \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsTriggers[]|null
     */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
     * Sets triggers
     *
     * @param \OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsTriggers[]|null $triggers Triggers of the promotion
     *
     * @return self
     */
    public function setTriggers($triggers)
    {
        if (is_null($triggers)) {
            throw new \InvalidArgumentException('non-nullable triggers cannot be null');
        }
        $this->container['triggers'] = $triggers;

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
     * @param string|null $type Promotion type
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


