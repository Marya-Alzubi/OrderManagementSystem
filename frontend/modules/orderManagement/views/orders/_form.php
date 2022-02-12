<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use frontend\modules\orderManagement\models\Customers;

/* @var $this yii\web\View */
/* @var $model frontend\modules\orderManagement\models\Orders */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <?= $form->field($model, 'order_amount')->textInput() ?>

    <?= $form->field($model, 'order_description')->textInput(['maxlength' => true]) ?>

    <?php
    $dataCustomers=ArrayHelper::map(Customers::find()->all(), 'id', 'name');
    ?>

    <?= $form->field($model, 'customer_id')->dropDownList($dataCustomers, ["prompt" => "Select"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
