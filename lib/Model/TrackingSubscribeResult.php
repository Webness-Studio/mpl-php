<?php
/**
 * TrackingSubscribeResult
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
 * TrackingSubscribeResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackingSubscribeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrackingSubscribeResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'errors' => '\Swagger\Client\Model\ErrorDescriptor[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifier' => null,
        'errors' => null
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
        'identifier' => 'identifier',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'errors' => 'getErrors'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
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
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Azonosító
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

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
