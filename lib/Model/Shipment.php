<?php
/**
 * Shipment
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebnessStudio\MPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MPL API
 *
 * <div style='width: 100%;margin: 0px auto;'>      <div style='float: left; width:47%'>          <h1>MPL API</h1>          <h2> - címiratok nyomtatása, riportok lekérése, fixpontok lekérdezése </h2>          <div>&nbsp;</div>          <p>A végpontok működését leíró dokumentációt lentebb találja.</p>          <p>A fejlesztéshez szükséges további információkat, így az integrációs javaslatot, technikai leírást (token kérés), példa json-öket, stb., a fenti Dokumentáció menüre kattintva érheti el.</p>          <p>A lentebbi dokumentációban a</p>          <ul>              <li>csak belföldi alapszolgáltatáshoz használható elemeket a leírás elején szereplő ►DOM◄,</li>              <li>csak nemzetközi vonatkozásban használható elemeket a leírás elején szereplő ►INT◄</li>          </ul>          <p>szöveg jelzi.</p>          <p>Ahol nem szerepel semmilyen jelölés, azok az elemek mindkét vonatkozásban használhatók.</p>      </div>      <div style='float:right; width:47%'>          <h1>MPL API</h1>          <h2> - query of fixed points, printing of address labels, request for reports </h2>          <div>&nbsp;</div>          <p>Specification describing the operation of endpoints can be found below.</p>          <p>Any further information necessary for the development, such as the integration suggestion, technical description (token request), example JSONs, etc., are available by clicking on the Documentation menu above.</p>          <p>In the specification below,</p>          <ul>              <li>the elements that may be used only for domestic basic service are indicated by the lettering ►DOM◄,</li>              <li>the elements that may be used only in international regard are indicated by the lettering ►INT◄</li>          </ul>          <p>at the beginning of the description.</p>          <p>Where no indication is provided, those elements can be used in both cases.</p>      </div>  </div>  <div id=\"mplapi_descriptionContainer_bottom\"></div><div style='clear: both;'>    ### Az API a következő URL-eken érhető el: / This API can be accessed at the following URLs: ###  <div><table><tr><td><b>Környezet / Environment</b></td><td><b>API URL</b></td><td><b>OAuth2 Token URL</b></td></tr><tr><td>Sandbox</td><td>https://sandbox.api.posta.hu/v2/mplapi</td><td>https://sandbox.api.posta.hu/oauth2/token</td></tr><tr><td>Production</td><td>https://core.api.posta.hu/v2/mplapi</td><td>https://core.api.posta.hu/oauth2/token</td></tr></table>  Az API ezen az oldalon a Sandbox környezetben tesztelhető. / You can test the API on this page in the Sandbox environment.
 *
 * The version of the OpenAPI document: v2
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WebnessStudio\MPL\Model;

use \ArrayAccess;
use \WebnessStudio\MPL\ObjectSerializer;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @description Szállítmány.   /   Consignment
 * @package  WebnessStudio\MPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sender' => '\WebnessStudio\MPL\Model\Sender',
        'non_utf8_sender' => '\WebnessStudio\MPL\Model\NonUTF8Sender',
        'shipment_date' => '\DateTime',
        'order_id' => 'string',
        'tag' => 'string',
        'tracking_number' => 'string',
        'item' => '\WebnessStudio\MPL\Model\ShipmentItem[]',
        'recipient' => '\WebnessStudio\MPL\Model\Recipient',
        'non_utf8_recipient' => '\WebnessStudio\MPL\Model\NonUTF8Recipient',
        'payment_mode' => 'string',
        'package_retention' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sender' => false,
        'non_utf8_sender' => false,
        'shipment_date' => true,
        'order_id' => true,
        'tag' => true,
        'tracking_number' => true,
        'item' => true,
        'recipient' => false,
        'non_utf8_recipient' => false,
        'payment_mode' => true,
        'package_retention' => true
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
        return self::$openAPIModelName;
    }

    public const PAYMENT_MODE_AT = 'UV_AT';
    public const PAYMENT_MODE_KP = 'UV_KP';

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
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('non_utf8_sender', $data ?? [], null);
        $this->setIfExists('shipment_date', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('non_utf8_recipient', $data ?? [], null);
        $this->setIfExists('payment_mode', $data ?? [], null);
        $this->setIfExists('package_retention', $data ?? [], null);
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

        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($this->container['payment_mode']) && !in_array($this->container['payment_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_mode', must be one of '%s'",
                $this->container['payment_mode'],
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
     * @return \WebnessStudio\MPL\Model\Sender|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \WebnessStudio\MPL\Model\Sender|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets non_utf8_sender
     *
     * @return \WebnessStudio\MPL\Model\NonUTF8Sender|null
     */
    public function getNonUtf8Sender()
    {
        return $this->container['non_utf8_sender'];
    }

    /**
     * Sets non_utf8_sender
     *
     * @param \WebnessStudio\MPL\Model\NonUTF8Sender|null $non_utf8_sender non_utf8_sender
     *
     * @return self
     */
    public function setNonUtf8Sender($non_utf8_sender)
    {
        if (is_null($non_utf8_sender)) {
            throw new \InvalidArgumentException('non-nullable non_utf8_sender cannot be null');
        }
        $this->container['non_utf8_sender'] = $non_utf8_sender;

        return $this;
    }

    /**
     * Gets shipment_date
     *
     * @return \DateTime|null
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param \DateTime|null $shipment_date A tényleges (fizikai) postára adás tervezett ideje yyyy-MM-dd formátumban   /   Planned time of actual (physical) posting in dd-MM-yyyy format format: date-time
     *
     * @return self
     */
    public function setShipmentDate($shipment_date)
    {
        if (is_null($shipment_date)) {
            array_push($this->openAPINullablesSetToNull, 'shipment_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipment_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id A webáruház által használt rendelésazonosító.   /   Order ID used by the webshop.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            array_push($this->openAPINullablesSetToNull, 'order_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag A szállítmányhoz rendelt címke.   /   Label assigned to the consignment.
     *
     * @return self
     */
    public function setTag($tag)
    {
        if (is_null($tag)) {
            array_push($this->openAPINullablesSetToNull, 'tag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number A posta által kiosztott azonosító.   /   The identifier assigned by Magyar Posta.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \WebnessStudio\MPL\Model\ShipmentItem[]|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \WebnessStudio\MPL\Model\ShipmentItem[]|null $item A szállítmányban szereplő csomagok felsorolása.   /   List of parcels included in the consignment.
     *
     * @return self
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            array_push($this->openAPINullablesSetToNull, 'item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \WebnessStudio\MPL\Model\Recipient|null
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \WebnessStudio\MPL\Model\Recipient|null $recipient recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (is_null($recipient)) {
            throw new \InvalidArgumentException('non-nullable recipient cannot be null');
        }
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets non_utf8_recipient
     *
     * @return \WebnessStudio\MPL\Model\NonUTF8Recipient|null
     */
    public function getNonUtf8Recipient()
    {
        return $this->container['non_utf8_recipient'];
    }

    /**
     * Sets non_utf8_recipient
     *
     * @param \WebnessStudio\MPL\Model\NonUTF8Recipient|null $non_utf8_recipient non_utf8_recipient
     *
     * @return self
     */
    public function setNonUtf8Recipient($non_utf8_recipient)
    {
        if (is_null($non_utf8_recipient)) {
            throw new \InvalidArgumentException('non-nullable non_utf8_recipient cannot be null');
        }
        $this->container['non_utf8_recipient'] = $non_utf8_recipient;

        return $this;
    }

    /**
     * Gets payment_mode
     *
     * @return string|null
     */
    public function getPaymentMode()
    {
        return $this->container['payment_mode'];
    }

    /**
     * Sets payment_mode
     *
     * @param string|null $payment_mode Azt adja meg, hogy az MPL hogyan fizesse ki az utánvételes csomagok után beszedett díjat a megrendelő számára.   /   Specifies how MPL should pay the customer the fee collected for cash on delivery parcels.
     *
     * @return self
     */
    public function setPaymentMode($payment_mode)
    {
        if (is_null($payment_mode)) {
            array_push($this->openAPINullablesSetToNull, 'payment_mode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_mode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($payment_mode) && !in_array($payment_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_mode', must be one of '%s'",
                    $payment_mode,
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
     * @return int|null
     */
    public function getPackageRetention()
    {
        return $this->container['package_retention'];
    }

    /**
     * Sets package_retention
     *
     * @param int|null $package_retention A csomag őrzési ideje munkanapban: 0, 5 vagy 10.   /   Retention period of the parcel in business days: 0, 5 or 10.
     *
     * @return self
     */
    public function setPackageRetention($package_retention)
    {
        if (is_null($package_retention)) {
            array_push($this->openAPINullablesSetToNull, 'package_retention');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('package_retention', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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


