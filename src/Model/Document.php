<?php
/**
 * Document
 *
 * PHP version 8.1
 *
 * @package  Dhl\Rest\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Parcel DE Shipping API (Post & Parcel Germany)
 *
 * Note: This is the specification of the DPDHL Group Parcel DE Shipping API for Post & Parcel Germany. This REST web service allows business customers to create shipping labels on demand.
 *
 * The version of the OpenAPI document: 2.1.8
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dhl\Rest\Shipping\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Dhl\Rest\Shipping\ObjectSerializer;

/**
 * Document Class Doc Comment
 *
 * @description Encoded document. All types of labels and documents.
 * @package  Dhl\Rest\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Document implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'b64' => 'string',
        'zpl2' => 'string',
        'url' => 'string',
        'file_format' => 'string',
        'print_format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'b64' => null,
        'zpl2' => null,
        'url' => null,
        'file_format' => null,
        'print_format' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'b64' => false,
        'zpl2' => false,
        'url' => false,
        'file_format' => false,
        'print_format' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'b64' => 'b64',
        'zpl2' => 'zpl2',
        'url' => 'url',
        'file_format' => 'fileFormat',
        'print_format' => 'printFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'b64' => 'setB64',
        'zpl2' => 'setZpl2',
        'url' => 'setUrl',
        'file_format' => 'setFileFormat',
        'print_format' => 'setPrintFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'b64' => 'getB64',
        'zpl2' => 'getZpl2',
        'url' => 'getUrl',
        'file_format' => 'getFileFormat',
        'print_format' => 'getPrintFormat'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const FILE_FORMAT_ZPL2 = 'ZPL2';
    public const FILE_FORMAT_PDF = 'PDF';
    public const PRINT_FORMAT_A4 = 'A4';
    public const PRINT_FORMAT_A4_PT = 'A4-PT';
    public const PRINT_FORMAT__910_300_600 = '910-300-600';
    public const PRINT_FORMAT__910_300_610 = '910-300-610';
    public const PRINT_FORMAT__910_300_700 = '910-300-700';
    public const PRINT_FORMAT__910_300_700_OZ = '910-300-700-oz';
    public const PRINT_FORMAT__910_300_710 = '910-300-710';
    public const PRINT_FORMAT__910_300_300 = '910-300-300';
    public const PRINT_FORMAT__910_300_300_OZ = '910-300-300-oz';
    public const PRINT_FORMAT__910_300_400 = '910-300-400';
    public const PRINT_FORMAT__910_300_410 = '910-300-410';
    public const PRINT_FORMAT__100X70MM = '100x70mm';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFileFormatAllowableValues()
    {
        return [
            self::FILE_FORMAT_ZPL2,
            self::FILE_FORMAT_PDF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrintFormatAllowableValues()
    {
        return [
            self::PRINT_FORMAT_A4,
            self::PRINT_FORMAT_A4_PT,
            self::PRINT_FORMAT__910_300_600,
            self::PRINT_FORMAT__910_300_610,
            self::PRINT_FORMAT__910_300_700,
            self::PRINT_FORMAT__910_300_700_OZ,
            self::PRINT_FORMAT__910_300_710,
            self::PRINT_FORMAT__910_300_300,
            self::PRINT_FORMAT__910_300_300_OZ,
            self::PRINT_FORMAT__910_300_400,
            self::PRINT_FORMAT__910_300_410,
            self::PRINT_FORMAT__100X70MM,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('b64', $data ?? [], null);
        $this->setIfExists('zpl2', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('file_format', $data ?? [], null);
        $this->setIfExists('print_format', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        $allowedValues = $this->getFileFormatAllowableValues();
        if (!is_null($this->container['file_format']) && !in_array($this->container['file_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'file_format', must be one of '%s'",
                $this->container['file_format'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPrintFormatAllowableValues();
        if (!is_null($this->container['print_format']) && !in_array($this->container['print_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'print_format', must be one of '%s'",
                $this->container['print_format'],
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets b64
     *
     * @return string|null
     */
    public function getB64(): ?string
    {
        return $this->container['b64'];
    }

    /**
     * Sets b64
     *
     * @param string|null $b64 The Base64 encoded byte stream
     *
     * @return $this
     */
    public function setB64(?string $b64): static
    {
        if (is_null($b64)) {
            throw new InvalidArgumentException('non-nullable b64 cannot be null');
        }
        $this->container['b64'] = $b64;

        return $this;
    }

    /**
     * Gets zpl2
     *
     * @return string|null
     */
    public function getZpl2(): ?string
    {
        return $this->container['zpl2'];
    }

    /**
     * Sets zpl2
     *
     * @param string|null $zpl2 The document in zpl encoding
     *
     * @return $this
     */
    public function setZpl2(?string $zpl2): static
    {
        if (is_null($zpl2)) {
            throw new InvalidArgumentException('non-nullable zpl2 cannot be null');
        }
        $this->container['zpl2'] = $zpl2;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL reference to download document
     *
     * @return $this
     */
    public function setUrl(?string $url): static
    {
        if (is_null($url)) {
            throw new InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets file_format
     *
     * @return string|null
     */
    public function getFileFormat(): ?string
    {
        return $this->container['file_format'];
    }

    /**
     * Sets file_format
     *
     * @param string|null $file_format format of the encoded bytes
     *
     * @return $this
     */
    public function setFileFormat(?string $file_format): static
    {
        if (is_null($file_format)) {
            throw new InvalidArgumentException('non-nullable file_format cannot be null');
        }
        $allowedValues = $this->getFileFormatAllowableValues();
        if (!in_array($file_format, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'file_format', must be one of '%s'",
                    $file_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['file_format'] = $file_format;

        return $this;
    }

    /**
     * Gets print_format
     *
     * @return string|null
     */
    public function getPrintFormat(): ?string
    {
        return $this->container['print_format'];
    }

    /**
     * Sets print_format
     *
     * @param string|null $print_format The print format used. Customs documents cash on delivery documents can only be returned in format A4.
     *
     * @return $this
     */
    public function setPrintFormat(?string $print_format): static
    {
        if (is_null($print_format)) {
            throw new InvalidArgumentException('non-nullable print_format cannot be null');
        }
        $allowedValues = $this->getPrintFormatAllowableValues();
        if (!in_array($print_format, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'print_format', must be one of '%s'",
                    $print_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['print_format'] = $print_format;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


