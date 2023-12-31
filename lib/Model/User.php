<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'login' => 'string',
        'name' => 'string',
        'email' => 'string',
        'avatar_url' => 'string',
        'beta_user' => 'bool',
        'time_zone' => 'string',
        'week_start_day' => 'int',
        'is_reviewing_transactions' => 'bool',
        'base_currency_code' => 'string',
        'always_show_base_currency' => 'bool',
        'using_multiple_currencies' => 'bool',
        'available_accounts' => 'int',
        'available_budgets' => 'int',
        'forecast_last_updated_at' => 'string',
        'forecast_last_accessed_at' => 'string',
        'forecast_start_date' => 'string',
        'forecast_end_date' => 'string',
        'forecast_defer_recalculate' => 'bool',
        'forecast_needs_recalculate' => 'bool',
        'last_logged_in_at' => 'string',
        'last_activity_at' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string'
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
        'login' => null,
        'name' => null,
        'email' => null,
        'avatar_url' => null,
        'beta_user' => null,
        'time_zone' => null,
        'week_start_day' => null,
        'is_reviewing_transactions' => null,
        'base_currency_code' => null,
        'always_show_base_currency' => null,
        'using_multiple_currencies' => null,
        'available_accounts' => null,
        'available_budgets' => null,
        'forecast_last_updated_at' => null,
        'forecast_last_accessed_at' => null,
        'forecast_start_date' => null,
        'forecast_end_date' => null,
        'forecast_defer_recalculate' => null,
        'forecast_needs_recalculate' => null,
        'last_logged_in_at' => null,
        'last_activity_at' => null,
        'created_at' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'login' => false,
		'name' => false,
		'email' => false,
		'avatar_url' => false,
		'beta_user' => false,
		'time_zone' => false,
		'week_start_day' => false,
		'is_reviewing_transactions' => false,
		'base_currency_code' => false,
		'always_show_base_currency' => false,
		'using_multiple_currencies' => false,
		'available_accounts' => false,
		'available_budgets' => false,
		'forecast_last_updated_at' => false,
		'forecast_last_accessed_at' => false,
		'forecast_start_date' => false,
		'forecast_end_date' => false,
		'forecast_defer_recalculate' => false,
		'forecast_needs_recalculate' => false,
		'last_logged_in_at' => false,
		'last_activity_at' => false,
		'created_at' => false,
		'updated_at' => false
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
        'login' => 'login',
        'name' => 'name',
        'email' => 'email',
        'avatar_url' => 'avatar_url',
        'beta_user' => 'beta_user',
        'time_zone' => 'time_zone',
        'week_start_day' => 'week_start_day',
        'is_reviewing_transactions' => 'is_reviewing_transactions',
        'base_currency_code' => 'base_currency_code',
        'always_show_base_currency' => 'always_show_base_currency',
        'using_multiple_currencies' => 'using_multiple_currencies',
        'available_accounts' => 'available_accounts',
        'available_budgets' => 'available_budgets',
        'forecast_last_updated_at' => 'forecast_last_updated_at',
        'forecast_last_accessed_at' => 'forecast_last_accessed_at',
        'forecast_start_date' => 'forecast_start_date',
        'forecast_end_date' => 'forecast_end_date',
        'forecast_defer_recalculate' => 'forecast_defer_recalculate',
        'forecast_needs_recalculate' => 'forecast_needs_recalculate',
        'last_logged_in_at' => 'last_logged_in_at',
        'last_activity_at' => 'last_activity_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'login' => 'setLogin',
        'name' => 'setName',
        'email' => 'setEmail',
        'avatar_url' => 'setAvatarUrl',
        'beta_user' => 'setBetaUser',
        'time_zone' => 'setTimeZone',
        'week_start_day' => 'setWeekStartDay',
        'is_reviewing_transactions' => 'setIsReviewingTransactions',
        'base_currency_code' => 'setBaseCurrencyCode',
        'always_show_base_currency' => 'setAlwaysShowBaseCurrency',
        'using_multiple_currencies' => 'setUsingMultipleCurrencies',
        'available_accounts' => 'setAvailableAccounts',
        'available_budgets' => 'setAvailableBudgets',
        'forecast_last_updated_at' => 'setForecastLastUpdatedAt',
        'forecast_last_accessed_at' => 'setForecastLastAccessedAt',
        'forecast_start_date' => 'setForecastStartDate',
        'forecast_end_date' => 'setForecastEndDate',
        'forecast_defer_recalculate' => 'setForecastDeferRecalculate',
        'forecast_needs_recalculate' => 'setForecastNeedsRecalculate',
        'last_logged_in_at' => 'setLastLoggedInAt',
        'last_activity_at' => 'setLastActivityAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'login' => 'getLogin',
        'name' => 'getName',
        'email' => 'getEmail',
        'avatar_url' => 'getAvatarUrl',
        'beta_user' => 'getBetaUser',
        'time_zone' => 'getTimeZone',
        'week_start_day' => 'getWeekStartDay',
        'is_reviewing_transactions' => 'getIsReviewingTransactions',
        'base_currency_code' => 'getBaseCurrencyCode',
        'always_show_base_currency' => 'getAlwaysShowBaseCurrency',
        'using_multiple_currencies' => 'getUsingMultipleCurrencies',
        'available_accounts' => 'getAvailableAccounts',
        'available_budgets' => 'getAvailableBudgets',
        'forecast_last_updated_at' => 'getForecastLastUpdatedAt',
        'forecast_last_accessed_at' => 'getForecastLastAccessedAt',
        'forecast_start_date' => 'getForecastStartDate',
        'forecast_end_date' => 'getForecastEndDate',
        'forecast_defer_recalculate' => 'getForecastDeferRecalculate',
        'forecast_needs_recalculate' => 'getForecastNeedsRecalculate',
        'last_logged_in_at' => 'getLastLoggedInAt',
        'last_activity_at' => 'getLastActivityAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('login', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('avatar_url', $data ?? [], null);
        $this->setIfExists('beta_user', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('week_start_day', $data ?? [], null);
        $this->setIfExists('is_reviewing_transactions', $data ?? [], null);
        $this->setIfExists('base_currency_code', $data ?? [], null);
        $this->setIfExists('always_show_base_currency', $data ?? [], null);
        $this->setIfExists('using_multiple_currencies', $data ?? [], null);
        $this->setIfExists('available_accounts', $data ?? [], null);
        $this->setIfExists('available_budgets', $data ?? [], null);
        $this->setIfExists('forecast_last_updated_at', $data ?? [], null);
        $this->setIfExists('forecast_last_accessed_at', $data ?? [], null);
        $this->setIfExists('forecast_start_date', $data ?? [], null);
        $this->setIfExists('forecast_end_date', $data ?? [], null);
        $this->setIfExists('forecast_defer_recalculate', $data ?? [], null);
        $this->setIfExists('forecast_needs_recalculate', $data ?? [], null);
        $this->setIfExists('last_logged_in_at', $data ?? [], null);
        $this->setIfExists('last_activity_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * @param int|null $id The unique identifier of the user.
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
     * Gets login
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login The user's username.
     *
     * @return self
     */
    public function setLogin($login)
    {
        if (is_null($login)) {
            throw new \InvalidArgumentException('non-nullable login cannot be null');
        }
        $this->container['login'] = $login;

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
     * @param string|null $name The full name of the user, although not all users will have a name set.
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The user's email address.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string|null
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string|null $avatar_url The URL to the user's avatar.
     *
     * @return self
     */
    public function setAvatarUrl($avatar_url)
    {
        if (is_null($avatar_url)) {
            throw new \InvalidArgumentException('non-nullable avatar_url cannot be null');
        }
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets beta_user
     *
     * @return bool|null
     */
    public function getBetaUser()
    {
        return $this->container['beta_user'];
    }

    /**
     * Sets beta_user
     *
     * @param bool|null $beta_user Whether the user has opted in to beta features.
     *
     * @return self
     */
    public function setBetaUser($beta_user)
    {
        if (is_null($beta_user)) {
            throw new \InvalidArgumentException('non-nullable beta_user cannot be null');
        }
        $this->container['beta_user'] = $beta_user;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone The user's time zone.
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets week_start_day
     *
     * @return int|null
     */
    public function getWeekStartDay()
    {
        return $this->container['week_start_day'];
    }

    /**
     * Sets week_start_day
     *
     * @param int|null $week_start_day The day of the week the user wishes their calendars to start on. A number between 0 and 6, where 0 is Sunday and 6 is Saturday.
     *
     * @return self
     */
    public function setWeekStartDay($week_start_day)
    {
        if (is_null($week_start_day)) {
            throw new \InvalidArgumentException('non-nullable week_start_day cannot be null');
        }
        $this->container['week_start_day'] = $week_start_day;

        return $this;
    }

    /**
     * Gets is_reviewing_transactions
     *
     * @return bool|null
     */
    public function getIsReviewingTransactions()
    {
        return $this->container['is_reviewing_transactions'];
    }

    /**
     * Sets is_reviewing_transactions
     *
     * @param bool|null $is_reviewing_transactions Whether the user wants to review new transactions, transfer transactions or categorisation.
     *
     * @return self
     */
    public function setIsReviewingTransactions($is_reviewing_transactions)
    {
        if (is_null($is_reviewing_transactions)) {
            throw new \InvalidArgumentException('non-nullable is_reviewing_transactions cannot be null');
        }
        $this->container['is_reviewing_transactions'] = $is_reviewing_transactions;

        return $this;
    }

    /**
     * Gets base_currency_code
     *
     * @return string|null
     */
    public function getBaseCurrencyCode()
    {
        return $this->container['base_currency_code'];
    }

    /**
     * Sets base_currency_code
     *
     * @param string|null $base_currency_code The user's base currency.
     *
     * @return self
     */
    public function setBaseCurrencyCode($base_currency_code)
    {
        if (is_null($base_currency_code)) {
            throw new \InvalidArgumentException('non-nullable base_currency_code cannot be null');
        }
        $this->container['base_currency_code'] = $base_currency_code;

        return $this;
    }

    /**
     * Gets always_show_base_currency
     *
     * @return bool|null
     */
    public function getAlwaysShowBaseCurrency()
    {
        return $this->container['always_show_base_currency'];
    }

    /**
     * Sets always_show_base_currency
     *
     * @param bool|null $always_show_base_currency Whether the user wants to see all accounts in their base currency instead of the native account currency.
     *
     * @return self
     */
    public function setAlwaysShowBaseCurrency($always_show_base_currency)
    {
        if (is_null($always_show_base_currency)) {
            throw new \InvalidArgumentException('non-nullable always_show_base_currency cannot be null');
        }
        $this->container['always_show_base_currency'] = $always_show_base_currency;

        return $this;
    }

    /**
     * Gets using_multiple_currencies
     *
     * @return bool|null
     */
    public function getUsingMultipleCurrencies()
    {
        return $this->container['using_multiple_currencies'];
    }

    /**
     * Sets using_multiple_currencies
     *
     * @param bool|null $using_multiple_currencies Whether the user has multiple currencies in use across their account.
     *
     * @return self
     */
    public function setUsingMultipleCurrencies($using_multiple_currencies)
    {
        if (is_null($using_multiple_currencies)) {
            throw new \InvalidArgumentException('non-nullable using_multiple_currencies cannot be null');
        }
        $this->container['using_multiple_currencies'] = $using_multiple_currencies;

        return $this;
    }

    /**
     * Gets available_accounts
     *
     * @return int|null
     */
    public function getAvailableAccounts()
    {
        return $this->container['available_accounts'];
    }

    /**
     * Sets available_accounts
     *
     * @param int|null $available_accounts The user's total number of available accounts.
     *
     * @return self
     */
    public function setAvailableAccounts($available_accounts)
    {
        if (is_null($available_accounts)) {
            throw new \InvalidArgumentException('non-nullable available_accounts cannot be null');
        }
        $this->container['available_accounts'] = $available_accounts;

        return $this;
    }

    /**
     * Gets available_budgets
     *
     * @return int|null
     */
    public function getAvailableBudgets()
    {
        return $this->container['available_budgets'];
    }

    /**
     * Sets available_budgets
     *
     * @param int|null $available_budgets The user's total number of available budgets.
     *
     * @return self
     */
    public function setAvailableBudgets($available_budgets)
    {
        if (is_null($available_budgets)) {
            throw new \InvalidArgumentException('non-nullable available_budgets cannot be null');
        }
        $this->container['available_budgets'] = $available_budgets;

        return $this;
    }

    /**
     * Gets forecast_last_updated_at
     *
     * @return string|null
     */
    public function getForecastLastUpdatedAt()
    {
        return $this->container['forecast_last_updated_at'];
    }

    /**
     * Sets forecast_last_updated_at
     *
     * @param string|null $forecast_last_updated_at When the user's forecast was last updated.
     *
     * @return self
     */
    public function setForecastLastUpdatedAt($forecast_last_updated_at)
    {
        if (is_null($forecast_last_updated_at)) {
            throw new \InvalidArgumentException('non-nullable forecast_last_updated_at cannot be null');
        }
        $this->container['forecast_last_updated_at'] = $forecast_last_updated_at;

        return $this;
    }

    /**
     * Gets forecast_last_accessed_at
     *
     * @return string|null
     */
    public function getForecastLastAccessedAt()
    {
        return $this->container['forecast_last_accessed_at'];
    }

    /**
     * Sets forecast_last_accessed_at
     *
     * @param string|null $forecast_last_accessed_at When the user's forecast was last accessed.
     *
     * @return self
     */
    public function setForecastLastAccessedAt($forecast_last_accessed_at)
    {
        if (is_null($forecast_last_accessed_at)) {
            throw new \InvalidArgumentException('non-nullable forecast_last_accessed_at cannot be null');
        }
        $this->container['forecast_last_accessed_at'] = $forecast_last_accessed_at;

        return $this;
    }

    /**
     * Gets forecast_start_date
     *
     * @return string|null
     */
    public function getForecastStartDate()
    {
        return $this->container['forecast_start_date'];
    }

    /**
     * Sets forecast_start_date
     *
     * @param string|null $forecast_start_date The date that the user's forecast starts.
     *
     * @return self
     */
    public function setForecastStartDate($forecast_start_date)
    {
        if (is_null($forecast_start_date)) {
            throw new \InvalidArgumentException('non-nullable forecast_start_date cannot be null');
        }
        $this->container['forecast_start_date'] = $forecast_start_date;

        return $this;
    }

    /**
     * Gets forecast_end_date
     *
     * @return string|null
     */
    public function getForecastEndDate()
    {
        return $this->container['forecast_end_date'];
    }

    /**
     * Sets forecast_end_date
     *
     * @param string|null $forecast_end_date The date that the user's forecast ends.
     *
     * @return self
     */
    public function setForecastEndDate($forecast_end_date)
    {
        if (is_null($forecast_end_date)) {
            throw new \InvalidArgumentException('non-nullable forecast_end_date cannot be null');
        }
        $this->container['forecast_end_date'] = $forecast_end_date;

        return $this;
    }

    /**
     * Gets forecast_defer_recalculate
     *
     * @return bool|null
     */
    public function getForecastDeferRecalculate()
    {
        return $this->container['forecast_defer_recalculate'];
    }

    /**
     * Sets forecast_defer_recalculate
     *
     * @param bool|null $forecast_defer_recalculate Whether the user's forecast recalculation should be deferred.
     *
     * @return self
     */
    public function setForecastDeferRecalculate($forecast_defer_recalculate)
    {
        if (is_null($forecast_defer_recalculate)) {
            throw new \InvalidArgumentException('non-nullable forecast_defer_recalculate cannot be null');
        }
        $this->container['forecast_defer_recalculate'] = $forecast_defer_recalculate;

        return $this;
    }

    /**
     * Gets forecast_needs_recalculate
     *
     * @return bool|null
     */
    public function getForecastNeedsRecalculate()
    {
        return $this->container['forecast_needs_recalculate'];
    }

    /**
     * Sets forecast_needs_recalculate
     *
     * @param bool|null $forecast_needs_recalculate Whether the user's forecast needs to be recalculated.
     *
     * @return self
     */
    public function setForecastNeedsRecalculate($forecast_needs_recalculate)
    {
        if (is_null($forecast_needs_recalculate)) {
            throw new \InvalidArgumentException('non-nullable forecast_needs_recalculate cannot be null');
        }
        $this->container['forecast_needs_recalculate'] = $forecast_needs_recalculate;

        return $this;
    }

    /**
     * Gets last_logged_in_at
     *
     * @return string|null
     */
    public function getLastLoggedInAt()
    {
        return $this->container['last_logged_in_at'];
    }

    /**
     * Sets last_logged_in_at
     *
     * @param string|null $last_logged_in_at When the user last logged into PocketSmith.
     *
     * @return self
     */
    public function setLastLoggedInAt($last_logged_in_at)
    {
        if (is_null($last_logged_in_at)) {
            throw new \InvalidArgumentException('non-nullable last_logged_in_at cannot be null');
        }
        $this->container['last_logged_in_at'] = $last_logged_in_at;

        return $this;
    }

    /**
     * Gets last_activity_at
     *
     * @return string|null
     */
    public function getLastActivityAt()
    {
        return $this->container['last_activity_at'];
    }

    /**
     * Sets last_activity_at
     *
     * @param string|null $last_activity_at When the user last interacted with PocketSmith, via any application or the API.
     *
     * @return self
     */
    public function setLastActivityAt($last_activity_at)
    {
        if (is_null($last_activity_at)) {
            throw new \InvalidArgumentException('non-nullable last_activity_at cannot be null');
        }
        $this->container['last_activity_at'] = $last_activity_at;

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
     * @param string|null $created_at When the user signed up.
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
     * @param string|null $updated_at When the user was last updated.
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


