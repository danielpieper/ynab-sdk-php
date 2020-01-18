<?php
/**
 * ScheduledTransactionDetailAllOf
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
 * ScheduledTransactionDetailAllOf Class Doc Comment
 *
 * @category Class
 * @package  YNAB
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ScheduledTransactionDetailAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduledTransactionDetail_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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

