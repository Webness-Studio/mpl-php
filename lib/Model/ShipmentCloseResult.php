<?php
/**
 * ShipmentCloseResult
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
 * ShipmentCloseResult Class Doc Comment
 *
 * @category Class
 * @description Szállítmány zárás eredménye   /   Result of consignment closing
 * @package  WebnessStudio\MPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentCloseResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentCloseResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'manifest' => 'string',
        'manifest_sum' => 'string',
        'manifest_ra' => 'string',
        'tracking_nr_prices' => '\WebnessStudio\MPL\Model\TrackingNrPrice[]',
        'errors' => '\WebnessStudio\MPL\Model\ErrorDescriptor[]',
        'warnings' => '\WebnessStudio\MPL\Model\WarningDescriptor[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'manifest' => 'byte',
        'manifest_sum' => 'byte',
        'manifest_ra' => 'byte',
        'tracking_nr_prices' => null,
        'errors' => null,
        'warnings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'manifest' => true,
        'manifest_sum' => true,
        'manifest_ra' => true,
        'tracking_nr_prices' => true,
        'errors' => true,
        'warnings' => true
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
        $this->setIfExists('manifest', $data ?? [], null);
        $this->setIfExists('manifest_sum', $data ?? [], null);
        $this->setIfExists('manifest_ra', $data ?? [], null);
        $this->setIfExists('tracking_nr_prices', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('warnings', $data ?? [], null);
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
     * Gets manifest
     *
     * @return string|null
     */
    public function getManifest()
    {
        return $this->container['manifest'];
    }

    /**
     * Sets manifest
     *
     * @param string|null $manifest A generált szállítólevelek (a csomagok fizikai átvételekor használt papír alapú elismervény, amin kézzel lehet rögzíteni az átadott/átvett csomagok listáját).\\  Elektronikus feladójegyzékenként (efj) egy-egy készül belőle.\\   /   Generated delivery notes (a paper-based receipt used for the physical receipt of parcels, on which the list of parcels delivered/accepted can be recorded manually).\\  One electronic posting list(efj) is made of it.
     *
     * @return self
     */
    public function setManifest($manifest)
    {
        if (is_null($manifest)) {
            array_push($this->openAPINullablesSetToNull, 'manifest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manifest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manifest'] = $manifest;

        return $this;
    }

    /**
     * Gets manifest_sum
     *
     * @return string|null
     */
    public function getManifestSum()
    {
        return $this->container['manifest_sum'];
    }

    /**
     * Sets manifest_sum
     *
     * @param string|null $manifest_sum Feladójegyzék pdf formátumban   /   Posting list in PDF format
     *
     * @return self
     */
    public function setManifestSum($manifest_sum)
    {
        if (is_null($manifest_sum)) {
            array_push($this->openAPINullablesSetToNull, 'manifest_sum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manifest_sum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manifest_sum'] = $manifest_sum;

        return $this;
    }

    /**
     * Gets manifest_ra
     *
     * @return string|null
     */
    public function getManifestRa()
    {
        return $this->container['manifest_ra'];
    }

    /**
     * Sets manifest_ra
     *
     * @param string|null $manifest_ra Raklapos feladójegyzék pdf formátumban. Csak raklapos küldemény feladás esetén értelmezett, akkor kötelező kinyomtatni és a futárnak átadni.   /   Posting list for pallet in PDF format. Interpreted only when dispatching a pallet mail item, then it must be printed and handed over to the courier.
     *
     * @return self
     */
    public function setManifestRa($manifest_ra)
    {
        if (is_null($manifest_ra)) {
            array_push($this->openAPINullablesSetToNull, 'manifest_ra');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manifest_ra', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manifest_ra'] = $manifest_ra;

        return $this;
    }

    /**
     * Gets tracking_nr_prices
     *
     * @return \WebnessStudio\MPL\Model\TrackingNrPrice[]|null
     */
    public function getTrackingNrPrices()
    {
        return $this->container['tracking_nr_prices'];
    }

    /**
     * Sets tracking_nr_prices
     *
     * @param \WebnessStudio\MPL\Model\TrackingNrPrice[]|null $tracking_nr_prices Szállítmány feladási díjak   /   Consignment postage fees
     *
     * @return self
     */
    public function setTrackingNrPrices($tracking_nr_prices)
    {
        if (is_null($tracking_nr_prices)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_nr_prices');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_nr_prices', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_nr_prices'] = $tracking_nr_prices;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \WebnessStudio\MPL\Model\ErrorDescriptor[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \WebnessStudio\MPL\Model\ErrorDescriptor[]|null $errors A kérés végrehajtása során észlelt hibák. Amennyiben van hibalista, úgy az adott kérés sikertelenül zárult.   /   Errors detected during request execution. If there is an error list, the request was unsuccessful.
     *
     * @return self
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            array_push($this->openAPINullablesSetToNull, 'errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \WebnessStudio\MPL\Model\WarningDescriptor[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \WebnessStudio\MPL\Model\WarningDescriptor[]|null $warnings A kérés végrehajtása során észlelt hiányosságok. Amennyiben a lista tartalmaz elemet, úgy az adott kérés sikeresen zárult.   /   Deficiencies detected during the execution of the request. If the list contains an item, the request was completed successfully.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        if (is_null($warnings)) {
            array_push($this->openAPINullablesSetToNull, 'warnings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('warnings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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


