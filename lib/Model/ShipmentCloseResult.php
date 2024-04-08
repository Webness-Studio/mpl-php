<?php
/**
 * ShipmentCloseResult
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
 * ShipmentCloseResult Class Doc Comment
 *
 * @category Class
 * @description Szállítmány zárás eredménye   /   Result of consignment closing
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentCloseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentCloseResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'manifest' => 'string',
        'manifest_sum' => 'string',
        'manifest_ra' => 'string',
        'tracking_nr_prices' => '\Swagger\Client\Model\TrackingNrPrice[]',
        'errors' => '\Swagger\Client\Model\ErrorDescriptor[]',
        'warnings' => '\Swagger\Client\Model\WarningDescriptor[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'manifest' => 'byte',
        'manifest_sum' => 'byte',
        'manifest_ra' => 'byte',
        'tracking_nr_prices' => null,
        'errors' => null,
        'warnings' => null
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
        'manifest' => 'manifest',
        'manifest_sum' => 'manifestSUM',
        'manifest_ra' => 'manifestRA',
        'tracking_nr_prices' => 'trackingNrPrices',
        'errors' => 'errors',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'manifest' => 'setManifest',
        'manifest_sum' => 'setManifestSum',
        'manifest_ra' => 'setManifestRa',
        'tracking_nr_prices' => 'setTrackingNrPrices',
        'errors' => 'setErrors',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'manifest' => 'getManifest',
        'manifest_sum' => 'getManifestSum',
        'manifest_ra' => 'getManifestRa',
        'tracking_nr_prices' => 'getTrackingNrPrices',
        'errors' => 'getErrors',
        'warnings' => 'getWarnings'
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
        $this->container['manifest'] = isset($data['manifest']) ? $data['manifest'] : null;
        $this->container['manifest_sum'] = isset($data['manifest_sum']) ? $data['manifest_sum'] : null;
        $this->container['manifest_ra'] = isset($data['manifest_ra']) ? $data['manifest_ra'] : null;
        $this->container['tracking_nr_prices'] = isset($data['tracking_nr_prices']) ? $data['tracking_nr_prices'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
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
     * Gets manifest
     *
     * @return string
     */
    public function getManifest()
    {
        return $this->container['manifest'];
    }

    /**
     * Sets manifest
     *
     * @param string $manifest A generált szállítólevelek (a csomagok fizikai átvételekor használt papír alapú elismervény, amin kézzel lehet rögzíteni az átadott/átvett csomagok listáját).\\  Elektronikus feladójegyzékenként (efj) egy-egy készül belőle.\\   /   Generated delivery notes (a paper-based receipt used for the physical receipt of parcels, on which the list of parcels delivered/accepted can be recorded manually).\\  One electronic posting list(efj) is made of it.
     *
     * @return $this
     */
    public function setManifest($manifest)
    {
        $this->container['manifest'] = $manifest;

        return $this;
    }

    /**
     * Gets manifest_sum
     *
     * @return string
     */
    public function getManifestSum()
    {
        return $this->container['manifest_sum'];
    }

    /**
     * Sets manifest_sum
     *
     * @param string $manifest_sum Feladójegyzék pdf formátumban   /   Posting list in PDF format
     *
     * @return $this
     */
    public function setManifestSum($manifest_sum)
    {
        $this->container['manifest_sum'] = $manifest_sum;

        return $this;
    }

    /**
     * Gets manifest_ra
     *
     * @return string
     */
    public function getManifestRa()
    {
        return $this->container['manifest_ra'];
    }

    /**
     * Sets manifest_ra
     *
     * @param string $manifest_ra Raklapos feladójegyzék pdf formátumban. Csak raklapos küldemény feladás esetén értelmezett, akkor kötelező kinyomtatni és a futárnak átadni.   /   Posting list for pallet in PDF format. Interpreted only when dispatching a pallet mail item, then it must be printed and handed over to the courier.
     *
     * @return $this
     */
    public function setManifestRa($manifest_ra)
    {
        $this->container['manifest_ra'] = $manifest_ra;

        return $this;
    }

    /**
     * Gets tracking_nr_prices
     *
     * @return \Swagger\Client\Model\TrackingNrPrice[]
     */
    public function getTrackingNrPrices()
    {
        return $this->container['tracking_nr_prices'];
    }

    /**
     * Sets tracking_nr_prices
     *
     * @param \Swagger\Client\Model\TrackingNrPrice[] $tracking_nr_prices Szállítmány feladási díjak   /   Consignment postage fees
     *
     * @return $this
     */
    public function setTrackingNrPrices($tracking_nr_prices)
    {
        $this->container['tracking_nr_prices'] = $tracking_nr_prices;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Swagger\Client\Model\ErrorDescriptor[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Swagger\Client\Model\ErrorDescriptor[] $errors A kérés végrehajtása során észlelt hibák. Amennyiben van hibalista, úgy az adott kérés sikertelenül zárult.   /   Errors detected during request execution. If there is an error list, the request was unsuccessful.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Swagger\Client\Model\WarningDescriptor[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Swagger\Client\Model\WarningDescriptor[] $warnings A kérés végrehajtása során észlelt hiányosságok. Amennyiben a lista tartalmaz elemet, úgy az adott kérés sikeresen zárult.   /   Deficiencies detected during the execution of the request. If the list contains an item, the request was completed successfully.
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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
