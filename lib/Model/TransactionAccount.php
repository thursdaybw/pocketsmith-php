<?php
/**
 * TransactionAccount
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
 * TransactionAccount Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'number' => 'string',
        'current_balance' => 'float',
        'current_balance_date' => 'string',
        'current_balance_in_base_currency' => 'float',
        'current_balance_exchange_rate' => 'float',
        'safe_balance' => 'float',
        'safe_balance_in_base_currency' => 'float',
        'starting_balance' => 'float',
        'starting_balance_date' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'institution' => '\OpenAPI\Client\Model\Institution',
        'currency_code' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'number' => null,
        'current_balance' => null,
        'current_balance_date' => null,
        'current_balance_in_base_currency' => null,
        'current_balance_exchange_rate' => null,
        'safe_balance' => null,
        'safe_balance_in_base_currency' => null,
        'starting_balance' => null,
        'starting_balance_date' => null,
        'created_at' => null,
        'updated_at' => null,
        'institution' => null,
        'currency_code' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'number' => false,
		'current_balance' => false,
		'current_balance_date' => false,
		'current_balance_in_base_currency' => false,
		'current_balance_exchange_rate' => false,
		'safe_balance' => false,
		'safe_balance_in_base_currency' => false,
		'starting_balance' => false,
		'starting_balance_date' => false,
		'created_at' => false,
		'updated_at' => false,
		'institution' => false,
		'currency_code' => false,
		'type' => false
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
        'id' => 'id',
        'name' => 'name',
        'number' => 'number',
        'current_balance' => 'current_balance',
        'current_balance_date' => 'current_balance_date',
        'current_balance_in_base_currency' => 'current_balance_in_base_currency',
        'current_balance_exchange_rate' => 'current_balance_exchange_rate',
        'safe_balance' => 'safe_balance',
        'safe_balance_in_base_currency' => 'safe_balance_in_base_currency',
        'starting_balance' => 'starting_balance',
        'starting_balance_date' => 'starting_balance_date',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'institution' => 'institution',
        'currency_code' => 'currency_code',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'number' => 'setNumber',
        'current_balance' => 'setCurrentBalance',
        'current_balance_date' => 'setCurrentBalanceDate',
        'current_balance_in_base_currency' => 'setCurrentBalanceInBaseCurrency',
        'current_balance_exchange_rate' => 'setCurrentBalanceExchangeRate',
        'safe_balance' => 'setSafeBalance',
        'safe_balance_in_base_currency' => 'setSafeBalanceInBaseCurrency',
        'starting_balance' => 'setStartingBalance',
        'starting_balance_date' => 'setStartingBalanceDate',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'institution' => 'setInstitution',
        'currency_code' => 'setCurrencyCode',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'number' => 'getNumber',
        'current_balance' => 'getCurrentBalance',
        'current_balance_date' => 'getCurrentBalanceDate',
        'current_balance_in_base_currency' => 'getCurrentBalanceInBaseCurrency',
        'current_balance_exchange_rate' => 'getCurrentBalanceExchangeRate',
        'safe_balance' => 'getSafeBalance',
        'safe_balance_in_base_currency' => 'getSafeBalanceInBaseCurrency',
        'starting_balance' => 'getStartingBalance',
        'starting_balance_date' => 'getStartingBalanceDate',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'institution' => 'getInstitution',
        'currency_code' => 'getCurrencyCode',
        'type' => 'getType'
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

    public const TYPE_BANK = 'bank';
    public const TYPE_CREDITS = 'credits';
    public const TYPE_CASH = 'cash';
    public const TYPE_STOCKS = 'stocks';
    public const TYPE_MORTGAGE = 'mortgage';
    public const TYPE_LOANS = 'loans';
    public const TYPE_VEHICLE = 'vehicle';
    public const TYPE_PROPERTY = 'property';
    public const TYPE_INSURANCE = 'insurance';
    public const TYPE_OTHER_ASSET = 'other_asset';
    public const TYPE_OTHER_LIABILITY = 'other_liability';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BANK,
            self::TYPE_CREDITS,
            self::TYPE_CASH,
            self::TYPE_STOCKS,
            self::TYPE_MORTGAGE,
            self::TYPE_LOANS,
            self::TYPE_VEHICLE,
            self::TYPE_PROPERTY,
            self::TYPE_INSURANCE,
            self::TYPE_OTHER_ASSET,
            self::TYPE_OTHER_LIABILITY,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('current_balance', $data ?? [], null);
        $this->setIfExists('current_balance_date', $data ?? [], null);
        $this->setIfExists('current_balance_in_base_currency', $data ?? [], null);
        $this->setIfExists('current_balance_exchange_rate', $data ?? [], null);
        $this->setIfExists('safe_balance', $data ?? [], null);
        $this->setIfExists('safe_balance_in_base_currency', $data ?? [], null);
        $this->setIfExists('starting_balance', $data ?? [], null);
        $this->setIfExists('starting_balance_date', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('institution', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets current_balance
     *
     * @return float|null
     */
    public function getCurrentBalance()
    {
        return $this->container['current_balance'];
    }

    /**
     * Sets current_balance
     *
     * @param float|null $current_balance current_balance
     *
     * @return self
     */
    public function setCurrentBalance($current_balance)
    {
        if (is_null($current_balance)) {
            throw new \InvalidArgumentException('non-nullable current_balance cannot be null');
        }
        $this->container['current_balance'] = $current_balance;

        return $this;
    }

    /**
     * Gets current_balance_date
     *
     * @return string|null
     */
    public function getCurrentBalanceDate()
    {
        return $this->container['current_balance_date'];
    }

    /**
     * Sets current_balance_date
     *
     * @param string|null $current_balance_date current_balance_date
     *
     * @return self
     */
    public function setCurrentBalanceDate($current_balance_date)
    {
        if (is_null($current_balance_date)) {
            throw new \InvalidArgumentException('non-nullable current_balance_date cannot be null');
        }
        $this->container['current_balance_date'] = $current_balance_date;

        return $this;
    }

    /**
     * Gets current_balance_in_base_currency
     *
     * @return float|null
     */
    public function getCurrentBalanceInBaseCurrency()
    {
        return $this->container['current_balance_in_base_currency'];
    }

    /**
     * Sets current_balance_in_base_currency
     *
     * @param float|null $current_balance_in_base_currency The current balance of the transaction account in the user's base currency.
     *
     * @return self
     */
    public function setCurrentBalanceInBaseCurrency($current_balance_in_base_currency)
    {
        if (is_null($current_balance_in_base_currency)) {
            throw new \InvalidArgumentException('non-nullable current_balance_in_base_currency cannot be null');
        }
        $this->container['current_balance_in_base_currency'] = $current_balance_in_base_currency;

        return $this;
    }

    /**
     * Gets current_balance_exchange_rate
     *
     * @return float|null
     */
    public function getCurrentBalanceExchangeRate()
    {
        return $this->container['current_balance_exchange_rate'];
    }

    /**
     * Sets current_balance_exchange_rate
     *
     * @param float|null $current_balance_exchange_rate The exchange rate between the transaction account's currency and the user's base currency, when different. If the currencies are the same, null is returned.
     *
     * @return self
     */
    public function setCurrentBalanceExchangeRate($current_balance_exchange_rate)
    {
        if (is_null($current_balance_exchange_rate)) {
            throw new \InvalidArgumentException('non-nullable current_balance_exchange_rate cannot be null');
        }
        $this->container['current_balance_exchange_rate'] = $current_balance_exchange_rate;

        return $this;
    }

    /**
     * Gets safe_balance
     *
     * @return float|null
     */
    public function getSafeBalance()
    {
        return $this->container['safe_balance'];
    }

    /**
     * Sets safe_balance
     *
     * @param float|null $safe_balance The current safe balance, if safe balance is activated and available for the transaction account. If safe balance is not available, then null is returned.
     *
     * @return self
     */
    public function setSafeBalance($safe_balance)
    {
        if (is_null($safe_balance)) {
            throw new \InvalidArgumentException('non-nullable safe_balance cannot be null');
        }
        $this->container['safe_balance'] = $safe_balance;

        return $this;
    }

    /**
     * Gets safe_balance_in_base_currency
     *
     * @return float|null
     */
    public function getSafeBalanceInBaseCurrency()
    {
        return $this->container['safe_balance_in_base_currency'];
    }

    /**
     * Sets safe_balance_in_base_currency
     *
     * @param float|null $safe_balance_in_base_currency The current safe balance in the user's base currency, if safe balance is activated and available for the transaction account. If safe balance is not available, then null is returned.
     *
     * @return self
     */
    public function setSafeBalanceInBaseCurrency($safe_balance_in_base_currency)
    {
        if (is_null($safe_balance_in_base_currency)) {
            throw new \InvalidArgumentException('non-nullable safe_balance_in_base_currency cannot be null');
        }
        $this->container['safe_balance_in_base_currency'] = $safe_balance_in_base_currency;

        return $this;
    }

    /**
     * Gets starting_balance
     *
     * @return float|null
     */
    public function getStartingBalance()
    {
        return $this->container['starting_balance'];
    }

    /**
     * Sets starting_balance
     *
     * @param float|null $starting_balance starting_balance
     *
     * @return self
     */
    public function setStartingBalance($starting_balance)
    {
        if (is_null($starting_balance)) {
            throw new \InvalidArgumentException('non-nullable starting_balance cannot be null');
        }
        $this->container['starting_balance'] = $starting_balance;

        return $this;
    }

    /**
     * Gets starting_balance_date
     *
     * @return string|null
     */
    public function getStartingBalanceDate()
    {
        return $this->container['starting_balance_date'];
    }

    /**
     * Sets starting_balance_date
     *
     * @param string|null $starting_balance_date starting_balance_date
     *
     * @return self
     */
    public function setStartingBalanceDate($starting_balance_date)
    {
        if (is_null($starting_balance_date)) {
            throw new \InvalidArgumentException('non-nullable starting_balance_date cannot be null');
        }
        $this->container['starting_balance_date'] = $starting_balance_date;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets institution
     *
     * @return \OpenAPI\Client\Model\Institution|null
     */
    public function getInstitution()
    {
        return $this->container['institution'];
    }

    /**
     * Sets institution
     *
     * @param \OpenAPI\Client\Model\Institution|null $institution institution
     *
     * @return self
     */
    public function setInstitution($institution)
    {
        if (is_null($institution)) {
            throw new \InvalidArgumentException('non-nullable institution cannot be null');
        }
        $this->container['institution'] = $institution;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code The currency that the account is in. This is determined by the account that the transaction account belongs to.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the transaction account.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


