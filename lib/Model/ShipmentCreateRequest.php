<?php
/**
 * ShipmentCreateRequest
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
 * ShipmentCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Szállítmány létrehozásához szükséges adatok   /   Data required to create a consignment
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'developer' => 'string',
        'sender' => '\Swagger\Client\Model\Sender',
        'non_utf8_sender' => '\Swagger\Client\Model\NonUTF8Sender',
        'shipment_date' => '\DateTime',
        'order_id' => 'string',
        'webshop_id' => 'string',
        'label_type' => 'string',
        'label_format' => 'string',
        'tag' => 'string',
        'group_together' => 'bool',
        'delivery_time' => 'string',
        'delivery_date' => '\DateTime',
        'item' => '\Swagger\Client\Model\Item[]',
        'recipient' => '\Swagger\Client\Model\Recipient',
        'non_utf8_recipient' => '\Swagger\Client\Model\NonUTF8Recipient',
        'payment_mode' => 'string',
        'package_retention' => 'int',
        'print_recipient_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'developer' => null,
        'sender' => null,
        'non_utf8_sender' => null,
        'shipment_date' => 'date',
        'order_id' => null,
        'webshop_id' => null,
        'label_type' => null,
        'label_format' => null,
        'tag' => null,
        'group_together' => null,
        'delivery_time' => null,
        'delivery_date' => 'date',
        'item' => null,
        'recipient' => null,
        'non_utf8_recipient' => null,
        'payment_mode' => null,
        'package_retention' => 'int32',
        'print_recipient_data' => null
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
        'developer' => 'developer',
        'sender' => 'sender',
        'non_utf8_sender' => 'nonUTF8Sender',
        'shipment_date' => 'shipmentDate',
        'order_id' => 'orderId',
        'webshop_id' => 'webshopId',
        'label_type' => 'labelType',
        'label_format' => 'labelFormat',
        'tag' => 'tag',
        'group_together' => 'groupTogether',
        'delivery_time' => 'deliveryTime',
        'delivery_date' => 'deliveryDate',
        'item' => 'item',
        'recipient' => 'recipient',
        'non_utf8_recipient' => 'nonUTF8Recipient',
        'payment_mode' => 'paymentMode',
        'package_retention' => 'packageRetention',
        'print_recipient_data' => 'printRecipientData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'developer' => 'setDeveloper',
        'sender' => 'setSender',
        'non_utf8_sender' => 'setNonUtf8Sender',
        'shipment_date' => 'setShipmentDate',
        'order_id' => 'setOrderId',
        'webshop_id' => 'setWebshopId',
        'label_type' => 'setLabelType',
        'label_format' => 'setLabelFormat',
        'tag' => 'setTag',
        'group_together' => 'setGroupTogether',
        'delivery_time' => 'setDeliveryTime',
        'delivery_date' => 'setDeliveryDate',
        'item' => 'setItem',
        'recipient' => 'setRecipient',
        'non_utf8_recipient' => 'setNonUtf8Recipient',
        'payment_mode' => 'setPaymentMode',
        'package_retention' => 'setPackageRetention',
        'print_recipient_data' => 'setPrintRecipientData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'developer' => 'getDeveloper',
        'sender' => 'getSender',
        'non_utf8_sender' => 'getNonUtf8Sender',
        'shipment_date' => 'getShipmentDate',
        'order_id' => 'getOrderId',
        'webshop_id' => 'getWebshopId',
        'label_type' => 'getLabelType',
        'label_format' => 'getLabelFormat',
        'tag' => 'getTag',
        'group_together' => 'getGroupTogether',
        'delivery_time' => 'getDeliveryTime',
        'delivery_date' => 'getDeliveryDate',
        'item' => 'getItem',
        'recipient' => 'getRecipient',
        'non_utf8_recipient' => 'getNonUtf8Recipient',
        'payment_mode' => 'getPaymentMode',
        'package_retention' => 'getPackageRetention',
        'print_recipient_data' => 'getPrintRecipientData'
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

    const LABEL_TYPE_A4 = 'A4';
    const LABEL_TYPE_A5 = 'A5';
    const LABEL_TYPE_A5IN_A4 = 'A5inA4';
    const LABEL_TYPE_A5_E = 'A5E';
    const LABEL_TYPE_A5_E_EXTRA = 'A5E_EXTRA';
    const LABEL_TYPE_A5_E_STAND = 'A5E_STAND';
    const LABEL_TYPE_A6 = 'A6';
    const LABEL_TYPE_A6IN_A4 = 'A6inA4';
    const LABEL_TYPE_A4_ONE = 'A4ONE';
    const LABEL_FORMAT_PDF = 'PDF';
    const LABEL_FORMAT_ZPL = 'ZPL';
    const DELIVERY_TIME_EARLY_MORNING = 'earlyMorning';
    const DELIVERY_TIME_MORNING = 'morning';
    const DELIVERY_TIME_AFTERNOON = 'afternoon';
    const DELIVERY_TIME_EVENING = 'evening';
    const PAYMENT_MODE_AT = 'UV_AT';
    const PAYMENT_MODE_KP = 'UV_KP';
    const PRINT_RECIPIENT_DATA_PRINTALL = 'PRINTALL';
    const PRINT_RECIPIENT_DATA_PRINTPHONENUMBER = 'PRINTPHONENUMBER';
    const PRINT_RECIPIENT_DATA_PRINTEMAIL = 'PRINTEMAIL';
    const PRINT_RECIPIENT_DATA_PRINTNOTHING = 'PRINTNOTHING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelTypeAllowableValues()
    {
        return [
            self::LABEL_TYPE_A4,
            self::LABEL_TYPE_A5,
            self::LABEL_TYPE_A5IN_A4,
            self::LABEL_TYPE_A5_E,
            self::LABEL_TYPE_A5_E_EXTRA,
            self::LABEL_TYPE_A5_E_STAND,
            self::LABEL_TYPE_A6,
            self::LABEL_TYPE_A6IN_A4,
            self::LABEL_TYPE_A4_ONE,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelFormatAllowableValues()
    {
        return [
            self::LABEL_FORMAT_PDF,
            self::LABEL_FORMAT_ZPL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryTimeAllowableValues()
    {
        return [
            self::DELIVERY_TIME_EARLY_MORNING,
            self::DELIVERY_TIME_MORNING,
            self::DELIVERY_TIME_AFTERNOON,
            self::DELIVERY_TIME_EVENING,
        ];
    }
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrintRecipientDataAllowableValues()
    {
        return [
            self::PRINT_RECIPIENT_DATA_PRINTALL
            self::PRINT_RECIPIENT_DATA_PRINTPHONENUMBER
            self::PRINT_RECIPIENT_DATA_PRINTEMAIL
            self::PRINT_RECIPIENT_DATA_PRINTNOTHING
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
        $this->container['developer'] = isset($data['developer']) ? $data['developer'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['non_utf8_sender'] = isset($data['non_utf8_sender']) ? $data['non_utf8_sender'] : null;
        $this->container['shipment_date'] = isset($data['shipment_date']) ? $data['shipment_date'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['webshop_id'] = isset($data['webshop_id']) ? $data['webshop_id'] : null;
        $this->container['label_type'] = isset($data['label_type']) ? $data['label_type'] : null;
        $this->container['label_format'] = isset($data['label_format']) ? $data['label_format'] : 'PDF';
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['group_together'] = isset($data['group_together']) ? $data['group_together'] : null;
        $this->container['delivery_time'] = isset($data['delivery_time']) ? $data['delivery_time'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['non_utf8_recipient'] = isset($data['non_utf8_recipient']) ? $data['non_utf8_recipient'] : null;
        $this->container['payment_mode'] = isset($data['payment_mode']) ? $data['payment_mode'] : null;
        $this->container['package_retention'] = isset($data['package_retention']) ? $data['package_retention'] : null;
        $this->container['print_recipient_data'] = isset($data['print_recipient_data']) ? $data['print_recipient_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['developer'] === null) {
            $invalidProperties[] = "'developer' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['webshop_id'] === null) {
            $invalidProperties[] = "'webshop_id' can't be null";
        }
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($this->container['label_type']) && !in_array($this->container['label_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($this->container['label_format']) && !in_array($this->container['label_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliveryTimeAllowableValues();
        if (!is_null($this->container['delivery_time']) && !in_array($this->container['delivery_time'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery_time', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($this->container['payment_mode']) && !in_array($this->container['payment_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPrintRecipientDataAllowableValues();
        if (!is_null($this->container['print_recipient_data']) && !in_array($this->container['print_recipient_data'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'print_recipient_data', must be one of '%s'",
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
     * Gets developer
     *
     * @return string
     */
    public function getDeveloper()
    {
        return $this->container['developer'];
    }

    /**
     * Sets developer
     *
     * @param string $developer Az API-t hívó rendszer neve.   /   The name of the system calling API.
     *
     * @return $this
     */
    public function setDeveloper($developer)
    {
        $this->container['developer'] = $developer;

        return $this;
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
     * @param \DateTime $shipment_date A tényleges (fizikai) postára adás tervezett ideje. Értéke legfeljebb 6 hónappal lehet később az aktuális napnál.   /   Planned time of actual (physical) posting. Its value can be up to 6 months later than the current day. format: date-time
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
     * @param string $order_id A webáruház által használt rendelésazonosító. A kérés/válasz ciklus után ezt az adatot az API-ban tároljuk, így a jegyzékzárás előtti lekérdezéseknél alapul szolgálhat az egyes szállítmányok beazonosításához. De jegyzékzárás után ez az adat már nem kíséri a csomagot az életútja során (pl. nyomkövetésnél).   /   The order identification number used by the online store. After the request/response cycle, this data is stored in the API, thus it may serve as a basis for the queries before closing the list to identify shipments. However, after closing the list, this data does not accompany the mail item in its life path (e.g. at tracking).
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets webshop_id
     *
     * @return string
     */
    public function getWebshopId()
    {
        return $this->container['webshop_id'];
    }

    /**
     * Sets webshop_id
     *
     * @param string $webshop_id Az adott szállítmány azonosítója a kérés/válasz párban. A kérés/válasz ciklus után ezt az adatot már nem tároljuk, így a további API-hívásoknál már nem szolgál alapul, és jegyzékzárás után sem kíséri a csomagot az életútja során (pl. nyomkövetésnél). Mivel egy kérésben több szállítmány is beküldhető, ezért a szállítmányok mellé megadott azonosítóval lehet \"párosítani\" a kapott választ. Értékének ezért egy híváson belül kell egyedninek lennie, a legegyszerűbb egy 0-től kezdődő sorszám, de akár használható a webshop által kiosztott megrendelésazonosító is, ha megfelel a formai követelményeknek   /   The ID of the given shipment in the request/response pair. After the request/response cycle, we do not store this data anymore, thus it is no longer used as a basis for further API queries, and it does not accompany the mail items in their life path after the closing of the list (e.g. at tracking). Because multiple consignments can be submitted in one request, the response can be ‘paired’ with the ID provided for the consignments. Its value must therefore be unique within a call, the simplest being a serial number starting from 0, but you can even use the order ID assigned by the webshop if it meets the formal requirements.
     *
     * @return $this
     */
    public function setWebshopId($webshop_id)
    {
        $this->container['webshop_id'] = $webshop_id;

        return $this;
    }

    /**
     * Gets label_type
     *
     * @return string
     */
    public function getLabelType()
    {
        return $this->container['label_type'];
    }

    /**
     * Sets label_type
     *
     * @param string $label_type A címirat elrendezése (mérete, tájolása). Részletes magyarázat a Dokumentáció menüben olvasható. Amennyiben nem érkezik ilyen paraméter, úgy a válasz nem tartalmaz majd címiratot. A címirat később is lekérhető, GET hívással.   /   Layout of postal address label.Detailed explanations can be found in the Documentation menu.If this parameter is not specified, then no manifest will be included in the response. The label can be generated later by a GET request.
     *
     * @return $this
     */
    public function setLabelType($label_type)
    {
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($label_type) && !in_array($label_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'label_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_type'] = $label_type;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return string
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param string $label_format A címirat fájl formátuma. Több címiratot tartalmazó PDF érdekében a szállítmányok beküldését követőn egy külön GET hívással kell címkét kérni.   /   File format of the label. To create a PDF containing multiple labels, an additional GET request need to be sent after the shipments have been submitted.
     *
     * @return $this
     */
    public function setLabelFormat($label_format)
    {
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($label_format) && !in_array($label_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'label_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_format'] = $label_format;

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
     * @param string $tag A szállítmányok opcionálisan megjelölhetők. A kérés/válasz ciklus után ezt a jelölőt az API-ban tároljuk, így a jegyzékzárás előtti lekérdezéseknél vagy a címiratok csoportos nyomtatásánál alapul szolgálhat a szállítmányok egy csoportjára szűrésére. De jegyzékzárás után ez az adat már nem kíséri a csomagot az életútja során (pl. nyomkövetésnél).   /   Shipments can be optionally marked. After the request/response cycle, this marking is stored in the API, thus it may serve as a basis for the queries before closing the list or for the group printing of address labels to filter out a particular group of shipments. However, after closing the list, these data do not accompany the mail item in its life path (e.g. at tracking).
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets group_together
     *
     * @return bool
     */
    public function getGroupTogether()
    {
        return $this->container['group_together'];
    }

    /**
     * Sets group_together
     *
     * @param bool $group_together ►DOM◄ A beküldött szállítmány csomagjai (item) együtt kézbesítendők-e? Díjmentes szolgáltatás.   /   May the mail items of the shipment sent in be delivered together? Free of charge service.
     *
     * @return $this
     */
    public function setGroupTogether($group_together)
    {
        $this->container['group_together'] = $group_together;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param string $delivery_time A kívánt kézbesítési idő. Csak az időablak (K_IDA) többletszolgáltatás esetén szükséges megadni.   /   The required delivery time. It must be provided only in case of the additional service of time-window delivery (K_IDA).
     *
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $allowedValues = $this->getDeliveryTimeAllowableValues();
        if (!is_null($delivery_time) && !in_array($delivery_time, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery_time', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime $delivery_date A kívánt kézbesítési nap. Csak a fix napi kézbesítés (K_FNK) többletszolgáltatás esetén szükséges megadni.   /   The required delivery date. It must be provided only in case of the additional service of fixed day delivery (K_FNK).
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \Swagger\Client\Model\Item[]
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Swagger\Client\Model\Item[] $item A tételek (csomagok) felsorolása.   /   List of items (parcels).
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
     * Gets print_recipient_data
     *
     * @return string
     */
    public function getPrintRecipientData()
    {
        return $this->container['print_recipient_data'];
    }

    /**
     * Sets print_recipient_data
     *
     * @param string $print_recipient_data print_recipient_data
     *
     * @return $this
     */
    public function setPrintRecipientData($print_recipient_data)
    {
        $allowedValues = $this->getPrintRecipientDataAllowableValues();
        if (!is_null($print_recipient_data) && !in_array($print_recipient_data, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'print_recipient_data', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['print_recipient_data'] = $print_recipient_data;

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