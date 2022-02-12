<?php

namespace frontend\modules\orderManagement\models;

use Yii;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property int|null $order_number
 * @property float|null $order_amount
 * @property string|null $order_description
 * @property int $customer_id
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property Customers $customer
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_number','order_amount','order_description'], 'required'],
            ['order_number' ,'unique' ,'targetAttribute' => ['order_number'], 'message' => 'Order number must be unique.'],
            [['order_number', 'customer_id'], 'integer'],
            [['order_amount'], 'number', 'max' => 2000],
            [['customer_id'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['order_description'], 'string', 'max' => 255],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['customer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_number' => 'Order Number',
            'order_amount' => 'Order Amount',
            'order_description' => 'Order Description',
            'customer_id' => 'Customer Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery|\frontend\modules\orderManagement\models\query\CustomersQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['id' => 'customer_id']);
    }

    /**
     * {@inheritdoc}
     * @return \frontend\modules\orderManagement\models\query\OrdersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\modules\orderManagement\models\query\OrdersQuery(get_called_class());
    }
        /*public function save($runValidation = true, $attributeNames = null)
    {
        $isInsert = $this->isNewRecord;
        if ($isInsert) {
            $this->order_number = $this->order_number;
            $this->order_amount = $this->order_amount;
            $this->order_description = $this->order_description;
            $this->customer_id = $this->customer_id;
            $this->updated_at =  "-";
        }
        $saved = parent::save($runValidation, $attributeNames);
        return true;

    }*/
    /*public function update($runValidation = true, $attributeNames = null)
    {
        $isInsert = $this->isNewRecord;
        if ($isInsert) {
            $this->order_number = $this->order_number;
            $this->order_amount = $this->order_amount;
            $this->order_description = $this->order_description;
            $this->customer_id = $this->customer_id;
            date_default_timezone_set('Asia/Amman');
            $this->updated_at = date('Y-m-d H:i:s');
        }
        $saved = parent::update($runValidation, $attributeNames);
        return true;

    }*/
}
