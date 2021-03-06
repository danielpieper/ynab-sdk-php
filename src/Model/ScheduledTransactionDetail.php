<?php
/**
 * ScheduledTransactionDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  YNAB
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YNAB\Model;

use \ArrayAccess;
use \YNAB\ObjectSerializer;

/**
 * ScheduledTransactionDetail Class Doc Comment
 *
 * @category Class
 * @package  YNAB
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ScheduledTransactionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduledTransactionDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'dateFirst' => '\DateTime',
        'dateNext' => '\DateTime',
        'frequency' => 'string',
        'amount' => 'int',
        'memo' => 'string',
        'flagColor' => 'string',
        'accountId' => 'string',
        'payeeId' => 'string',
        'categoryId' => 'string',
        'transferAccountId' => 'string',
        'deleted' => 'bool',
        'accountName' => 'string',
        'payeeName' => 'string',
        'categoryName' => 'string',
        'subtransactions' => '\YNAB\Model\ScheduledSubTransaction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'dateFirst' => 'date',
        'dateNext' => 'date',
        'frequency' => null,
        'amount' => 'int64',
        'memo' => null,
        'flagColor' => null,
        'accountId' => 'uuid',
        'payeeId' => 'uuid',
        'categoryId' => 'uuid',
        'transferAccountId' => 'uuid',
        'deleted' => null,
        'accountName' => null,
        'payeeName' => null,
        'categoryName' => null,
        'subtransactions' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'dateFirst' => 'date_first',
        'dateNext' => 'date_next',
        'frequency' => 'frequency',
        'amount' => 'amount',
        'memo' => 'memo',
        'flagColor' => 'flag_color',
        'accountId' => 'account_id',
        'payeeId' => 'payee_id',
        'categoryId' => 'category_id',
        'transferAccountId' => 'transfer_account_id',
        'deleted' => 'deleted',
        'accountName' => 'account_name',
        'payeeName' => 'payee_name',
        'categoryName' => 'category_name',
        'subtransactions' => 'subtransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'dateFirst' => 'setDateFirst',
        'dateNext' => 'setDateNext',
        'frequency' => 'setFrequency',
        'amount' => 'setAmount',
        'memo' => 'setMemo',
        'flagColor' => 'setFlagColor',
        'accountId' => 'setAccountId',
        'payeeId' => 'setPayeeId',
        'categoryId' => 'setCategoryId',
        'transferAccountId' => 'setTransferAccountId',
        'deleted' => 'setDeleted',
        'accountName' => 'setAccountName',
        'payeeName' => 'setPayeeName',
        'categoryName' => 'setCategoryName',
        'subtransactions' => 'setSubtransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'dateFirst' => 'getDateFirst',
        'dateNext' => 'getDateNext',
        'frequency' => 'getFrequency',
        'amount' => 'getAmount',
        'memo' => 'getMemo',
        'flagColor' => 'getFlagColor',
        'accountId' => 'getAccountId',
        'payeeId' => 'getPayeeId',
        'categoryId' => 'getCategoryId',
        'transferAccountId' => 'getTransferAccountId',
        'deleted' => 'getDeleted',
        'accountName' => 'getAccountName',
        'payeeName' => 'getPayeeName',
        'categoryName' => 'getCategoryName',
        'subtransactions' => 'getSubtransactions'
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

    const FREQUENCY_NEVER = 'never';
    const FREQUENCY_DAILY = 'daily';
    const FREQUENCY_WEEKLY = 'weekly';
    const FREQUENCY_EVERY_OTHER_WEEK = 'everyOtherWeek';
    const FREQUENCY_TWICE_A_MONTH = 'twiceAMonth';
    const FREQUENCY_EVERY4_WEEKS = 'every4Weeks';
    const FREQUENCY_MONTHLY = 'monthly';
    const FREQUENCY_EVERY_OTHER_MONTH = 'everyOtherMonth';
    const FREQUENCY_EVERY3_MONTHS = 'every3Months';
    const FREQUENCY_EVERY4_MONTHS = 'every4Months';
    const FREQUENCY_TWICE_A_YEAR = 'twiceAYear';
    const FREQUENCY_YEARLY = 'yearly';
    const FREQUENCY_EVERY_OTHER_YEAR = 'everyOtherYear';
    const FLAG_COLOR_RED = 'red';
    const FLAG_COLOR_ORANGE = 'orange';
    const FLAG_COLOR_YELLOW = 'yellow';
    const FLAG_COLOR_GREEN = 'green';
    const FLAG_COLOR_BLUE = 'blue';
    const FLAG_COLOR_PURPLE = 'purple';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_NEVER,
            self::FREQUENCY_DAILY,
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_EVERY_OTHER_WEEK,
            self::FREQUENCY_TWICE_A_MONTH,
            self::FREQUENCY_EVERY4_WEEKS,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_EVERY_OTHER_MONTH,
            self::FREQUENCY_EVERY3_MONTHS,
            self::FREQUENCY_EVERY4_MONTHS,
            self::FREQUENCY_TWICE_A_YEAR,
            self::FREQUENCY_YEARLY,
            self::FREQUENCY_EVERY_OTHER_YEAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlagColorAllowableValues()
    {
        return [
            self::FLAG_COLOR_RED,
            self::FLAG_COLOR_ORANGE,
            self::FLAG_COLOR_YELLOW,
            self::FLAG_COLOR_GREEN,
            self::FLAG_COLOR_BLUE,
            self::FLAG_COLOR_PURPLE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dateFirst'] = isset($data['dateFirst']) ? $data['dateFirst'] : null;
        $this->container['dateNext'] = isset($data['dateNext']) ? $data['dateNext'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['flagColor'] = isset($data['flagColor']) ? $data['flagColor'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['payeeId'] = isset($data['payeeId']) ? $data['payeeId'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['transferAccountId'] = isset($data['transferAccountId']) ? $data['transferAccountId'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['payeeName'] = isset($data['payeeName']) ? $data['payeeName'] : null;
        $this->container['categoryName'] = isset($data['categoryName']) ? $data['categoryName'] : null;
        $this->container['subtransactions'] = isset($data['subtransactions']) ? $data['subtransactions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['dateFirst'] === null) {
            $invalidProperties[] = "'dateFirst' can't be null";
        }
        if ($this->container['dateNext'] === null) {
            $invalidProperties[] = "'dateNext' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        $allowedValues = $this->getFlagColorAllowableValues();
        if (!is_null($this->container['flagColor']) && !in_array($this->container['flagColor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flagColor', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
        }
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
        if ($this->container['subtransactions'] === null) {
            $invalidProperties[] = "'subtransactions' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets dateFirst
     *
     * @return \DateTime
     */
    public function getDateFirst()
    {
        return $this->container['dateFirst'];
    }

    /**
     * Sets dateFirst
     *
     * @param \DateTime $dateFirst The first date for which the Scheduled Transaction was scheduled.
     *
     * @return $this
     */
    public function setDateFirst($dateFirst)
    {
        $this->container['dateFirst'] = $dateFirst;

        return $this;
    }

    /**
     * Gets dateNext
     *
     * @return \DateTime
     */
    public function getDateNext()
    {
        return $this->container['dateNext'];
    }

    /**
     * Sets dateNext
     *
     * @param \DateTime $dateNext The next date for which the Scheduled Transaction is scheduled.
     *
     * @return $this
     */
    public function setDateNext($dateNext)
    {
        $this->container['dateNext'] = $dateNext;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The scheduled transaction amount in milliunits format
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets flagColor
     *
     * @return string|null
     */
    public function getFlagColor()
    {
        return $this->container['flagColor'];
    }

    /**
     * Sets flagColor
     *
     * @param string|null $flagColor The scheduled transaction flag
     *
     * @return $this
     */
    public function setFlagColor($flagColor)
    {
        $allowedValues = $this->getFlagColorAllowableValues();
        if (!is_null($flagColor) && !in_array($flagColor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flagColor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flagColor'] = $flagColor;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets payeeId
     *
     * @return string|null
     */
    public function getPayeeId()
    {
        return $this->container['payeeId'];
    }

    /**
     * Sets payeeId
     *
     * @param string|null $payeeId payeeId
     *
     * @return $this
     */
    public function setPayeeId($payeeId)
    {
        $this->container['payeeId'] = $payeeId;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets transferAccountId
     *
     * @return string|null
     */
    public function getTransferAccountId()
    {
        return $this->container['transferAccountId'];
    }

    /**
     * Sets transferAccountId
     *
     * @param string|null $transferAccountId If a transfer, the account_id which the scheduled transaction transfers to
     *
     * @return $this
     */
    public function setTransferAccountId($transferAccountId)
    {
        $this->container['transferAccountId'] = $transferAccountId;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Whether or not the scheduled transaction has been deleted.  Deleted scheduled transactions will only be included in delta requests.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string $accountName accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets payeeName
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payeeName'];
    }

    /**
     * Sets payeeName
     *
     * @param string|null $payeeName payeeName
     *
     * @return $this
     */
    public function setPayeeName($payeeName)
    {
        $this->container['payeeName'] = $payeeName;

        return $this;
    }

    /**
     * Gets categoryName
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
     * Sets categoryName
     *
     * @param string|null $categoryName categoryName
     *
     * @return $this
     */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;

        return $this;
    }

    /**
     * Gets subtransactions
     *
     * @return \YNAB\Model\ScheduledSubTransaction[]
     */
    public function getSubtransactions()
    {
        return $this->container['subtransactions'];
    }

    /**
     * Sets subtransactions
     *
     * @param \YNAB\Model\ScheduledSubTransaction[] $subtransactions If a split scheduled transaction, the subtransactions.
     *
     * @return $this
     */
    public function setSubtransactions($subtransactions)
    {
        $this->container['subtransactions'] = $subtransactions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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


