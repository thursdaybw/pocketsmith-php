<?php
/**
 * UsersIdCategoriesPostRequest
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
 * UsersIdCategoriesPostRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UsersIdCategoriesPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_users__id__categories_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'colour' => 'string',
        'parent_id' => 'int',
        'is_transfer' => 'bool',
        'is_bill' => 'bool',
        'roll_up' => 'bool',
        'refund_behaviour' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'colour' => null,
        'parent_id' => null,
        'is_transfer' => null,
        'is_bill' => null,
        'roll_up' => null,
        'refund_behaviour' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
		'colour' => false,
		'parent_id' => false,
		'is_transfer' => false,
		'is_bill' => false,
		'roll_up' => false,
		'refund_behaviour' => true
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
        'title' => 'title',
        'colour' => 'colour',
        'parent_id' => 'parent_id',
        'is_transfer' => 'is_transfer',
        'is_bill' => 'is_bill',
        'roll_up' => 'roll_up',
        'refund_behaviour' => 'refund_behaviour'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'colour' => 'setColour',
        'parent_id' => 'setParentId',
        'is_transfer' => 'setIsTransfer',
        'is_bill' => 'setIsBill',
        'roll_up' => 'setRollUp',
        'refund_behaviour' => 'setRefundBehaviour'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'colour' => 'getColour',
        'parent_id' => 'getParentId',
        'is_transfer' => 'getIsTransfer',
        'is_bill' => 'getIsBill',
        'roll_up' => 'getRollUp',
        'refund_behaviour' => 'getRefundBehaviour'
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

    public const REFUND_BEHAVIOUR_DEBITS_ARE_DEDUCTIONS = 'debits_are_deductions';
    public const REFUND_BEHAVIOUR_CREDITS_ARE_REFUNDS = 'credits_are_refunds';
    public const REFUND_BEHAVIOUR_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundBehaviourAllowableValues()
    {
        return [
            self::REFUND_BEHAVIOUR_DEBITS_ARE_DEDUCTIONS,
            self::REFUND_BEHAVIOUR_CREDITS_ARE_REFUNDS,
            self::REFUND_BEHAVIOUR_NULL,
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('colour', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('is_transfer', $data ?? [], null);
        $this->setIfExists('is_bill', $data ?? [], null);
        $this->setIfExists('roll_up', $data ?? [], null);
        $this->setIfExists('refund_behaviour', $data ?? [], null);
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        $allowedValues = $this->getRefundBehaviourAllowableValues();
        if (!is_null($this->container['refund_behaviour']) && !in_array($this->container['refund_behaviour'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refund_behaviour', must be one of '%s'",
                $this->container['refund_behaviour'],
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title A title for the category.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets colour
     *
     * @return string|null
     */
    public function getColour()
    {
        return $this->container['colour'];
    }

    /**
     * Sets colour
     *
     * @param string|null $colour A CSS-style hex colour for the category.
     *
     * @return self
     */
    public function setColour($colour)
    {
        if (is_null($colour)) {
            throw new \InvalidArgumentException('non-nullable colour cannot be null');
        }
        $this->container['colour'] = $colour;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id The unique identifier of a category to be the parent of this category.
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets is_transfer
     *
     * @return bool|null
     */
    public function getIsTransfer()
    {
        return $this->container['is_transfer'];
    }

    /**
     * Sets is_transfer
     *
     * @param bool|null $is_transfer Set the category as a transfer category.
     *
     * @return self
     */
    public function setIsTransfer($is_transfer)
    {
        if (is_null($is_transfer)) {
            throw new \InvalidArgumentException('non-nullable is_transfer cannot be null');
        }
        $this->container['is_transfer'] = $is_transfer;

        return $this;
    }

    /**
     * Gets is_bill
     *
     * @return bool|null
     */
    public function getIsBill()
    {
        return $this->container['is_bill'];
    }

    /**
     * Sets is_bill
     *
     * @param bool|null $is_bill Set the category as a bill category.
     *
     * @return self
     */
    public function setIsBill($is_bill)
    {
        if (is_null($is_bill)) {
            throw new \InvalidArgumentException('non-nullable is_bill cannot be null');
        }
        $this->container['is_bill'] = $is_bill;

        return $this;
    }

    /**
     * Gets roll_up
     *
     * @return bool|null
     */
    public function getRollUp()
    {
        return $this->container['roll_up'];
    }

    /**
     * Sets roll_up
     *
     * @param bool|null $roll_up Set the category to be rolled up into its parent category.
     *
     * @return self
     */
    public function setRollUp($roll_up)
    {
        if (is_null($roll_up)) {
            throw new \InvalidArgumentException('non-nullable roll_up cannot be null');
        }
        $this->container['roll_up'] = $roll_up;

        return $this;
    }

    /**
     * Gets refund_behaviour
     *
     * @return string|null
     */
    public function getRefundBehaviour()
    {
        return $this->container['refund_behaviour'];
    }

    /**
     * Sets refund_behaviour
     *
     * @param string|null $refund_behaviour Set the refund behaviour of the category.
     *
     * @return self
     */
    public function setRefundBehaviour($refund_behaviour)
    {
        if (is_null($refund_behaviour)) {
            array_push($this->openAPINullablesSetToNull, 'refund_behaviour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refund_behaviour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRefundBehaviourAllowableValues();
        if (!is_null($refund_behaviour) && !in_array($refund_behaviour, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refund_behaviour', must be one of '%s'",
                    $refund_behaviour,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refund_behaviour'] = $refund_behaviour;

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


