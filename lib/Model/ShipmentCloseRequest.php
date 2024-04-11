<?php
/**
 * ShipmentCloseRequest
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
 * ShipmentCloseRequest Class Doc Comment
 *
 * @category Class
 * @description Beküldött csomagadatok zárása, EFJ (elektronikus feladójegyzék) generálása.   /   Closing submitted parcel data, generating EFJ (electronic posting list).
 * @package  WebnessStudio\MPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentCloseRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentCloseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'from_date' => true,
        'to_date' => true,
        'tracking_numbers' => true,
        'check_list' => true,
        'check_list_with_price' => true,
        'tag' => true,
        'request_id' => true,
        'summary_list' => true,
        'single_file' => true
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('to_date', $data ?? [], null);
        $this->setIfExists('tracking_numbers', $data ?? [], null);
        $this->setIfExists('check_list', $data ?? [], null);
        $this->setIfExists('check_list_with_price', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('request_id', $data ?? [], null);
        $this->setIfExists('summary_list', $data ?? [], null);
        $this->setIfExists('single_file', $data ?? [], null);
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
     * Gets from_date
     *
     * @return \DateTime|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime|null $from_date A leválogatás kezdő dátuma.   /   Sorting start date.
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            array_push($this->openAPINullablesSetToNull, 'from_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('from_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime|null
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime|null $to_date A leválogatás végdátuma.   /   Sorting end date.
     *
     * @return self
     */
    public function setToDate($to_date)
    {
        if (is_null($to_date)) {
            array_push($this->openAPINullablesSetToNull, 'to_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('to_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets tracking_numbers
     *
     * @return string[]|null
     */
    public function getTrackingNumbers()
    {
        return $this->container['tracking_numbers'];
    }

    /**
     * Sets tracking_numbers
     *
     * @param string[]|null $tracking_numbers Postai azonosítók (ragszámok) felsorolása.   /   List of postal identifiers (tracking numbers).
     *
     * @return self
     */
    public function setTrackingNumbers($tracking_numbers)
    {
        if (is_null($tracking_numbers)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_numbers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_numbers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_numbers'] = $tracking_numbers;

        return $this;
    }

    /**
     * Gets check_list
     *
     * @return bool|null
     */
    public function getCheckList()
    {
        return $this->container['check_list'];
    }

    /**
     * Sets check_list
     *
     * @param bool|null $check_list Szállítólevelet kér PDF formátumban. Ez egy, a csomagok fizikai átvételekor használt papír alapú elismervény, amin kézzel lehet rögzíteni az átadott/átvett csomagok listáját.   /   Request a delivery note in PDF format. This is a paper-based receipt used for the physical receipt of the parcels, on which the list of delivered/received parcels can be entered manually.
     *
     * @return self
     */
    public function setCheckList($check_list)
    {
        if (is_null($check_list)) {
            array_push($this->openAPINullablesSetToNull, 'check_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('check_list', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['check_list'] = $check_list;

        return $this;
    }

    /**
     * Gets check_list_with_price
     *
     * @return bool|null
     */
    public function getCheckListWithPrice()
    {
        return $this->container['check_list_with_price'];
    }

    /**
     * Sets check_list_with_price
     *
     * @param bool|null $check_list_with_price Feladási díjak megjelenítése az eredményben.   /   Show postage fees in the profit and loss account.
     *
     * @return self
     */
    public function setCheckListWithPrice($check_list_with_price)
    {
        if (is_null($check_list_with_price)) {
            array_push($this->openAPINullablesSetToNull, 'check_list_with_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('check_list_with_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['check_list_with_price'] = $check_list_with_price;

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
     * @param string|null $tag Milyen cimkével ellátott csomagokat szűrjük.   /   Parcels with which label are sorted.
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
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id Egy korábbi zárás-kérésre adott válaszunk megismétlése. (Olyankor hasznos, ha pl. time-out miatt nem ért oda a PDF, de azért szükség lenne rá.)   /   Repeating our response for a previous request for closing. (It is useful in cases when the PDF did not arrive because of time-out, but it would be necessary.)
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        if (is_null($request_id)) {
            array_push($this->openAPINullablesSetToNull, 'request_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('request_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets summary_list
     *
     * @return bool|null
     */
    public function getSummaryList()
    {
        return $this->container['summary_list'];
    }

    /**
     * Sets summary_list
     *
     * @param bool|null $summary_list Feladás összesítő kérése PDF formátumban   /   Request for dispatch summary in PDF format
     *
     * @return self
     */
    public function setSummaryList($summary_list)
    {
        if (is_null($summary_list)) {
            array_push($this->openAPINullablesSetToNull, 'summary_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('summary_list', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['summary_list'] = $summary_list;

        return $this;
    }

    /**
     * Gets single_file
     *
     * @return bool|null
     */
    public function getSingleFile()
    {
        return $this->container['single_file'];
    }

    /**
     * Sets single_file
     *
     * @param bool|null $single_file A jegyzékek egy pdf fájlban vagy külön pdf fájlokban készüljenek.   /   Lists shall be prepared in one PDF file or in separate PDF files.
     *
     * @return self
     */
    public function setSingleFile($single_file)
    {
        if (is_null($single_file)) {
            array_push($this->openAPINullablesSetToNull, 'single_file');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('single_file', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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


