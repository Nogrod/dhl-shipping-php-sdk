<?php
/**
 * VASDhlRetoure
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
 * The version of the OpenAPI document: 2.1.12
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * VASDhlRetoure Class Doc Comment
 *
 * @description Requests return label (aka &#39;retoure&#39;) to be provided. Also requires returnAddress and return billing number. Neither weight nor dimension need to be specified for the retoure (flat rate service).
 * @package  Dhl\Rest\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class VASDhlRetoure implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VASDhlRetoure';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'billing_number' => 'string',
        'ref_no' => 'string',
        'return_address' => '\Dhl\Rest\Shipping\Model\ContactAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'billing_number' => null,
        'ref_no' => null,
        'return_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'billing_number' => false,
        'ref_no' => false,
        'return_address' => false
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
        'billing_number' => 'billingNumber',
        'ref_no' => 'refNo',
        'return_address' => 'returnAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'billing_number' => 'setBillingNumber',
        'ref_no' => 'setRefNo',
        'return_address' => 'setReturnAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'billing_number' => 'getBillingNumber',
        'ref_no' => 'getRefNo',
        'return_address' => 'getReturnAddress'
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('billing_number', $data ?? [], null);
        $this->setIfExists('ref_no', $data ?? [], null);
        $this->setIfExists('return_address', $data ?? [], null);
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

        if ($this->container['billing_number'] === null) {
            $invalidProperties[] = "'billing_number' can't be null";
        }
        if (!preg_match("/\\w{10}\\d{2}\\w{2}/", $this->container['billing_number'])) {
            $invalidProperties[] = "invalid value for 'billing_number', must be conform to the pattern /\\w{10}\\d{2}\\w{2}/.";
        }

        if (!is_null($this->container['ref_no']) && (mb_strlen($this->container['ref_no']) > 50)) {
            $invalidProperties[] = "invalid value for 'ref_no', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['ref_no']) && (mb_strlen($this->container['ref_no']) < 6)) {
            $invalidProperties[] = "invalid value for 'ref_no', the character length must be bigger than or equal to 6.";
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
     * Gets billing_number
     *
     * @return string
     */
    public function getBillingNumber(): string
    {
        return $this->container['billing_number'];
    }

    /**
     * Sets billing_number
     *
     * @param string $billing_number billing_number
     *
     * @return $this
     */
    public function setBillingNumber(string $billing_number): static
    {
        if (is_null($billing_number)) {
            throw new InvalidArgumentException('non-nullable billing_number cannot be null');
        }

        if ((!preg_match("/\\w{10}\\d{2}\\w{2}/", ObjectSerializer::toString($billing_number)))) {
            throw new InvalidArgumentException("invalid value for \$billing_number when calling VASDhlRetoure., must conform to the pattern /\\w{10}\\d{2}\\w{2}/.");
        }

        $this->container['billing_number'] = $billing_number;

        return $this;
    }

    /**
     * Gets ref_no
     *
     * @return string|null
     */
    public function getRefNo(): ?string
    {
        return $this->container['ref_no'];
    }

    /**
     * Sets ref_no
     *
     * @param string|null $ref_no ref_no
     *
     * @return $this
     */
    public function setRefNo(?string $ref_no): static
    {
        if (is_null($ref_no)) {
            throw new InvalidArgumentException('non-nullable ref_no cannot be null');
        }
        if ((mb_strlen($ref_no) > 50)) {
            throw new InvalidArgumentException('invalid length for $ref_no when calling VASDhlRetoure., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($ref_no) < 6)) {
            throw new InvalidArgumentException('invalid length for $ref_no when calling VASDhlRetoure., must be bigger than or equal to 6.');
        }

        $this->container['ref_no'] = $ref_no;

        return $this;
    }

    /**
     * Gets return_address
     *
     * @return \Dhl\Rest\Shipping\Model\ContactAddress|null
     */
    public function getReturnAddress(): ?\Dhl\Rest\Shipping\Model\ContactAddress
    {
        return $this->container['return_address'];
    }

    /**
     * Sets return_address
     *
     * @param \Dhl\Rest\Shipping\Model\ContactAddress|null $return_address return_address
     *
     * @return $this
     */
    public function setReturnAddress(?\Dhl\Rest\Shipping\Model\ContactAddress $return_address): static
    {
        if (is_null($return_address)) {
            throw new InvalidArgumentException('non-nullable return_address cannot be null');
        }
        $this->container['return_address'] = $return_address;

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


