<?php
/**
 * ShipmentCreateResult
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
 * ShipmentCreateResult Class Doc Comment
 *
 * @category Class
 * @description Szállítmány létrehozás eredménye   /   Result of consignment creation
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentCreateResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentCreateResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'webshop_id' => 'string',
        'tracking_number' => 'string',
        'replacement_tracking_number' => 'string',
        'replacement_labels' => '\Swagger\Client\Model\ReplacementLabel[]',
        'package_tracking_numbers' => 'string[]',
        'dispatch_id' => 'int',
        'suggested_recipient_post_code' => 'string',
        'suggested_recipient_city' => 'string',
        'suggested_recipient_address' => 'string',
        'label' => 'string',
        'errors' => '\Swagger\Client\Model\ErrorDescriptor[]',
        'warnings' => '\Swagger\Client\Model\WarningDescriptor[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'webshop_id' => null,
        'tracking_number' => null,
        'replacement_tracking_number' => null,
        'replacement_labels' => null,
        'package_tracking_numbers' => null,
        'dispatch_id' => 'int32',
        'suggested_recipient_post_code' => null,
        'suggested_recipient_city' => null,
        'suggested_recipient_address' => null,
        'label' => 'byte',
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
        'webshop_id' => 'webshopId',
        'tracking_number' => 'trackingNumber',
        'replacement_tracking_number' => 'replacementTrackingNumber',
        'replacement_labels' => 'replacementLabels',
        'package_tracking_numbers' => 'packageTrackingNumbers',
        'dispatch_id' => 'dispatchId',
        'suggested_recipient_post_code' => 'suggestedRecipientPostCode',
        'suggested_recipient_city' => 'suggestedRecipientCity',
        'suggested_recipient_address' => 'suggestedRecipientAddress',
        'label' => 'label',
        'errors' => 'errors',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webshop_id' => 'setWebshopId',
        'tracking_number' => 'setTrackingNumber',
        'replacement_tracking_number' => 'setReplacementTrackingNumber',
        'replacement_labels' => 'setReplacementLabels',
        'package_tracking_numbers' => 'setPackageTrackingNumbers',
        'dispatch_id' => 'setDispatchId',
        'suggested_recipient_post_code' => 'setSuggestedRecipientPostCode',
        'suggested_recipient_city' => 'setSuggestedRecipientCity',
        'suggested_recipient_address' => 'setSuggestedRecipientAddress',
        'label' => 'setLabel',
        'errors' => 'setErrors',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webshop_id' => 'getWebshopId',
        'tracking_number' => 'getTrackingNumber',
        'replacement_tracking_number' => 'getReplacementTrackingNumber',
        'replacement_labels' => 'getReplacementLabels',
        'package_tracking_numbers' => 'getPackageTrackingNumbers',
        'dispatch_id' => 'getDispatchId',
        'suggested_recipient_post_code' => 'getSuggestedRecipientPostCode',
        'suggested_recipient_city' => 'getSuggestedRecipientCity',
        'suggested_recipient_address' => 'getSuggestedRecipientAddress',
        'label' => 'getLabel',
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
        $this->container['webshop_id'] = isset($data['webshop_id']) ? $data['webshop_id'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['replacement_tracking_number'] = isset($data['replacement_tracking_number']) ? $data['replacement_tracking_number'] : null;
        $this->container['replacement_labels'] = isset($data['replacement_labels']) ? $data['replacement_labels'] : null;
        $this->container['package_tracking_numbers'] = isset($data['package_tracking_numbers']) ? $data['package_tracking_numbers'] : null;
        $this->container['dispatch_id'] = isset($data['dispatch_id']) ? $data['dispatch_id'] : null;
        $this->container['suggested_recipient_post_code'] = isset($data['suggested_recipient_post_code']) ? $data['suggested_recipient_post_code'] : null;
        $this->container['suggested_recipient_city'] = isset($data['suggested_recipient_city']) ? $data['suggested_recipient_city'] : null;
        $this->container['suggested_recipient_address'] = isset($data['suggested_recipient_address']) ? $data['suggested_recipient_address'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
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
     * @param string $webshop_id Az adott szállítmány azonosítója. A kérésben kapott azonosítókat ismételjük meg itt, ez alapján lehet párosítani a választ a kéréssel.   /   The identifier of the given consignment. The IDs received in the request should be repeated here, based on which the response can be paired with the request.
     *
     * @return $this
     */
    public function setWebshopId($webshop_id)
    {
        $this->container['webshop_id'] = $webshop_id;

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
     * @param string $tracking_number A posta által kiosztott szállítmányazonosító   /   Consignment ID assigned by Magyar Posta
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets replacement_tracking_number
     *
     * @return string
     */
    public function getReplacementTrackingNumber()
    {
        return $this->container['replacement_tracking_number'];
    }

    /**
     * Sets replacement_tracking_number
     *
     * @param string $replacement_tracking_number Amennyiben cserecsomag szolgáltatást vett igénybe, úgy az alapcsomag azonosítója.   /   If you used a replacement parcel service, the identifier of the base parcel.
     *
     * @return $this
     */
    public function setReplacementTrackingNumber($replacement_tracking_number)
    {
        $this->container['replacement_tracking_number'] = $replacement_tracking_number;

        return $this;
    }

    /**
     * Gets replacement_labels
     *
     * @return \Swagger\Client\Model\ReplacementLabel[]
     */
    public function getReplacementLabels()
    {
        return $this->container['replacement_labels'];
    }

    /**
     * Sets replacement_labels
     *
     * @param \Swagger\Client\Model\ReplacementLabel[] $replacement_labels Amennyiben cserecsomag szolgáltatást vett igénybe, úgy az inverz csomag(ok) címiratai.   /   If you used a replacement parcel service, the address labels of the inverse parcel(s).
     *
     * @return $this
     */
    public function setReplacementLabels($replacement_labels)
    {
        $this->container['replacement_labels'] = $replacement_labels;

        return $this;
    }

    /**
     * Gets package_tracking_numbers
     *
     * @return string[]
     */
    public function getPackageTrackingNumbers()
    {
        return $this->container['package_tracking_numbers'];
    }

    /**
     * Sets package_tracking_numbers
     *
     * @param string[] $package_tracking_numbers Szállítmányhoz tartozó csomagok azonosítói   /   Identifiers of the parcels belonging to the consignment
     *
     * @return $this
     */
    public function setPackageTrackingNumbers($package_tracking_numbers)
    {
        $this->container['package_tracking_numbers'] = $package_tracking_numbers;

        return $this;
    }

    /**
     * Gets dispatch_id
     *
     * @return int
     */
    public function getDispatchId()
    {
        return $this->container['dispatch_id'];
    }

    /**
     * Sets dispatch_id
     *
     * @param int $dispatch_id 8 számjegyből álló feladásazonosító. Ezt az azonosítót a feladónak használnia kell majd az automatánál történő feladáskor.  /   8-digit dispatch ID. This ID will have to be used by the sender when dispatching at a parcel machine.
     *
     * @return $this
     */
    public function setDispatchId($dispatch_id)
    {
        $this->container['dispatch_id'] = $dispatch_id;

        return $this;
    }

    /**
     * Gets suggested_recipient_post_code
     *
     * @return string
     */
    public function getSuggestedRecipientPostCode()
    {
        return $this->container['suggested_recipient_post_code'];
    }

    /**
     * Sets suggested_recipient_post_code
     *
     * @param string $suggested_recipient_post_code Amennyiben a címzett címe nem található a postai adatbázisban, akkor a posta által javasolt irányítószám.   /   If the recipient's address is not in the postal database, the postcode suggested by Magyar Posta.
     *
     * @return $this
     */
    public function setSuggestedRecipientPostCode($suggested_recipient_post_code)
    {
        $this->container['suggested_recipient_post_code'] = $suggested_recipient_post_code;

        return $this;
    }

    /**
     * Gets suggested_recipient_city
     *
     * @return string
     */
    public function getSuggestedRecipientCity()
    {
        return $this->container['suggested_recipient_city'];
    }

    /**
     * Sets suggested_recipient_city
     *
     * @param string $suggested_recipient_city Amennyiben a címzett címe nem található a postai adatbázisban, akkor a posta által javasolt település.   /   If the recipient’s address is not in the postal database, the settlement suggested by Magyar Posta.
     *
     * @return $this
     */
    public function setSuggestedRecipientCity($suggested_recipient_city)
    {
        $this->container['suggested_recipient_city'] = $suggested_recipient_city;

        return $this;
    }

    /**
     * Gets suggested_recipient_address
     *
     * @return string
     */
    public function getSuggestedRecipientAddress()
    {
        return $this->container['suggested_recipient_address'];
    }

    /**
     * Sets suggested_recipient_address
     *
     * @param string $suggested_recipient_address Amennyiben a címzett címe nem található a postai adatbázisban, akkor a posta által javasolt cím.   /   If the recipient's address is not in the postal database, the address suggested by Magyar Posta.
     *
     * @return $this
     */
    public function setSuggestedRecipientAddress($suggested_recipient_address)
    {
        $this->container['suggested_recipient_address'] = $suggested_recipient_address;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Címirat PDF formátumban base64 enkódolva.   /   Address label in PDF format base64 encoded.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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