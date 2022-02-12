<?php

namespace frontend\modules\orderManagement\models;

use Yii;

/**
 * This is the model class for table "{{%customers}}".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $phone
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property Orders[] $orders
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%customers}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone','name'], 'required'],
            [['phone'], 'integer'],
            ['name' ,'unique' ,'targetAttribute' => ['name'], 'message' => 'Customer name must be unique.'],
            [['name'], 'string', 'max' => 255],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery|\frontend\modules\orderManagement\models\query\OrdersQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['customer_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \frontend\modules\orderManagement\models\query\CustomersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\modules\orderManagement\models\query\CustomersQuery(get_called_class());
    }
}
