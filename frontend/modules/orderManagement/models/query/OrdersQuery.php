<?php

namespace frontend\modules\orderManagement\models\query;

/**
 * This is the ActiveQuery class for [[\frontend\modules\orderManagement\models\Orders]].
 *
 * @see \frontend\modules\orderManagement\models\Orders
 */
class OrdersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \frontend\modules\orderManagement\models\Orders[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \frontend\modules\orderManagement\models\Orders|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
