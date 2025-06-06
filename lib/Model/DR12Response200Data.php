<?php
/**
 * DR12Response200Data
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
 * DR12Response200Data Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DR12Response200Data implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'entityType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DR12_Response_200_Data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deliveryBillInformation' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataDeliveryBillInformation[]',
        'ecoContributions' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataEcoContributions[]',
        'entityId' => 'string',
        'entityType' => 'string',
        'feesExcludingTaxes' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataFeesExcludingTaxes[]',
        'order' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataOrder',
        'orderLine' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataOrderLine',
        'originUnitPriceExcludingTaxes' => 'float',
        'originUnitPriceIncludingTaxes' => 'float',
        'paymentState' => 'string',
        'priceExcludingTaxes' => 'float',
        'product' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataProduct',
        'quantity' => 'int',
        'shippingFrom' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataShippingFrom',
        'shippingPriceExcludingTaxes' => 'float',
        'shippingTaxes' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataShippingTaxes[]',
        'shop' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataShop',
        'taxLegalNotice' => 'string',
        'taxes' => '\OpenAPI\Client\Mirakl\Model\DR12Response200DataTaxes[]',
        'totalPriceIncludingTaxes' => 'float',
        'unitPriceExcludingTaxes' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deliveryBillInformation' => null,
        'ecoContributions' => null,
        'entityId' => null,
        'entityType' => null,
        'feesExcludingTaxes' => null,
        'order' => null,
        'orderLine' => null,
        'originUnitPriceExcludingTaxes' => null,
        'originUnitPriceIncludingTaxes' => null,
        'paymentState' => null,
        'priceExcludingTaxes' => null,
        'product' => null,
        'quantity' => 'int32',
        'shippingFrom' => null,
        'shippingPriceExcludingTaxes' => null,
        'shippingTaxes' => null,
        'shop' => null,
        'taxLegalNotice' => null,
        'taxes' => null,
        'totalPriceIncludingTaxes' => null,
        'unitPriceExcludingTaxes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'deliveryBillInformation' => false,
        'ecoContributions' => false,
        'entityId' => false,
        'entityType' => false,
        'feesExcludingTaxes' => false,
        'order' => false,
        'orderLine' => false,
        'originUnitPriceExcludingTaxes' => false,
        'originUnitPriceIncludingTaxes' => false,
        'paymentState' => false,
        'priceExcludingTaxes' => false,
        'product' => false,
        'quantity' => false,
        'shippingFrom' => false,
        'shippingPriceExcludingTaxes' => false,
        'shippingTaxes' => false,
        'shop' => false,
        'taxLegalNotice' => false,
        'taxes' => false,
        'totalPriceIncludingTaxes' => false,
        'unitPriceExcludingTaxes' => false
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
        'deliveryBillInformation' => 'delivery_bill_information',
        'ecoContributions' => 'eco_contributions',
        'entityId' => 'entity_id',
        'entityType' => 'entity_type',
        'feesExcludingTaxes' => 'fees_excluding_taxes',
        'order' => 'order',
        'orderLine' => 'order_line',
        'originUnitPriceExcludingTaxes' => 'origin_unit_price_excluding_taxes',
        'originUnitPriceIncludingTaxes' => 'origin_unit_price_including_taxes',
        'paymentState' => 'payment_state',
        'priceExcludingTaxes' => 'price_excluding_taxes',
        'product' => 'product',
        'quantity' => 'quantity',
        'shippingFrom' => 'shipping_from',
        'shippingPriceExcludingTaxes' => 'shipping_price_excluding_taxes',
        'shippingTaxes' => 'shipping_taxes',
        'shop' => 'shop',
        'taxLegalNotice' => 'tax_legal_notice',
        'taxes' => 'taxes',
        'totalPriceIncludingTaxes' => 'total_price_including_taxes',
        'unitPriceExcludingTaxes' => 'unit_price_excluding_taxes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deliveryBillInformation' => 'setDeliveryBillInformation',
        'ecoContributions' => 'setEcoContributions',
        'entityId' => 'setEntityId',
        'entityType' => 'setEntityType',
        'feesExcludingTaxes' => 'setFeesExcludingTaxes',
        'order' => 'setOrder',
        'orderLine' => 'setOrderLine',
        'originUnitPriceExcludingTaxes' => 'setOriginUnitPriceExcludingTaxes',
        'originUnitPriceIncludingTaxes' => 'setOriginUnitPriceIncludingTaxes',
        'paymentState' => 'setPaymentState',
        'priceExcludingTaxes' => 'setPriceExcludingTaxes',
        'product' => 'setProduct',
        'quantity' => 'setQuantity',
        'shippingFrom' => 'setShippingFrom',
        'shippingPriceExcludingTaxes' => 'setShippingPriceExcludingTaxes',
        'shippingTaxes' => 'setShippingTaxes',
        'shop' => 'setShop',
        'taxLegalNotice' => 'setTaxLegalNotice',
        'taxes' => 'setTaxes',
        'totalPriceIncludingTaxes' => 'setTotalPriceIncludingTaxes',
        'unitPriceExcludingTaxes' => 'setUnitPriceExcludingTaxes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deliveryBillInformation' => 'getDeliveryBillInformation',
        'ecoContributions' => 'getEcoContributions',
        'entityId' => 'getEntityId',
        'entityType' => 'getEntityType',
        'feesExcludingTaxes' => 'getFeesExcludingTaxes',
        'order' => 'getOrder',
        'orderLine' => 'getOrderLine',
        'originUnitPriceExcludingTaxes' => 'getOriginUnitPriceExcludingTaxes',
        'originUnitPriceIncludingTaxes' => 'getOriginUnitPriceIncludingTaxes',
        'paymentState' => 'getPaymentState',
        'priceExcludingTaxes' => 'getPriceExcludingTaxes',
        'product' => 'getProduct',
        'quantity' => 'getQuantity',
        'shippingFrom' => 'getShippingFrom',
        'shippingPriceExcludingTaxes' => 'getShippingPriceExcludingTaxes',
        'shippingTaxes' => 'getShippingTaxes',
        'shop' => 'getShop',
        'taxLegalNotice' => 'getTaxLegalNotice',
        'taxes' => 'getTaxes',
        'totalPriceIncludingTaxes' => 'getTotalPriceIncludingTaxes',
        'unitPriceExcludingTaxes' => 'getUnitPriceExcludingTaxes'
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
        $this->setIfExists('deliveryBillInformation', $data ?? [], null);
        $this->setIfExists('ecoContributions', $data ?? [], null);
        $this->setIfExists('entityId', $data ?? [], null);
        $this->setIfExists('entityType', $data ?? [], null);
        $this->setIfExists('feesExcludingTaxes', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('orderLine', $data ?? [], null);
        $this->setIfExists('originUnitPriceExcludingTaxes', $data ?? [], null);
        $this->setIfExists('originUnitPriceIncludingTaxes', $data ?? [], null);
        $this->setIfExists('paymentState', $data ?? [], null);
        $this->setIfExists('priceExcludingTaxes', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('shippingFrom', $data ?? [], null);
        $this->setIfExists('shippingPriceExcludingTaxes', $data ?? [], null);
        $this->setIfExists('shippingTaxes', $data ?? [], null);
        $this->setIfExists('shop', $data ?? [], null);
        $this->setIfExists('taxLegalNotice', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('totalPriceIncludingTaxes', $data ?? [], null);
        $this->setIfExists('unitPriceExcludingTaxes', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['entityType'] = static::$openAPIModelName;
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
     * Gets deliveryBillInformation
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataDeliveryBillInformation[]|null
     */
    public function getDeliveryBillInformation()
    {
        return $this->container['deliveryBillInformation'];
    }

    /**
     * Sets deliveryBillInformation
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataDeliveryBillInformation[]|null $deliveryBillInformation Delivery billing information
     *
     * @return self
     */
    public function setDeliveryBillInformation($deliveryBillInformation)
    {
        if (is_null($deliveryBillInformation)) {
            throw new \InvalidArgumentException('non-nullable deliveryBillInformation cannot be null');
        }
        $this->container['deliveryBillInformation'] = $deliveryBillInformation;

        return $this;
    }

    /**
     * Gets ecoContributions
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataEcoContributions[]|null
     */
    public function getEcoContributions()
    {
        return $this->container['ecoContributions'];
    }

    /**
     * Sets ecoContributions
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataEcoContributions[]|null $ecoContributions List of eco-contribution amounts and corresponding producer identifiers, if applicable<br/> Only available if the operator activates the circular economy information collection.
     *
     * @return self
     */
    public function setEcoContributions($ecoContributions)
    {
        if (is_null($ecoContributions)) {
            throw new \InvalidArgumentException('non-nullable ecoContributions cannot be null');
        }
        $this->container['ecoContributions'] = $ecoContributions;

        return $this;
    }

    /**
     * Gets entityId
     *
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     *
     * @param string|null $entityId The entity id the document line relates to
     *
     * @return self
     */
    public function setEntityId($entityId)
    {
        if (is_null($entityId)) {
            throw new \InvalidArgumentException('non-nullable entityId cannot be null');
        }
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param string|null $entityType The entity type the document line relates to
     *
     * @return self
     */
    public function setEntityType($entityType)
    {
        if (is_null($entityType)) {
            throw new \InvalidArgumentException('non-nullable entityType cannot be null');
        }
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets feesExcludingTaxes
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataFeesExcludingTaxes[]|null
     */
    public function getFeesExcludingTaxes()
    {
        return $this->container['feesExcludingTaxes'];
    }

    /**
     * Sets feesExcludingTaxes
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataFeesExcludingTaxes[]|null $feesExcludingTaxes List of fees applied on the order line
     *
     * @return self
     */
    public function setFeesExcludingTaxes($feesExcludingTaxes)
    {
        if (is_null($feesExcludingTaxes)) {
            throw new \InvalidArgumentException('non-nullable feesExcludingTaxes cannot be null');
        }
        $this->container['feesExcludingTaxes'] = $feesExcludingTaxes;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataOrder|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataOrder|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets orderLine
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataOrderLine|null
     */
    public function getOrderLine()
    {
        return $this->container['orderLine'];
    }

    /**
     * Sets orderLine
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataOrderLine|null $orderLine orderLine
     *
     * @return self
     */
    public function setOrderLine($orderLine)
    {
        if (is_null($orderLine)) {
            throw new \InvalidArgumentException('non-nullable orderLine cannot be null');
        }
        $this->container['orderLine'] = $orderLine;

        return $this;
    }

    /**
     * Gets originUnitPriceExcludingTaxes
     *
     * @return float|null
     */
    public function getOriginUnitPriceExcludingTaxes()
    {
        return $this->container['originUnitPriceExcludingTaxes'];
    }

    /**
     * Sets originUnitPriceExcludingTaxes
     *
     * @param float|null $originUnitPriceExcludingTaxes The original unit price excluding tax of the offer associated with the order line
     *
     * @return self
     */
    public function setOriginUnitPriceExcludingTaxes($originUnitPriceExcludingTaxes)
    {
        if (is_null($originUnitPriceExcludingTaxes)) {
            throw new \InvalidArgumentException('non-nullable originUnitPriceExcludingTaxes cannot be null');
        }
        $this->container['originUnitPriceExcludingTaxes'] = $originUnitPriceExcludingTaxes;

        return $this;
    }

    /**
     * Gets originUnitPriceIncludingTaxes
     *
     * @return float|null
     */
    public function getOriginUnitPriceIncludingTaxes()
    {
        return $this->container['originUnitPriceIncludingTaxes'];
    }

    /**
     * Sets originUnitPriceIncludingTaxes
     *
     * @param float|null $originUnitPriceIncludingTaxes The original unit price including tax of the offer associated with the order line
     *
     * @return self
     */
    public function setOriginUnitPriceIncludingTaxes($originUnitPriceIncludingTaxes)
    {
        if (is_null($originUnitPriceIncludingTaxes)) {
            throw new \InvalidArgumentException('non-nullable originUnitPriceIncludingTaxes cannot be null');
        }
        $this->container['originUnitPriceIncludingTaxes'] = $originUnitPriceIncludingTaxes;

        return $this;
    }

    /**
     * Gets paymentState
     *
     * @return string|null
     */
    public function getPaymentState()
    {
        return $this->container['paymentState'];
    }

    /**
     * Sets paymentState
     *
     * @param string|null $paymentState Document request line payment status
     *
     * @return self
     */
    public function setPaymentState($paymentState)
    {
        if (is_null($paymentState)) {
            throw new \InvalidArgumentException('non-nullable paymentState cannot be null');
        }
        $this->container['paymentState'] = $paymentState;

        return $this;
    }

    /**
     * Gets priceExcludingTaxes
     *
     * @return float|null
     */
    public function getPriceExcludingTaxes()
    {
        return $this->container['priceExcludingTaxes'];
    }

    /**
     * Sets priceExcludingTaxes
     *
     * @param float|null $priceExcludingTaxes The price excluding taxes after promotions
     *
     * @return self
     */
    public function setPriceExcludingTaxes($priceExcludingTaxes)
    {
        if (is_null($priceExcludingTaxes)) {
            throw new \InvalidArgumentException('non-nullable priceExcludingTaxes cannot be null');
        }
        $this->container['priceExcludingTaxes'] = $priceExcludingTaxes;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataProduct|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataProduct|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity of the document line
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets shippingFrom
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataShippingFrom|null
     */
    public function getShippingFrom()
    {
        return $this->container['shippingFrom'];
    }

    /**
     * Sets shippingFrom
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataShippingFrom|null $shippingFrom shippingFrom
     *
     * @return self
     */
    public function setShippingFrom($shippingFrom)
    {
        if (is_null($shippingFrom)) {
            throw new \InvalidArgumentException('non-nullable shippingFrom cannot be null');
        }
        $this->container['shippingFrom'] = $shippingFrom;

        return $this;
    }

    /**
     * Gets shippingPriceExcludingTaxes
     *
     * @return float|null
     */
    public function getShippingPriceExcludingTaxes()
    {
        return $this->container['shippingPriceExcludingTaxes'];
    }

    /**
     * Sets shippingPriceExcludingTaxes
     *
     * @param float|null $shippingPriceExcludingTaxes The shipping price excluding taxes
     *
     * @return self
     */
    public function setShippingPriceExcludingTaxes($shippingPriceExcludingTaxes)
    {
        if (is_null($shippingPriceExcludingTaxes)) {
            throw new \InvalidArgumentException('non-nullable shippingPriceExcludingTaxes cannot be null');
        }
        $this->container['shippingPriceExcludingTaxes'] = $shippingPriceExcludingTaxes;

        return $this;
    }

    /**
     * Gets shippingTaxes
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataShippingTaxes[]|null
     */
    public function getShippingTaxes()
    {
        return $this->container['shippingTaxes'];
    }

    /**
     * Sets shippingTaxes
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataShippingTaxes[]|null $shippingTaxes The shipping taxes
     *
     * @return self
     */
    public function setShippingTaxes($shippingTaxes)
    {
        if (is_null($shippingTaxes)) {
            throw new \InvalidArgumentException('non-nullable shippingTaxes cannot be null');
        }
        $this->container['shippingTaxes'] = $shippingTaxes;

        return $this;
    }

    /**
     * Gets shop
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataShop|null
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataShop|null $shop shop
     *
     * @return self
     */
    public function setShop($shop)
    {
        if (is_null($shop)) {
            throw new \InvalidArgumentException('non-nullable shop cannot be null');
        }
        $this->container['shop'] = $shop;

        return $this;
    }

    /**
     * Gets taxLegalNotice
     *
     * @return string|null
     */
    public function getTaxLegalNotice()
    {
        return $this->container['taxLegalNotice'];
    }

    /**
     * Sets taxLegalNotice
     *
     * @param string|null $taxLegalNotice The legal notice applying to the offer’s tax calculation
     *
     * @return self
     */
    public function setTaxLegalNotice($taxLegalNotice)
    {
        if (is_null($taxLegalNotice)) {
            throw new \InvalidArgumentException('non-nullable taxLegalNotice cannot be null');
        }
        $this->container['taxLegalNotice'] = $taxLegalNotice;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \OpenAPI\Client\Mirakl\Model\DR12Response200DataTaxes[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \OpenAPI\Client\Mirakl\Model\DR12Response200DataTaxes[]|null $taxes The taxes
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        if (is_null($taxes)) {
            throw new \InvalidArgumentException('non-nullable taxes cannot be null');
        }
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets totalPriceIncludingTaxes
     *
     * @return float|null
     */
    public function getTotalPriceIncludingTaxes()
    {
        return $this->container['totalPriceIncludingTaxes'];
    }

    /**
     * Sets totalPriceIncludingTaxes
     *
     * @param float|null $totalPriceIncludingTaxes The total price
     *
     * @return self
     */
    public function setTotalPriceIncludingTaxes($totalPriceIncludingTaxes)
    {
        if (is_null($totalPriceIncludingTaxes)) {
            throw new \InvalidArgumentException('non-nullable totalPriceIncludingTaxes cannot be null');
        }
        $this->container['totalPriceIncludingTaxes'] = $totalPriceIncludingTaxes;

        return $this;
    }

    /**
     * Gets unitPriceExcludingTaxes
     *
     * @return float|null
     */
    public function getUnitPriceExcludingTaxes()
    {
        return $this->container['unitPriceExcludingTaxes'];
    }

    /**
     * Sets unitPriceExcludingTaxes
     *
     * @param float|null $unitPriceExcludingTaxes The unit price excluding taxes after promotions
     *
     * @return self
     */
    public function setUnitPriceExcludingTaxes($unitPriceExcludingTaxes)
    {
        if (is_null($unitPriceExcludingTaxes)) {
            throw new \InvalidArgumentException('non-nullable unitPriceExcludingTaxes cannot be null');
        }
        $this->container['unitPriceExcludingTaxes'] = $unitPriceExcludingTaxes;

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


