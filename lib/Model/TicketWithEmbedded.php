<?php
/**
 * TicketWithEmbedded
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kaufland.de Seller API v2
 *
 * This is the Kaufland.de Seller API v2. You can find more information on [https://sellerapi.kaufland.com/](https://sellerapi.kaufland.com/)
 *
 * The version of the OpenAPI document: 2.18.3
 * Contact: seller-api-support@kaufland-online.de
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
 * TicketWithEmbedded Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Mirakl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TicketWithEmbedded implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TicketWithEmbedded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'idTicket' => 'string',
        'idsOrderUnits' => 'int[]',
        'idBuyer' => 'int',
        'tsCreatedIso' => '\DateTime',
        'tsUpdatedIso' => '\DateTime',
        'status' => '\OpenAPI\Client\Mirakl\Model\TicketStatus',
        'openReason' => '\OpenAPI\Client\Mirakl\Model\TicketReason',
        'topic' => '\OpenAPI\Client\Mirakl\Model\TicketTopic',
        'isSellerResponsible' => 'bool',
        'fulfillmentType' => '\OpenAPI\Client\Mirakl\Model\FulfillmentType',
        'messages' => '\OpenAPI\Client\Mirakl\Model\TicketMessage[]',
        'orderUnits' => '\OpenAPI\Client\Mirakl\Model\OrderUnit[]',
        'buyer' => '\OpenAPI\Client\Mirakl\Model\Buyer',
        'product' => '\OpenAPI\Client\Mirakl\Model\Product',
        'files' => '\OpenAPI\Client\Mirakl\Model\TicketFile[]',
        'storefront' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'idTicket' => null,
        'idsOrderUnits' => 'int64',
        'idBuyer' => 'int64',
        'tsCreatedIso' => 'date-time',
        'tsUpdatedIso' => 'date-time',
        'status' => null,
        'openReason' => null,
        'topic' => null,
        'isSellerResponsible' => null,
        'fulfillmentType' => null,
        'messages' => null,
        'orderUnits' => null,
        'buyer' => null,
        'product' => null,
        'files' => null,
        'storefront' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'idTicket' => false,
        'idsOrderUnits' => false,
        'idBuyer' => true,
        'tsCreatedIso' => false,
        'tsUpdatedIso' => false,
        'status' => false,
        'openReason' => false,
        'topic' => true,
        'isSellerResponsible' => false,
        'fulfillmentType' => false,
        'messages' => false,
        'orderUnits' => false,
        'buyer' => true,
        'product' => true,
        'files' => false,
        'storefront' => false
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
        'idTicket' => 'id_ticket',
        'idsOrderUnits' => 'ids_order_units',
        'idBuyer' => 'id_buyer',
        'tsCreatedIso' => 'ts_created_iso',
        'tsUpdatedIso' => 'ts_updated_iso',
        'status' => 'status',
        'openReason' => 'open_reason',
        'topic' => 'topic',
        'isSellerResponsible' => 'is_seller_responsible',
        'fulfillmentType' => 'fulfillment_type',
        'messages' => 'messages',
        'orderUnits' => 'order_units',
        'buyer' => 'buyer',
        'product' => 'product',
        'files' => 'files',
        'storefront' => 'storefront'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'idTicket' => 'setIdTicket',
        'idsOrderUnits' => 'setIdsOrderUnits',
        'idBuyer' => 'setIdBuyer',
        'tsCreatedIso' => 'setTsCreatedIso',
        'tsUpdatedIso' => 'setTsUpdatedIso',
        'status' => 'setStatus',
        'openReason' => 'setOpenReason',
        'topic' => 'setTopic',
        'isSellerResponsible' => 'setIsSellerResponsible',
        'fulfillmentType' => 'setFulfillmentType',
        'messages' => 'setMessages',
        'orderUnits' => 'setOrderUnits',
        'buyer' => 'setBuyer',
        'product' => 'setProduct',
        'files' => 'setFiles',
        'storefront' => 'setStorefront'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'idTicket' => 'getIdTicket',
        'idsOrderUnits' => 'getIdsOrderUnits',
        'idBuyer' => 'getIdBuyer',
        'tsCreatedIso' => 'getTsCreatedIso',
        'tsUpdatedIso' => 'getTsUpdatedIso',
        'status' => 'getStatus',
        'openReason' => 'getOpenReason',
        'topic' => 'getTopic',
        'isSellerResponsible' => 'getIsSellerResponsible',
        'fulfillmentType' => 'getFulfillmentType',
        'messages' => 'getMessages',
        'orderUnits' => 'getOrderUnits',
        'buyer' => 'getBuyer',
        'product' => 'getProduct',
        'files' => 'getFiles',
        'storefront' => 'getStorefront'
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
        $this->setIfExists('idTicket', $data ?? [], null);
        $this->setIfExists('idsOrderUnits', $data ?? [], null);
        $this->setIfExists('idBuyer', $data ?? [], null);
        $this->setIfExists('tsCreatedIso', $data ?? [], null);
        $this->setIfExists('tsUpdatedIso', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('openReason', $data ?? [], null);
        $this->setIfExists('topic', $data ?? [], null);
        $this->setIfExists('isSellerResponsible', $data ?? [], null);
        $this->setIfExists('fulfillmentType', $data ?? [], null);
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('orderUnits', $data ?? [], null);
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('files', $data ?? [], null);
        $this->setIfExists('storefront', $data ?? [], null);
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

        if ($this->container['idTicket'] === null) {
            $invalidProperties[] = "'idTicket' can't be null";
        }
        if (!preg_match("/^001\\d+$/", $this->container['idTicket'])) {
            $invalidProperties[] = "invalid value for 'idTicket', must be conform to the pattern /^001\\d+$/.";
        }

        if ($this->container['idsOrderUnits'] === null) {
            $invalidProperties[] = "'idsOrderUnits' can't be null";
        }
        if ($this->container['idBuyer'] === null) {
            $invalidProperties[] = "'idBuyer' can't be null";
        }
        if ($this->container['tsCreatedIso'] === null) {
            $invalidProperties[] = "'tsCreatedIso' can't be null";
        }
        if ($this->container['tsUpdatedIso'] === null) {
            $invalidProperties[] = "'tsUpdatedIso' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['openReason'] === null) {
            $invalidProperties[] = "'openReason' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        if ($this->container['isSellerResponsible'] === null) {
            $invalidProperties[] = "'isSellerResponsible' can't be null";
        }
        if ($this->container['fulfillmentType'] === null) {
            $invalidProperties[] = "'fulfillmentType' can't be null";
        }
        if ($this->container['messages'] === null) {
            $invalidProperties[] = "'messages' can't be null";
        }
        if ($this->container['orderUnits'] === null) {
            $invalidProperties[] = "'orderUnits' can't be null";
        }
        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files' can't be null";
        }
        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
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
     * Gets idTicket
     *
     * @return string
     */
    public function getIdTicket()
    {
        return $this->container['idTicket'];
    }

    /**
     * Sets idTicket
     *
     * @param string $idTicket Unique id of the ticket.
     *
     * @return self
     */
    public function setIdTicket($idTicket)
    {
        if (is_null($idTicket)) {
            throw new \InvalidArgumentException('non-nullable idTicket cannot be null');
        }

        if ((!preg_match("/^001\\d+$/", ObjectSerializer::toString($idTicket)))) {
            throw new \InvalidArgumentException("invalid value for \$idTicket when calling TicketWithEmbedded., must conform to the pattern /^001\\d+$/.");
        }

        $this->container['idTicket'] = $idTicket;

        return $this;
    }

    /**
     * Gets idsOrderUnits
     *
     * @return int[]
     */
    public function getIdsOrderUnits()
    {
        return $this->container['idsOrderUnits'];
    }

    /**
     * Sets idsOrderUnits
     *
     * @param int[] $idsOrderUnits The list of order units IDs
     *
     * @return self
     */
    public function setIdsOrderUnits($idsOrderUnits)
    {
        if (is_null($idsOrderUnits)) {
            throw new \InvalidArgumentException('non-nullable idsOrderUnits cannot be null');
        }
        $this->container['idsOrderUnits'] = $idsOrderUnits;

        return $this;
    }

    /**
     * Gets idBuyer
     *
     * @return int
     */
    public function getIdBuyer()
    {
        return $this->container['idBuyer'];
    }

    /**
     * Sets idBuyer
     *
     * @param int $idBuyer idBuyer
     *
     * @return self
     */
    public function setIdBuyer($idBuyer)
    {
        if (is_null($idBuyer)) {
            array_push($this->openAPINullablesSetToNull, 'idBuyer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('idBuyer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['idBuyer'] = $idBuyer;

        return $this;
    }

    /**
     * Gets tsCreatedIso
     *
     * @return \DateTime
     */
    public function getTsCreatedIso()
    {
        return $this->container['tsCreatedIso'];
    }

    /**
     * Sets tsCreatedIso
     *
     * @param \DateTime $tsCreatedIso Creation date of the ticket in iso 8601
     *
     * @return self
     */
    public function setTsCreatedIso($tsCreatedIso)
    {
        if (is_null($tsCreatedIso)) {
            throw new \InvalidArgumentException('non-nullable tsCreatedIso cannot be null');
        }
        $this->container['tsCreatedIso'] = $tsCreatedIso;

        return $this;
    }

    /**
     * Gets tsUpdatedIso
     *
     * @return \DateTime
     */
    public function getTsUpdatedIso()
    {
        return $this->container['tsUpdatedIso'];
    }

    /**
     * Sets tsUpdatedIso
     *
     * @param \DateTime $tsUpdatedIso Last update on the ticket in iso 8601
     *
     * @return self
     */
    public function setTsUpdatedIso($tsUpdatedIso)
    {
        if (is_null($tsUpdatedIso)) {
            throw new \InvalidArgumentException('non-nullable tsUpdatedIso cannot be null');
        }
        $this->container['tsUpdatedIso'] = $tsUpdatedIso;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Mirakl\Model\TicketStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Mirakl\Model\TicketStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets openReason
     *
     * @return \OpenAPI\Client\Mirakl\Model\TicketReason
     */
    public function getOpenReason()
    {
        return $this->container['openReason'];
    }

    /**
     * Sets openReason
     *
     * @param \OpenAPI\Client\Mirakl\Model\TicketReason $openReason openReason
     *
     * @return self
     */
    public function setOpenReason($openReason)
    {
        if (is_null($openReason)) {
            throw new \InvalidArgumentException('non-nullable openReason cannot be null');
        }
        $this->container['openReason'] = $openReason;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return \OpenAPI\Client\Mirakl\Model\TicketTopic
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param \OpenAPI\Client\Mirakl\Model\TicketTopic $topic The topic of the ticket
     *
     * @return self
     */
    public function setTopic($topic)
    {
        if (is_null($topic)) {
            array_push($this->openAPINullablesSetToNull, 'topic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('topic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets isSellerResponsible
     *
     * @return bool
     */
    public function getIsSellerResponsible()
    {
        return $this->container['isSellerResponsible'];
    }

    /**
     * Sets isSellerResponsible
     *
     * @param bool $isSellerResponsible An indicator, whether the seller needs to take action
     *
     * @return self
     */
    public function setIsSellerResponsible($isSellerResponsible)
    {
        if (is_null($isSellerResponsible)) {
            throw new \InvalidArgumentException('non-nullable isSellerResponsible cannot be null');
        }
        $this->container['isSellerResponsible'] = $isSellerResponsible;

        return $this;
    }

    /**
     * Gets fulfillmentType
     *
     * @return \OpenAPI\Client\Mirakl\Model\FulfillmentType
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param \OpenAPI\Client\Mirakl\Model\FulfillmentType $fulfillmentType fulfillmentType
     *
     * @return self
     */
    public function setFulfillmentType($fulfillmentType)
    {
        if (is_null($fulfillmentType)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentType cannot be null');
        }
        $this->container['fulfillmentType'] = $fulfillmentType;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \OpenAPI\Client\Mirakl\Model\TicketMessage[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \OpenAPI\Client\Mirakl\Model\TicketMessage[] $messages A list of the tickets' messages
     *
     * @return self
     */
    public function setMessages($messages)
    {
        if (is_null($messages)) {
            throw new \InvalidArgumentException('non-nullable messages cannot be null');
        }
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets orderUnits
     *
     * @return \OpenAPI\Client\Mirakl\Model\OrderUnit[]
     */
    public function getOrderUnits()
    {
        return $this->container['orderUnits'];
    }

    /**
     * Sets orderUnits
     *
     * @param \OpenAPI\Client\Mirakl\Model\OrderUnit[] $orderUnits A list of the order units linked to the ticket
     *
     * @return self
     */
    public function setOrderUnits($orderUnits)
    {
        if (is_null($orderUnits)) {
            throw new \InvalidArgumentException('non-nullable orderUnits cannot be null');
        }
        $this->container['orderUnits'] = $orderUnits;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \OpenAPI\Client\Mirakl\Model\Buyer
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \OpenAPI\Client\Mirakl\Model\Buyer $buyer The buyer of the ticket
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            array_push($this->openAPINullablesSetToNull, 'buyer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buyer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\Client\Mirakl\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\Client\Mirakl\Model\Product $product The product related to the ticket
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            array_push($this->openAPINullablesSetToNull, 'product');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \OpenAPI\Client\Mirakl\Model\TicketFile[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \OpenAPI\Client\Mirakl\Model\TicketFile[] $files Uploaded files inside the ticket
     *
     * @return self
     */
    public function setFiles($files)
    {
        if (is_null($files)) {
            throw new \InvalidArgumentException('non-nullable files cannot be null');
        }
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets storefront
     *
     * @return string
     */
    public function getStorefront()
    {
        return $this->container['storefront'];
    }

    /**
     * Sets storefront
     *
     * @param string $storefront Current storefront (country)
     *
     * @return self
     */
    public function setStorefront($storefront)
    {
        if (is_null($storefront)) {
            throw new \InvalidArgumentException('non-nullable storefront cannot be null');
        }
        $this->container['storefront'] = $storefront;

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


