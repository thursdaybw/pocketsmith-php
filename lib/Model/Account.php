<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'currency_code' => 'string',
        'type' => 'string',
        'is_net_worth' => 'bool',
        'primary_transaction_account' => '\OpenAPI\Client\Model\TransactionAccount',
        'primary_scenario' => '\OpenAPI\Client\Model\Scenario',
        'transaction_accounts' => '\OpenAPI\Client\Model\TransactionAccount[]',
        'scenarios' => '\OpenAPI\Client\Model\Scenario[]',
        'created_at' => 'string',
        'updated_at' => 'string',
        'current_balance' => 'float',
        'current_balance_date' => 'string',
        'current_balance_in_base_currency' => 'float',
        'current_balance_exchange_rate' => 'float',
        'safe_balance' => 'float',
        'safe_balance_in_base_currency' => 'float'
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
        'title' => null,
        'currency_code' => null,
        'type' => null,
        'is_net_worth' => null,
        'primary_transaction_account' => null,
        'primary_scenario' => null,
        'transaction_accounts' => null,
        'scenarios' => null,
        'created_at' => null,
        'updated_at' => null,
        'current_balance' => null,
        'current_balance_date' => null,
        'current_balance_in_base_currency' => null,
        'current_balance_exchange_rate' => null,
        'safe_balance' => null,
        'safe_balance_in_base_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'title' => false,
		'currency_code' => false,
		'type' => false,
		'is_net_worth' => false,
		'primary_transaction_account' => false,
		'primary_scenario' => false,
		'transaction_accounts' => false,
		'scenarios' => false,
		'created_at' => false,
		'updated_at' => false,
		'current_balance' => false,
		'current_balance_date' => false,
		'current_balance_in_base_currency' => false,
		'current_balance_exchange_rate' => false,
		'safe_balance' => false,
		'safe_balance_in_base_currency' => false
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
        'title' => 'title',
        'currency_code' => 'currency_code',
        'type' => 'type',
        'is_net_worth' => 'is_net_worth',
        'primary_transaction_account' => 'primary_transaction_account',
        'primary_scenario' => 'primary_scenario',
        'transaction_accounts' => 'transaction_accounts',
        'scenarios' => 'scenarios',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'current_balance' => 'current_balance',
        'current_balance_date' => 'current_balance_date',
        'current_balance_in_base_currency' => 'current_balance_in_base_currency',
        'current_balance_exchange_rate' => 'current_balance_exchange_rate',
        'safe_balance' => 'safe_balance',
        'safe_balance_in_base_currency' => 'safe_balance_in_base_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'currency_code' => 'setCurrencyCode',
        'type' => 'setType',
        'is_net_worth' => 'setIsNetWorth',
        'primary_transaction_account' => 'setPrimaryTransactionAccount',
        'primary_scenario' => 'setPrimaryScenario',
        'transaction_accounts' => 'setTransactionAccounts',
        'scenarios' => 'setScenarios',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'current_balance' => 'setCurrentBalance',
        'current_balance_date' => 'setCurrentBalanceDate',
        'current_balance_in_base_currency' => 'setCurrentBalanceInBaseCurrency',
        'current_balance_exchange_rate' => 'setCurrentBalanceExchangeRate',
        'safe_balance' => 'setSafeBalance',
        'safe_balance_in_base_currency' => 'setSafeBalanceInBaseCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'currency_code' => 'getCurrencyCode',
        'type' => 'getType',
        'is_net_worth' => 'getIsNetWorth',
        'primary_transaction_account' => 'getPrimaryTransactionAccount',
        'primary_scenario' => 'getPrimaryScenario',
        'transaction_accounts' => 'getTransactionAccounts',
        'scenarios' => 'getScenarios',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'current_balance' => 'getCurrentBalance',
        'current_balance_date' => 'getCurrentBalanceDate',
        'current_balance_in_base_currency' => 'getCurrentBalanceInBaseCurrency',
        'current_balance_exchange_rate' => 'getCurrentBalanceExchangeRate',
        'safe_balance' => 'getSafeBalance',
        'safe_balance_in_base_currency' => 'getSafeBalanceInBaseCurrency'
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_net_worth', $data ?? [], null);
        $this->setIfExists('primary_transaction_account', $data ?? [], null);
        $this->setIfExists('primary_scenario', $data ?? [], null);
        $this->setIfExists('transaction_accounts', $data ?? [], null);
        $this->setIfExists('scenarios', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('current_balance', $data ?? [], null);
        $this->setIfExists('current_balance_date', $data ?? [], null);
        $this->setIfExists('current_balance_in_base_currency', $data ?? [], null);
        $this->setIfExists('current_balance_exchange_rate', $data ?? [], null);
        $this->setIfExists('safe_balance', $data ?? [], null);
        $this->setIfExists('safe_balance_in_base_currency', $data ?? [], null);
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
     * @param int|null $id The unique identifier of the account.
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the account.
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
     * @param string|null $currency_code The currency code for the account.
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
     * @param string|null $type The type of the account.
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
     * Gets is_net_worth
     *
     * @return bool|null
     */
    public function getIsNetWorth()
    {
        return $this->container['is_net_worth'];
    }

    /**
     * Sets is_net_worth
     *
     * @param bool|null $is_net_worth Whether the account is a net worth asset.
     *
     * @return self
     */
    public function setIsNetWorth($is_net_worth)
    {
        if (is_null($is_net_worth)) {
            throw new \InvalidArgumentException('non-nullable is_net_worth cannot be null');
        }
        $this->container['is_net_worth'] = $is_net_worth;

        return $this;
    }

    /**
     * Gets primary_transaction_account
     *
     * @return \OpenAPI\Client\Model\TransactionAccount|null
     */
    public function getPrimaryTransactionAccount()
    {
        return $this->container['primary_transaction_account'];
    }

    /**
     * Sets primary_transaction_account
     *
     * @param \OpenAPI\Client\Model\TransactionAccount|null $primary_transaction_account primary_transaction_account
     *
     * @return self
     */
    public function setPrimaryTransactionAccount($primary_transaction_account)
    {
        if (is_null($primary_transaction_account)) {
            throw new \InvalidArgumentException('non-nullable primary_transaction_account cannot be null');
        }
        $this->container['primary_transaction_account'] = $primary_transaction_account;

        return $this;
    }

    /**
     * Gets primary_scenario
     *
     * @return \OpenAPI\Client\Model\Scenario|null
     */
    public function getPrimaryScenario()
    {
        return $this->container['primary_scenario'];
    }

    /**
     * Sets primary_scenario
     *
     * @param \OpenAPI\Client\Model\Scenario|null $primary_scenario primary_scenario
     *
     * @return self
     */
    public function setPrimaryScenario($primary_scenario)
    {
        if (is_null($primary_scenario)) {
            throw new \InvalidArgumentException('non-nullable primary_scenario cannot be null');
        }
        $this->container['primary_scenario'] = $primary_scenario;

        return $this;
    }

    /**
     * Gets transaction_accounts
     *
     * @return \OpenAPI\Client\Model\TransactionAccount[]|null
     */
    public function getTransactionAccounts()
    {
        return $this->container['transaction_accounts'];
    }

    /**
     * Sets transaction_accounts
     *
     * @param \OpenAPI\Client\Model\TransactionAccount[]|null $transaction_accounts All transaction accounts that compose the account, including the primary.
     *
     * @return self
     */
    public function setTransactionAccounts($transaction_accounts)
    {
        if (is_null($transaction_accounts)) {
            throw new \InvalidArgumentException('non-nullable transaction_accounts cannot be null');
        }
        $this->container['transaction_accounts'] = $transaction_accounts;

        return $this;
    }

    /**
     * Gets scenarios
     *
     * @return \OpenAPI\Client\Model\Scenario[]|null
     */
    public function getScenarios()
    {
        return $this->container['scenarios'];
    }

    /**
     * Sets scenarios
     *
     * @param \OpenAPI\Client\Model\Scenario[]|null $scenarios All scenarios that compose the account, including the primary.
     *
     * @return self
     */
    public function setScenarios($scenarios)
    {
        if (is_null($scenarios)) {
            throw new \InvalidArgumentException('non-nullable scenarios cannot be null');
        }
        $this->container['scenarios'] = $scenarios;

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
     * @param string|null $created_at When the account was created.
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
     * @param string|null $updated_at When the account was last updated.
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
     * @param float|null $current_balance The current balance of the account.
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
     * @param string|null $current_balance_date The date of the current balance.
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
     * @param float|null $current_balance_in_base_currency The current balance of the account in the user's base currency.
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
     * @param float|null $current_balance_exchange_rate The exchange rate between the account's currency and the user's base currency, when different. If the currencies are the same, null is returned.
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
     * @param float|null $safe_balance The current safe balance, if safe balance is activated on the account. If safe balance is not activated, then null is returned.
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
     * @param float|null $safe_balance_in_base_currency The current safe balance in the user's base currency, if safe balance is activated on the account. If safe balance is not activated, then null is returned.
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


