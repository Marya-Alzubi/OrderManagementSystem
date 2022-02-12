<?php

namespace api\modules\v1\controllers;

use yii\web\Controller;
use yii\helpers\ArrayHelper;
use frontend\modules\orderManagement\models\Customers;
use yii\helpers\Json;

/**
 * Default controller for the `v1` module
 */
class CustomersController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    
    public function actionIndex()
    {
        $dbcustomers = New Customers;
        $customers = $dbcustomers->find()->joinWith('orders')->all();

        $data = [];
        foreach($customers as $customer){
          
            $data[] = ['id'=> $customer->id ,
                        'customer_name'=>$customer->name,
                        'customer_phone'=>$customer->phone,
                        'customer_created_at'=>$customer->created_at,
                        'customer_updated_at'=>$customer->updated_at,
                        'orders'=>$customer->orders  
                    ];
        }   
        return  Json::encode($data);
    }
}
