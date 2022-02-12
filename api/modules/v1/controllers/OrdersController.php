<?php

namespace api\modules\v1\controllers;

use yii\web\Controller;
use yii\helpers\ArrayHelper;
use frontend\modules\orderManagement\models\Orders;
use yii\helpers\Json;

/**
 * Default controller for the `v1` module
 */
class OrdersController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    
    public function actionIndex()
    {
        $dborders = New Orders;
        $orders = $dborders->find()->joinWith('customer')->all();

        $data = [];
        foreach($orders as $order){
          
            $data[] = ['id'=> $order->id ,
                        'order_number'=>$order->order_number,
                        'order_amount'=>$order->order_amount,
                        'order_description'=>$order->order_description,
                        'order_created_at'=>$order->created_at,
                        'order_updated_at'=>$order->updated_at,
                        'customer'=>$order->customer  
                    ];
        }   
        return  Json::encode($data);
    }
}
