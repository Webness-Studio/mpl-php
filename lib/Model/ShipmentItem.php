<?php
/**
 * ShipmentItem
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
 * ShipmentItem Class Doc Comment
 *
 * @category Class
 * @description Az egyes csomagok adatai.   /   Details of each parcel.
 * @package  WebnessStudio\MPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_data1' => 'string',
        'custom_data2' => 'string',
        'weight' => '\WebnessStudio\MPL\Model\UnitValue',
        'size' => 'string',
        'services' => '\WebnessStudio\MPL\Model\Service',
        'ewc_code' => 'string',
        'fee' => 'float',
        'qr_code' => 'string',
        'customs' => '\WebnessStudio\MPL\Model\Custom[]',
        'documents' => '\WebnessStudio\MPL\Model\Document[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_data1' => null,
        'custom_data2' => null,
        'weight' => null,
        'size' => null,
        'services' => null,
        'ewc_code' => null,
        'fee' => 'double',
        'qr_code' => null,
        'customs' => null,
        'documents' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'custom_data1' => true,
        'custom_data2' => true,
        'weight' => false,
        'size' => true,
        'services' => false,
        'ewc_code' => true,
        'fee' => true,
        'qr_code' => true,
        'customs' => true,
        'documents' => true
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
        'custom_data1' => 'customData1',
        'custom_data2' => 'customData2',
        'weight' => 'weight',
        'size' => 'size',
        'services' => 'services',
        'ewc_code' => 'ewcCode',
        'fee' => 'fee',
        'qr_code' => 'qrCode',
        'customs' => 'customs',
        'documents' => 'documents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_data1' => 'setCustomData1',
        'custom_data2' => 'setCustomData2',
        'weight' => 'setWeight',
        'size' => 'setSize',
        'services' => 'setServices',
        'ewc_code' => 'setEwcCode',
        'fee' => 'setFee',
        'qr_code' => 'setQrCode',
        'customs' => 'setCustoms',
        'documents' => 'setDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_data1' => 'getCustomData1',
        'custom_data2' => 'getCustomData2',
        'weight' => 'getWeight',
        'size' => 'getSize',
        'services' => 'getServices',
        'ewc_code' => 'getEwcCode',
        'fee' => 'getFee',
        'qr_code' => 'getQrCode',
        'customs' => 'getCustoms',
        'documents' => 'getDocuments'
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

    public const SIZE_S = 'S';
    public const SIZE_M = 'M';
    public const SIZE_L = 'L';
    public const SIZE__PRINT = 'PRINT';
    public const SIZE_PACK = 'PACK';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSizeAllowableValues()
    {
        return [
            self::SIZE_S,
            self::SIZE_M,
            self::SIZE_L,
            self::SIZE__PRINT,
            self::SIZE_PACK,
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
        $this->setIfExists('custom_data1', $data ?? [], null);
        $this->setIfExists('custom_data2', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('services', $data ?? [], null);
        $this->setIfExists('ewc_code', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('qr_code', $data ?? [], null);
        $this->setIfExists('customs', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
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

        $allowedValues = $this->getSizeAllowableValues();
        if (!is_null($this->container['size']) && !in_array($this->container['size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'size', must be one of '%s'",
                $this->container['size'],
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
     * Gets custom_data1
     *
     * @return string|null
     */
    public function getCustomData1()
    {
        return $this->container['custom_data1'];
    }

    /**
     * Sets custom_data1
     *
     * @param string|null $custom_data1 Tetszőleges ügyféladat (pl. ügyfél oldali azonosító).   /   Any customer data.
     *
     * @return self
     */
    public function setCustomData1($custom_data1)
    {
        if (is_null($custom_data1)) {
            array_push($this->openAPINullablesSetToNull, 'custom_data1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_data1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom_data1'] = $custom_data1;

        return $this;
    }

    /**
     * Gets custom_data2
     *
     * @return string|null
     */
    public function getCustomData2()
    {
        return $this->container['custom_data2'];
    }

    /**
     * Sets custom_data2
     *
     * @param string|null $custom_data2 Tetszőleges ügyféladat (pl. ügyfél oldali azonosító).   /   Any customer data.
     *
     * @return self
     */
    public function setCustomData2($custom_data2)
    {
        if (is_null($custom_data2)) {
            array_push($this->openAPINullablesSetToNull, 'custom_data2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_data2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom_data2'] = $custom_data2;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \WebnessStudio\MPL\Model\UnitValue|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \WebnessStudio\MPL\Model\UnitValue|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size A csomag mérete.Csak két esetben kötelező.A) ►DOM◄ Csomagautomatára való címzéskor(deliveryMode:CS) az S, M, L értékek valamelyikével.B) ►INT◄ Nemzetközi gyorsposta alapszolgáltatás(service.basic: A_13_EMS) esetén a PRINT,PACK értékek valamelyikével.   /   Standard size of the item.To be specified only in two cases.A) ►DOM◄ When sending to a parcel terminal(deliveryMode:CS), using one of the S or M or L values.B) ►INT◄ When sending an international express mail(service.basic: A_13_EMS), using one of the PRINT or PACK values.
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            array_push($this->openAPINullablesSetToNull, 'size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSizeAllowableValues();
        if (!is_null($size) && !in_array($size, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'size', must be one of '%s'",
                    $size,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \WebnessStudio\MPL\Model\Service|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \WebnessStudio\MPL\Model\Service|null $services services
     *
     * @return self
     */
    public function setServices($services)
    {
        if (is_null($services)) {
            throw new \InvalidArgumentException('non-nullable services cannot be null');
        }
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets ewc_code
     *
     * @return string|null
     */
    public function getEwcCode()
    {
        return $this->container['ewc_code'];
    }

    /**
     * Sets ewc_code
     *
     * @param string|null $ewc_code A mező nem használható.  /   The field is not available.
     *
     * @return self
     */
    public function setEwcCode($ewc_code)
    {
        if (is_null($ewc_code)) {
            array_push($this->openAPINullablesSetToNull, 'ewc_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ewc_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ewc_code'] = $ewc_code;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float|null $fee Feladási díj   /   Postage fee format
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            array_push($this->openAPINullablesSetToNull, 'fee');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fee', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets qr_code
     *
     * @return string|null
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param string|null $qr_code A címiraton megjelenő ügyféladatokat tartalmazó QR kód tartalma   /   Content of the QR code containing the customer details appearing on the address label.
     *
     * @return self
     */
    public function setQrCode($qr_code)
    {
        if (is_null($qr_code)) {
            array_push($this->openAPINullablesSetToNull, 'qr_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qr_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['qr_code'] = $qr_code;

        return $this;
    }

    /**
     * Gets customs
     *
     * @return \WebnessStudio\MPL\Model\Custom[]|null
     */
    public function getCustoms()
    {
        return $this->container['customs'];
    }

    /**
     * Sets customs
     *
     * @param \WebnessStudio\MPL\Model\Custom[]|null $customs Árutartalom listája
     *
     * @return self
     */
    public function setCustoms($customs)
    {
        if (is_null($customs)) {
            array_push($this->openAPINullablesSetToNull, 'customs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customs'] = $customs;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \WebnessStudio\MPL\Model\Document[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \WebnessStudio\MPL\Model\Document[]|null $documents Dokumentumok listája
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            array_push($this->openAPINullablesSetToNull, 'documents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('documents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['documents'] = $documents;

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


