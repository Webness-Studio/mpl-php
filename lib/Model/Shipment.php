<?php
/**
 * Shipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MPL API
 *
 * <div style='width: 100%;margin: 0px auto;'>      <div style='float: left; width:47%'>          <h1>MPL API</h1>          <h2> - címiratok nyomtatása, riportok lekérése, fixpontok lekérdezése </h2>          <div>&nbsp;</div>          <p>A végpontok működését leíró dokumentációt lentebb találja.</p>          <p>A fejlesztéshez szükséges további információkat, így az integrációs javaslatot, technikai leírást (token kérés), példa json-öket, stb., a fenti Dokumentáció menüre kattintva érheti el.</p>          <p>A lentebbi dokumentációban a</p>          <ul>              <li>csak belföldi alapszolgáltatáshoz használható elemeket a leírás elején szereplő ►DOM◄,</li>              <li>csak nemzetközi vonatkozásban használható elemeket a leírás elején szereplő ►INT◄</li>          </ul>          <p>szöveg jelzi.</p>          <p>Ahol nem szerepel semmilyen jelölés, azok az elemek mindkét vonatkozásban használhatók.</p>      </div>      <div style='float:right; width:47%'>          <h1>MPL API</h1>          <h2> - query of fixed points, printing of address labels, request for reports </h2>          <div>&nbsp;</div>          <p>Specification describing the operation of endpoints can be found below.</p>          <p>Any further information necessary for the development, such as the integration suggestion, technical description (token request), example JSONs, etc., are available by clicking on the Documentation menu above.</p>          <p>In the specification below,</p>          <ul>              <li>the elements that may be used only for domestic basic service are indicated by the lettering ►DOM◄,</li>              <li>the elements that may be used only in international regard are indicated by the lettering ►INT◄</li>          </ul>          <p>at the beginning of the description.</p>          <p>Where no indication is provided, those elements can be used in both cases.</p>      </div>  </div>  <div id=\"mplapi_descriptionContainer_bottom\"></div><div style='clear: both;'>    ### Az API a következő URL-eken érhető el: / This API can be accessed at the following URLs: ###  <div><table><tr><td><b>Környezet / Environment</b></td><td><b>API URL</b></td><td><b>OAuth2 Token URL</b></td></tr><tr><td>Sandbox</td><td>https://sandbox.api.posta.hu/v2/mplapi</td><td>https://sandbox.api.posta.hu/oauth2/token</td></tr><tr><td>Production</td><td>https://core.api.posta.hu/v2/mplapi</td><td>https://core.api.posta.hu/oauth2/token</td></tr></table>  Az API ezen az oldalon a Sandbox környezetben tesztelhető. / You can test the API on this page in the Sandbox environment.
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @description Szállítmány.   /   Consignment
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Shipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sender' => '\Swagger\Client\Model\Sender',
        'non_utf8_sender' => '\Swagger\Client\Model\NonUTF8Sender',
        'shipment_date' => '\DateTime',
        'order_id' => 'string',
        'tag' => 'string',
        'tracking_number' => 'string',
        'item' => '\Swagger\Client\Model\ShipmentItem[]',
        'recipient' => '\Swagger\Client\Model\Recipient',
        'non_utf8_recipient' => '\Swagger\Client\Model\NonUTF8Recipient',
        'payment_mode' => 'string',
        'package_retention' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sender' => null,
        'non_utf8_sender' => null,
        'shipment_date' => 'date',
        'order_id' => null,
        'tag' => null,
        'tracking_number' => null,
        'item' => null,
        'recipient' => null,
        'non_utf8_recipient' => null,
        'payment_mode' => null,
        'package_retention' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sender' => 'sender',
        'non_utf8_sender' => 'nonUTF8Sender',
        'shipment_date' => 'shipmentDate',
        'order_id' => 'orderId',
        'tag' => 'tag',
        'tracking_number' => 'trackingNumber',
        'item' => 'item',
        'recipient' => 'recipient',
        'non_utf8_recipient' => 'nonUTF8Recipient',
        'payment_mode' => 'paymentMode',
        'package_retention' => 'packageRetention'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sender' => 'setSender',
        'non_utf8_sender' => 'setNonUtf8Sender',
        'shipment_date' => 'setShipmentDate',
        'order_id' => 'setOrderId',
        'tag' => 'setTag',
        'tracking_number' => 'setTrackingNumber',
        'item' => 'setItem',
        'recipient' => 'setRecipient',
        'non_utf8_recipient' => 'setNonUtf8Recipient',
        'payment_mode' => 'setPaymentMode',
        'package_retention' => 'setPackageRetention'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sender' => 'getSender',
        'non_utf8_sender' => 'getNonUtf8Sender',
        'shipment_date' => 'getShipmentDate',
        'order_id' => 'getOrderId',
        'tag' => 'getTag',
        'tracking_number' => 'getTrackingNumber',
        'item' => 'getItem',
        'recipient' => 'getRecipient',
        'non_utf8_recipient' => 'getNonUtf8Recipient',
        'payment_mode' => 'getPaymentMode',
        'package_retention' => 'getPackageRetention'
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
        return self::$swaggerModelName;
    }

    const PAYMENT_MODE_AT = 'UV_AT';
    const PAYMENT_MODE_KP = 'UV_KP';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentModeAllowableValues()
    {
        return [
            self::PAYMENT_MODE_AT,
            self::PAYMENT_MODE_KP,
        ];
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['non_utf8_sender'] = isset($data['non_utf8_sender']) ? $data['non_utf8_sender'] : null;
        $this->container['shipment_date'] = isset($data['shipment_date']) ? $data['shipment_date'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['non_utf8_recipient'] = isset($data['non_utf8_recipient']) ? $data['non_utf8_recipient'] : null;
        $this->container['payment_mode'] = isset($data['payment_mode']) ? $data['payment_mode'] : null;
        $this->container['package_retention'] = isset($data['package_retention']) ? $data['package_retention'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($this->container['payment_mode']) && !in_array($this->container['payment_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets sender
     *
     * @return \Swagger\Client\Model\Sender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Swagger\Client\Model\Sender $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets non_utf8_sender
     *
     * @return \Swagger\Client\Model\NonUTF8Sender
     */
    public function getNonUtf8Sender()
    {
        return $this->container['non_utf8_sender'];
    }

    /**
     * Sets non_utf8_sender
     *
     * @param \Swagger\Client\Model\NonUTF8Sender $non_utf8_sender non_utf8_sender
     *
     * @return $this
     */
    public function setNonUtf8Sender($non_utf8_sender)
    {
        $this->container['non_utf8_sender'] = $non_utf8_sender;

        return $this;
    }

    /**
     * Gets shipment_date
     *
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param \DateTime $shipment_date A tényleges (fizikai) postára adás tervezett ideje yyyy-MM-dd formátumban   /   Planned time of actual (physical) posting in dd-MM-yyyy format format: date-time
     *
     * @return $this
     */
    public function setShipmentDate($shipment_date)
    {
        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id A webáruház által használt rendelésazonosító.   /   Order ID used by the webshop.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag A szállítmányhoz rendelt címke.   /   Label assigned to the consignment.
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number A posta által kiosztott azonosító.   /   The identifier assigned by Magyar Posta.
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \Swagger\Client\Model\ShipmentItem[]
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Swagger\Client\Model\ShipmentItem[] $item A szállítmányban szereplő csomagok felsorolása.   /   List of parcels included in the consignment.
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \Swagger\Client\Model\Recipient
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \Swagger\Client\Model\Recipient $recipient recipient
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets non_utf8_recipient
     *
     * @return \Swagger\Client\Model\NonUTF8Recipient
     */
    public function getNonUtf8Recipient()
    {
        return $this->container['non_utf8_recipient'];
    }

    /**
     * Sets non_utf8_recipient
     *
     * @param \Swagger\Client\Model\NonUTF8Recipient $non_utf8_recipient non_utf8_recipient
     *
     * @return $this
     */
    public function setNonUtf8Recipient($non_utf8_recipient)
    {
        $this->container['non_utf8_recipient'] = $non_utf8_recipient;

        return $this;
    }

    /**
     * Gets payment_mode
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->container['payment_mode'];
    }

    /**
     * Sets payment_mode
     *
     * @param string $payment_mode Azt adja meg, hogy az MPL hogyan fizesse ki az utánvételes csomagok után beszedett díjat a megrendelő számára.   /   Specifies how MPL should pay the customer the fee collected for cash on delivery parcels.
     *
     * @return $this
     */
    public function setPaymentMode($payment_mode)
    {
        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($payment_mode) && !in_array($payment_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_mode'] = $payment_mode;

        return $this;
    }

    /**
     * Gets package_retention
     *
     * @return int
     */
    public function getPackageRetention()
    {
        return $this->container['package_retention'];
    }

    /**
     * Sets package_retention
     *
     * @param int $package_retention A csomag őrzési ideje munkanapban: 0, 5 vagy 10.   /   Retention period of the parcel in business days: 0, 5 or 10.
     *
     * @return $this
     */
    public function setPackageRetention($package_retention)
    {
        $this->container['package_retention'] = $package_retention;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
