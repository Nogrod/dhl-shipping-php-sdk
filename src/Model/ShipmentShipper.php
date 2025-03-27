<?php

/**
 * ShipmentShipper
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
 * ShipmentShipper Class Doc Comment
 *
 * @description Shipper information, including contact information and address. Alternatively, a predefined shipper reference can be used.
 * @package  Dhl\Rest\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ShipmentShipper implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Shipment_shipper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name1' => 'string',
        'name2' => 'string',
        'name3' => 'string',
        'address_street' => 'string',
        'address_house' => 'string',
        'postal_code' => 'string',
        'city' => 'string',
        'country' => '\Dhl\Rest\Shipping\Model\Country',
        'contact_name' => 'string',
        'email' => 'string',
        'shipper_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name1' => null,
        'name2' => null,
        'name3' => null,
        'address_street' => null,
        'address_house' => null,
        'postal_code' => null,
        'city' => null,
        'country' => null,
        'contact_name' => null,
        'email' => null,
        'shipper_ref' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name1' => false,
        'name2' => false,
        'name3' => false,
        'address_street' => false,
        'address_house' => false,
        'postal_code' => false,
        'city' => false,
        'country' => false,
        'contact_name' => false,
        'email' => false,
        'shipper_ref' => false
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
        'name1' => 'name1',
        'name2' => 'name2',
        'name3' => 'name3',
        'address_street' => 'addressStreet',
        'address_house' => 'addressHouse',
        'postal_code' => 'postalCode',
        'city' => 'city',
        'country' => 'country',
        'contact_name' => 'contactName',
        'email' => 'email',
        'shipper_ref' => 'shipperRef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name1' => 'setName1',
        'name2' => 'setName2',
        'name3' => 'setName3',
        'address_street' => 'setAddressStreet',
        'address_house' => 'setAddressHouse',
        'postal_code' => 'setPostalCode',
        'city' => 'setCity',
        'country' => 'setCountry',
        'contact_name' => 'setContactName',
        'email' => 'setEmail',
        'shipper_ref' => 'setShipperRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name1' => 'getName1',
        'name2' => 'getName2',
        'name3' => 'getName3',
        'address_street' => 'getAddressStreet',
        'address_house' => 'getAddressHouse',
        'postal_code' => 'getPostalCode',
        'city' => 'getCity',
        'country' => 'getCountry',
        'contact_name' => 'getContactName',
        'email' => 'getEmail',
        'shipper_ref' => 'getShipperRef'
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
        $this->setIfExists('name1', $data ?? [], null);
        $this->setIfExists('name2', $data ?? [], null);
        $this->setIfExists('name3', $data ?? [], null);
        $this->setIfExists('address_street', $data ?? [], null);
        $this->setIfExists('address_house', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('contact_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('shipper_ref', $data ?? [], null);
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

        if (!is_null($this->container['name1']) && (mb_strlen($this->container['name1']) > 50)) {
            $invalidProperties[] = "invalid value for 'name1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name1']) && (mb_strlen($this->container['name1']) < 1)) {
            $invalidProperties[] = "invalid value for 'name1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name2']) && (mb_strlen($this->container['name2']) > 50)) {
            $invalidProperties[] = "invalid value for 'name2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name2']) && (mb_strlen($this->container['name2']) < 1)) {
            $invalidProperties[] = "invalid value for 'name2', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name3']) && (mb_strlen($this->container['name3']) > 50)) {
            $invalidProperties[] = "invalid value for 'name3', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name3']) && (mb_strlen($this->container['name3']) < 1)) {
            $invalidProperties[] = "invalid value for 'name3', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_street']) && (mb_strlen($this->container['address_street']) > 50)) {
            $invalidProperties[] = "invalid value for 'address_street', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address_street']) && (mb_strlen($this->container['address_street']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_street', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_house']) && (mb_strlen($this->container['address_house']) > 10)) {
            $invalidProperties[] = "invalid value for 'address_house', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['address_house']) && (mb_strlen($this->container['address_house']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_house', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['postal_code']) && !preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", $this->container['postal_code'])) {
            $invalidProperties[] = "invalid value for 'postal_code', must be conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 40)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['contact_name']) && (mb_strlen($this->container['contact_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'contact_name', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['contact_name']) && (mb_strlen($this->container['contact_name']) < 3)) {
            $invalidProperties[] = "invalid value for 'contact_name', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 80)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 3)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['shipper_ref']) && (mb_strlen($this->container['shipper_ref']) > 50)) {
            $invalidProperties[] = "invalid value for 'shipper_ref', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['shipper_ref']) && (mb_strlen($this->container['shipper_ref']) < 0)) {
            $invalidProperties[] = "invalid value for 'shipper_ref', the character length must be bigger than or equal to 0.";
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
     * Gets name1
     *
     * @return string|null
     */
    public function getName1(): ?string
    {
        return $this->container['name1'];
    }

    /**
     * Sets name1
     *
     * @param string|null $name1 Name1. Line 1 of name information
     *
     * @return $this
     */
    public function setName1(?string $name1): static
    {
        if (is_null($name1)) {
            throw new InvalidArgumentException('non-nullable name1 cannot be null');
        }
        if ((mb_strlen($name1) > 50)) {
            throw new InvalidArgumentException('invalid length for $name1 when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name1) < 1)) {
            throw new InvalidArgumentException('invalid length for $name1 when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['name1'] = $name1;

        return $this;
    }

    /**
     * Gets name2
     *
     * @return string|null
     */
    public function getName2(): ?string
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string|null $name2 An optional, additional line of name information
     *
     * @return $this
     */
    public function setName2(?string $name2): static
    {
        if (is_null($name2)) {
            throw new InvalidArgumentException('non-nullable name2 cannot be null');
        }
        if ((mb_strlen($name2) > 50)) {
            throw new InvalidArgumentException('invalid length for $name2 when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name2) < 1)) {
            throw new InvalidArgumentException('invalid length for $name2 when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets name3
     *
     * @return string|null
     */
    public function getName3(): ?string
    {
        return $this->container['name3'];
    }

    /**
     * Sets name3
     *
     * @param string|null $name3 An optional, additional line of name information
     *
     * @return $this
     */
    public function setName3(?string $name3): static
    {
        if (is_null($name3)) {
            throw new InvalidArgumentException('non-nullable name3 cannot be null');
        }
        if ((mb_strlen($name3) > 50)) {
            throw new InvalidArgumentException('invalid length for $name3 when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name3) < 1)) {
            throw new InvalidArgumentException('invalid length for $name3 when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['name3'] = $name3;

        return $this;
    }

    /**
     * Gets address_street
     *
     * @return string|null
     */
    public function getAddressStreet(): ?string
    {
        return $this->container['address_street'];
    }

    /**
     * Sets address_street
     *
     * @param string|null $address_street Line 1 of the street address. This is just the street name. Can also include house number.
     *
     * @return $this
     */
    public function setAddressStreet(?string $address_street): static
    {
        if (is_null($address_street)) {
            throw new InvalidArgumentException('non-nullable address_street cannot be null');
        }
        if ((mb_strlen($address_street) > 50)) {
            throw new InvalidArgumentException('invalid length for $address_street when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($address_street) < 1)) {
            throw new InvalidArgumentException('invalid length for $address_street when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['address_street'] = $address_street;

        return $this;
    }

    /**
     * Gets address_house
     *
     * @return string|null
     */
    public function getAddressHouse(): ?string
    {
        return $this->container['address_house'];
    }

    /**
     * Sets address_house
     *
     * @param string|null $address_house Line 1 of the street address. This is just the house number. Can be added to street name instead.
     *
     * @return $this
     */
    public function setAddressHouse(?string $address_house): static
    {
        if (is_null($address_house)) {
            throw new InvalidArgumentException('non-nullable address_house cannot be null');
        }
        if ((mb_strlen($address_house) > 10)) {
            throw new InvalidArgumentException('invalid length for $address_house when calling ShipmentShipper., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($address_house) < 1)) {
            throw new InvalidArgumentException('invalid length for $address_house when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['address_house'] = $address_house;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Mandatory for all countries but Ireland that use a postal code system.
     *
     * @return $this
     */
    public function setPostalCode(?string $postal_code): static
    {
        if (is_null($postal_code)) {
            throw new InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        if ((mb_strlen($postal_code) > 10)) {
            throw new InvalidArgumentException('invalid length for $postal_code when calling ShipmentShipper., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($postal_code) < 3)) {
            throw new InvalidArgumentException('invalid length for $postal_code when calling ShipmentShipper., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", ObjectSerializer::toString($postal_code)))) {
            throw new InvalidArgumentException("invalid value for \$postal_code when calling ShipmentShipper., must conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.");
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return $this
     */
    public function setCity(?string $city): static
    {
        if (is_null($city)) {
            throw new InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 40)) {
            throw new InvalidArgumentException('invalid length for $city when calling ShipmentShipper., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($city) < 1)) {
            throw new InvalidArgumentException('invalid length for $city when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Dhl\Rest\Shipping\Model\Country|null
     */
    public function getCountry(): ?\Dhl\Rest\Shipping\Model\Country
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Dhl\Rest\Shipping\Model\Country|null $country country
     *
     * @return $this
     */
    public function setCountry(?\Dhl\Rest\Shipping\Model\Country $country): static
    {
        if (is_null($country)) {
            throw new InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string|null
     */
    public function getContactName(): ?string
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string|null $contact_name optional contact name. (this is not the primary name printed on label)
     *
     * @return $this
     */
    public function setContactName(?string $contact_name): static
    {
        if (is_null($contact_name)) {
            throw new InvalidArgumentException('non-nullable contact_name cannot be null');
        }
        if ((mb_strlen($contact_name) > 80)) {
            throw new InvalidArgumentException('invalid length for $contact_name when calling ShipmentShipper., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($contact_name) < 3)) {
            throw new InvalidArgumentException('invalid length for $contact_name when calling ShipmentShipper., must be bigger than or equal to 3.');
        }

        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Optional contact email address of the shipper
     *
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 80)) {
            throw new InvalidArgumentException('invalid length for $email when calling ShipmentShipper., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($email) < 3)) {
            throw new InvalidArgumentException('invalid length for $email when calling ShipmentShipper., must be bigger than or equal to 3.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets shipper_ref
     *
     * @return string|null
     */
    public function getShipperRef(): ?string
    {
        return $this->container['shipper_ref'];
    }

    /**
     * Sets shipper_ref
     *
     * @param string|null $shipper_ref Reference string to the shipper data configured in GKP(GeschÃ¤ftskundenportal - Business Costumer Portal).
     *
     * @return $this
     */
    public function setShipperRef(?string $shipper_ref): static
    {
        if (is_null($shipper_ref)) {
            throw new InvalidArgumentException('non-nullable shipper_ref cannot be null');
        }
        if ((mb_strlen($shipper_ref) > 50)) {
            throw new InvalidArgumentException('invalid length for $shipper_ref when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($shipper_ref) < 0)) {
            throw new InvalidArgumentException('invalid length for $shipper_ref when calling ShipmentShipper., must be bigger than or equal to 0.');
        }

        $this->container['shipper_ref'] = $shipper_ref;

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


