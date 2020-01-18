<?php
/**
 * Category
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
 * Category Class Doc Comment
 *
 * @category Class
 * @package  YNAB
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Category implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'categoryGroupId' => 'string',
        'name' => 'string',
        'hidden' => 'bool',
        'originalCategoryGroupId' => 'string',
        'note' => 'string',
        'budgeted' => 'int',
        'activity' => 'int',
        'balance' => 'int',
        'goalType' => 'string',
        'goalCreationMonth' => '\DateTime',
        'goalTarget' => 'int',
        'goalTargetMonth' => '\DateTime',
        'goalPercentageComplete' => 'int',
        'deleted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'categoryGroupId' => 'uuid',
        'name' => null,
        'hidden' => null,
        'originalCategoryGroupId' => 'uuid',
        'note' => null,
        'budgeted' => 'int64',
        'activity' => 'int64',
        'balance' => 'int64',
        'goalType' => null,
        'goalCreationMonth' => 'date',
        'goalTarget' => 'int64',
        'goalTargetMonth' => 'date',
        'goalPercentageComplete' => 'int32',
        'deleted' => null
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
        'categoryGroupId' => 'category_group_id',
        'name' => 'name',
        'hidden' => 'hidden',
        'originalCategoryGroupId' => 'original_category_group_id',
        'note' => 'note',
        'budgeted' => 'budgeted',
        'activity' => 'activity',
        'balance' => 'balance',
        'goalType' => 'goal_type',
        'goalCreationMonth' => 'goal_creation_month',
        'goalTarget' => 'goal_target',
        'goalTargetMonth' => 'goal_target_month',
        'goalPercentageComplete' => 'goal_percentage_complete',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'categoryGroupId' => 'setCategoryGroupId',
        'name' => 'setName',
        'hidden' => 'setHidden',
        'originalCategoryGroupId' => 'setOriginalCategoryGroupId',
        'note' => 'setNote',
        'budgeted' => 'setBudgeted',
        'activity' => 'setActivity',
        'balance' => 'setBalance',
        'goalType' => 'setGoalType',
        'goalCreationMonth' => 'setGoalCreationMonth',
        'goalTarget' => 'setGoalTarget',
        'goalTargetMonth' => 'setGoalTargetMonth',
        'goalPercentageComplete' => 'setGoalPercentageComplete',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'categoryGroupId' => 'getCategoryGroupId',
        'name' => 'getName',
        'hidden' => 'getHidden',
        'originalCategoryGroupId' => 'getOriginalCategoryGroupId',
        'note' => 'getNote',
        'budgeted' => 'getBudgeted',
        'activity' => 'getActivity',
        'balance' => 'getBalance',
        'goalType' => 'getGoalType',
        'goalCreationMonth' => 'getGoalCreationMonth',
        'goalTarget' => 'getGoalTarget',
        'goalTargetMonth' => 'getGoalTargetMonth',
        'goalPercentageComplete' => 'getGoalPercentageComplete',
        'deleted' => 'getDeleted'
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

    const GOAL_TYPE_TB = 'TB';
    const GOAL_TYPE_TBD = 'TBD';
    const GOAL_TYPE_MF = 'MF';
    const GOAL_TYPE_NEED = 'NEED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGoalTypeAllowableValues()
    {
        return [
            self::GOAL_TYPE_TB,
            self::GOAL_TYPE_TBD,
            self::GOAL_TYPE_MF,
            self::GOAL_TYPE_NEED,
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
        $this->container['categoryGroupId'] = isset($data['categoryGroupId']) ? $data['categoryGroupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['originalCategoryGroupId'] = isset($data['originalCategoryGroupId']) ? $data['originalCategoryGroupId'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['budgeted'] = isset($data['budgeted']) ? $data['budgeted'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['goalType'] = isset($data['goalType']) ? $data['goalType'] : null;
        $this->container['goalCreationMonth'] = isset($data['goalCreationMonth']) ? $data['goalCreationMonth'] : null;
        $this->container['goalTarget'] = isset($data['goalTarget']) ? $data['goalTarget'] : null;
        $this->container['goalTargetMonth'] = isset($data['goalTargetMonth']) ? $data['goalTargetMonth'] : null;
        $this->container['goalPercentageComplete'] = isset($data['goalPercentageComplete']) ? $data['goalPercentageComplete'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
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
        if ($this->container['categoryGroupId'] === null) {
            $invalidProperties[] = "'categoryGroupId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['hidden'] === null) {
            $invalidProperties[] = "'hidden' can't be null";
        }
        if ($this->container['budgeted'] === null) {
            $invalidProperties[] = "'budgeted' can't be null";
        }
        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        $allowedValues = $this->getGoalTypeAllowableValues();
        if (!is_null($this->container['goalType']) && !in_array($this->container['goalType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'goalType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
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
     * Gets categoryGroupId
     *
     * @return string
     */
    public function getCategoryGroupId()
    {
        return $this->container['categoryGroupId'];
    }

    /**
     * Sets categoryGroupId
     *
     * @param string $categoryGroupId categoryGroupId
     *
     * @return $this
     */
    public function setCategoryGroupId($categoryGroupId)
    {
        $this->container['categoryGroupId'] = $categoryGroupId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden Whether or not the category is hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets originalCategoryGroupId
     *
     * @return string|null
     */
    public function getOriginalCategoryGroupId()
    {
        return $this->container['originalCategoryGroupId'];
    }

    /**
     * Sets originalCategoryGroupId
     *
     * @param string|null $originalCategoryGroupId If category is hidden this is the id of the category group it originally belonged to before it was hidden.
     *
     * @return $this
     */
    public function setOriginalCategoryGroupId($originalCategoryGroupId)
    {
        $this->container['originalCategoryGroupId'] = $originalCategoryGroupId;

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
     * @param string|null $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets budgeted
     *
     * @return int
     */
    public function getBudgeted()
    {
        return $this->container['budgeted'];
    }

    /**
     * Sets budgeted
     *
     * @param int $budgeted Budgeted amount in milliunits format
     *
     * @return $this
     */
    public function setBudgeted($budgeted)
    {
        $this->container['budgeted'] = $budgeted;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return int
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param int $activity Activity amount in milliunits format
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int $balance Balance in milliunits format
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets goalType
     *
     * @return string|null
     */
    public function getGoalType()
    {
        return $this->container['goalType'];
    }

    /**
     * Sets goalType
     *
     * @param string|null $goalType The type of goal, if the category has a goal (TB=Target Category Balance, TBD=Target Category Balance by Date, MF=Monthly Funding)
     *
     * @return $this
     */
    public function setGoalType($goalType)
    {
        $allowedValues = $this->getGoalTypeAllowableValues();
        if (!is_null($goalType) && !in_array($goalType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'goalType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['goalType'] = $goalType;

        return $this;
    }

    /**
     * Gets goalCreationMonth
     *
     * @return \DateTime|null
     */
    public function getGoalCreationMonth()
    {
        return $this->container['goalCreationMonth'];
    }

    /**
     * Sets goalCreationMonth
     *
     * @param \DateTime|null $goalCreationMonth The month a goal was created
     *
     * @return $this
     */
    public function setGoalCreationMonth($goalCreationMonth)
    {
        $this->container['goalCreationMonth'] = $goalCreationMonth;

        return $this;
    }

    /**
     * Gets goalTarget
     *
     * @return int|null
     */
    public function getGoalTarget()
    {
        return $this->container['goalTarget'];
    }

    /**
     * Sets goalTarget
     *
     * @param int|null $goalTarget The goal target amount in milliunits
     *
     * @return $this
     */
    public function setGoalTarget($goalTarget)
    {
        $this->container['goalTarget'] = $goalTarget;

        return $this;
    }

    /**
     * Gets goalTargetMonth
     *
     * @return \DateTime|null
     */
    public function getGoalTargetMonth()
    {
        return $this->container['goalTargetMonth'];
    }

    /**
     * Sets goalTargetMonth
     *
     * @param \DateTime|null $goalTargetMonth If the goal type is 'TBD' (Target Category Balance by Date), this is the target month for the goal to be completed
     *
     * @return $this
     */
    public function setGoalTargetMonth($goalTargetMonth)
    {
        $this->container['goalTargetMonth'] = $goalTargetMonth;

        return $this;
    }

    /**
     * Gets goalPercentageComplete
     *
     * @return int|null
     */
    public function getGoalPercentageComplete()
    {
        return $this->container['goalPercentageComplete'];
    }

    /**
     * Sets goalPercentageComplete
     *
     * @param int|null $goalPercentageComplete The percentage completion of the goal
     *
     * @return $this
     */
    public function setGoalPercentageComplete($goalPercentageComplete)
    {
        $this->container['goalPercentageComplete'] = $goalPercentageComplete;

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
     * @param bool $deleted Whether or not the category has been deleted.  Deleted categories will only be included in delta requests.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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


