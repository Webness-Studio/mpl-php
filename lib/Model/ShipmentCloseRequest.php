<?php
/**
 * ShipmentCloseRequest
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
 * ShipmentCloseRequest Class Doc Comment
 *
 * @category Class
 * @description Beküldött csomagadatok zárása, EFJ (elektronikus feladójegyzék) generálása.   /   Closing submitted parcel data, generating EFJ (electronic posting list).
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentCloseRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentCloseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'tracking_numbers' => 'string[]',
        'check_list' => 'bool',
        'check_list_with_price' => 'bool',
        'tag' => 'string',
        'request_id' => 'string',
        'summary_list' => 'bool',
        'single_file' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from_date' => 'date',
        'to_date' => 'date',
        'tracking_numbers' => null,
        'check_list' => null,
        'check_list_with_price' => null,
        'tag' => null,
        'request_id' => null,
        'summary_list' => null,
        'single_file' => null
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
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'tracking_numbers' => 'trackingNumbers',
        'check_list' => 'checkList',
        'check_list_with_price' => 'checkListWithPrice',
        'tag' => 'tag',
        'request_id' => 'requestId',
        'summary_list' => 'summaryList',
        'single_file' => 'singleFile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'tracking_numbers' => 'setTrackingNumbers',
        'check_list' => 'setCheckList',
        'check_list_with_price' => 'setCheckListWithPrice',
        'tag' => 'setTag',
        'request_id' => 'setRequestId',
        'summary_list' => 'setSummaryList',
        'single_file' => 'setSingleFile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'tracking_numbers' => 'getTrackingNumbers',
        'check_list' => 'getCheckList',
        'check_list_with_price' => 'getCheckListWithPrice',
        'tag' => 'getTag',
        'request_id' => 'getRequestId',
        'summary_list' => 'getSummaryList',
        'single_file' => 'getSingleFile'
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
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['tracking_numbers'] = isset($data['tracking_numbers']) ? $data['tracking_numbers'] : null;
        $this->container['check_list'] = isset($data['check_list']) ? $data['check_list'] : null;
        $this->container['check_list_with_price'] = isset($data['check_list_with_price']) ? $data['check_list_with_price'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['summary_list'] = isset($data['summary_list']) ? $data['summary_list'] : null;
        $this->container['single_file'] = isset($data['single_file']) ? $data['single_file'] : null;
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
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date A leválogatás kezdő dátuma.   /   Sorting start date.
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date A leválogatás végdátuma.   /   Sorting end date.
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets tracking_numbers
     *
     * @return string[]
     */
    public function getTrackingNumbers()
    {
        return $this->container['tracking_numbers'];
    }

    /**
     * Sets tracking_numbers
     *
     * @param string[] $tracking_numbers Postai azonosítók (ragszámok) felsorolása.   /   List of postal identifiers (tracking numbers).
     *
     * @return $this
     */
    public function setTrackingNumbers($tracking_numbers)
    {
        $this->container['tracking_numbers'] = $tracking_numbers;

        return $this;
    }

    /**
     * Gets check_list
     *
     * @return bool
     */
    public function getCheckList()
    {
        return $this->container['check_list'];
    }

    /**
     * Sets check_list
     *
     * @param bool $check_list Szállítólevelet kér PDF formátumban. Ez egy, a csomagok fizikai átvételekor használt papír alapú elismervény, amin kézzel lehet rögzíteni az átadott/átvett csomagok listáját.   /   Request a delivery note in PDF format. This is a paper-based receipt used for the physical receipt of the parcels, on which the list of delivered/received parcels can be entered manually.
     *
     * @return $this
     */
    public function setCheckList($check_list)
    {
        $this->container['check_list'] = $check_list;

        return $this;
    }

    /**
     * Gets check_list_with_price
     *
     * @return bool
     */
    public function getCheckListWithPrice()
    {
        return $this->container['check_list_with_price'];
    }

    /**
     * Sets check_list_with_price
     *
     * @param bool $check_list_with_price Feladási díjak megjelenítése az eredményben.   /   Show postage fees in the profit and loss account.
     *
     * @return $this
     */
    public function setCheckListWithPrice($check_list_with_price)
    {
        $this->container['check_list_with_price'] = $check_list_with_price;

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
     * @param string $tag Milyen cimkével ellátott csomagokat szűrjük.   /   Parcels with which label are sorted.
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Egy korábbi zárás-kérésre adott válaszunk megismétlése. (Olyankor hasznos, ha pl. time-out miatt nem ért oda a PDF, de azért szükség lenne rá.)   /   Repeating our response for a previous request for closing. (It is useful in cases when the PDF did not arrive because of time-out, but it would be necessary.)
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets summary_list
     *
     * @return bool
     */
    public function getSummaryList()
    {
        return $this->container['summary_list'];
    }

    /**
     * Sets summary_list
     *
     * @param bool $summary_list Feladás összesítő kérése PDF formátumban   /   Request for dispatch summary in PDF format
     *
     * @return $this
     */
    public function setSummaryList($summary_list)
    {
        $this->container['summary_list'] = $summary_list;

        return $this;
    }

    /**
     * Gets single_file
     *
     * @return bool
     */
    public function getSingleFile()
    {
        return $this->container['single_file'];
    }

    /**
     * Sets single_file
     *
     * @param bool $single_file A jegyzékek egy pdf fájlban vagy külön pdf fájlokban készüljenek.   /   Lists shall be prepared in one PDF file or in separate PDF files.
     *
     * @return $this
     */
    public function setSingleFile($single_file)
    {
        $this->container['single_file'] = $single_file;

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