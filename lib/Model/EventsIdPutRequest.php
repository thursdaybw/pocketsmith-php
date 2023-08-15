<?php
/**
 * EventsIdPutRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PocketSmith
 *
 * The PocketSmith API
 *
 * The version of the OpenAPI document: 2.0
 * Contact: api@pocketsmith.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EventsIdPutRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EventsIdPutRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_events__id__put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'behaviour' => 'string',
        'amount' => 'float',
        'repeat_type' => 'string',
        'repeat_interval' => 'int',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'behaviour' => null,
        'amount' => null,
        'repeat_type' => null,
        'repeat_interval' => null,
        'note' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'behaviour' => false,
		'amount' => false,
		'repeat_type' => false,
		'repeat_interval' => false,
		'note' => false
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
        'behaviour' => 'behaviour',
        'amount' => 'amount',
        'repeat_type' => 'repeat_type',
        'repeat_interval' => 'repeat_interval',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'behaviour' => 'setBehaviour',
        'amount' => 'setAmount',
        'repeat_type' => 'setRepeatType',
        'repeat_interval' => 'setRepeatInterval',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'behaviour' => 'getBehaviour',
        'amount' => 'getAmount',
        'repeat_type' => 'getRepeatType',
        'repeat_interval' => 'getRepeatInterval',
        'note' => 'getNote'
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

    public const BEHAVIOUR_ONE = 'one';
    public const BEHAVIOUR_FORWARD = 'forward';
    public const BEHAVIOUR_ALL = 'all';
    public const REPEAT_TYPE_ONCE = 'once';
    public const REPEAT_TYPE_DAILY = 'daily';
    public const REPEAT_TYPE_WEEKLY = 'weekly';
    public const REPEAT_TYPE_FORTNIGHTLY = 'fortnightly';
    public const REPEAT_TYPE_MONTHLY = 'monthly';
    public const REPEAT_TYPE_YEARLY = 'yearly';
    public const REPEAT_TYPE_EACH_WEEKDAY = 'each weekday';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBehaviourAllowableValues()
    {
        return [
            self::BEHAVIOUR_ONE,
            self::BEHAVIOUR_FORWARD,
            self::BEHAVIOUR_ALL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRepeatTypeAllowableValues()
    {
        return [
            self::REPEAT_TYPE_ONCE,
            self::REPEAT_TYPE_DAILY,
            self::REPEAT_TYPE_WEEKLY,
            self::REPEAT_TYPE_FORTNIGHTLY,
            self::REPEAT_TYPE_MONTHLY,
            self::REPEAT_TYPE_YEARLY,
            self::REPEAT_TYPE_EACH_WEEKDAY,
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
        $this->setIfExists('behaviour', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('repeat_type', $data ?? [], null);
        $this->setIfExists('repeat_interval', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
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

        if ($this->container['behaviour'] === null) {
            $invalidProperties[] = "'behaviour' can't be null";
        }
        $allowedValues = $this->getBehaviourAllowableValues();
        if (!is_null($this->container['behaviour']) && !in_array($this->container['behaviour'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'behaviour', must be one of '%s'",
                $this->container['behaviour'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRepeatTypeAllowableValues();
        if (!is_null($this->container['repeat_type']) && !in_array($this->container['repeat_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'repeat_type', must be one of '%s'",
                $this->container['repeat_type'],
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
     * Gets behaviour
     *
     * @return string
     */
    public function getBehaviour()
    {
        return $this->container['behaviour'];
    }

    /**
     * Sets behaviour
     *
     * @param string $behaviour Whether the update applies only to this event, to all events within the series from this event or to all events within the series.
     *
     * @return self
     */
    public function setBehaviour($behaviour)
    {
        if (is_null($behaviour)) {
            throw new \InvalidArgumentException('non-nullable behaviour cannot be null');
        }
        $allowedValues = $this->getBehaviourAllowableValues();
        if (!in_array($behaviour, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'behaviour', must be one of '%s'",
                    $behaviour,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['behaviour'] = $behaviour;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The amount of the event. A positive amount is a credit, and a negative amount is a debit.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets repeat_type
     *
     * @return string|null
     */
    public function getRepeatType()
    {
        return $this->container['repeat_type'];
    }

    /**
     * Sets repeat_type
     *
     * @param string|null $repeat_type The repeat type of the event.
     *
     * @return self
     */
    public function setRepeatType($repeat_type)
    {
        if (is_null($repeat_type)) {
            throw new \InvalidArgumentException('non-nullable repeat_type cannot be null');
        }
        $allowedValues = $this->getRepeatTypeAllowableValues();
        if (!in_array($repeat_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'repeat_type', must be one of '%s'",
                    $repeat_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['repeat_type'] = $repeat_type;

        return $this;
    }

    /**
     * Gets repeat_interval
     *
     * @return int|null
     */
    public function getRepeatInterval()
    {
        return $this->container['repeat_interval'];
    }

    /**
     * Sets repeat_interval
     *
     * @param int|null $repeat_interval The repeat interval of the event.
     *
     * @return self
     */
    public function setRepeatInterval($repeat_interval)
    {
        if (is_null($repeat_interval)) {
            throw new \InvalidArgumentException('non-nullable repeat_interval cannot be null');
        }
        $this->container['repeat_interval'] = $repeat_interval;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note A note for the event.
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

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

