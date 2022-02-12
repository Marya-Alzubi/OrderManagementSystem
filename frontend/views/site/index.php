<?php

/** @var yii\web\View $this */

$this->title = 'Order Management System';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <img width="300px" src="https://syarah.com/assets/images/logoN.svg" alt="syaralogo">
        <h2 class="index-title">Welcome to Syara "Order Management System"</h2>

        <p class="index-subtitle">Please choose one from the following:</p>

        <div class="d-flex justify-content-center">
        <p><a class="btn btn-lg orange mr-4" href="/orderManagement/customers/index">Customers Crud</a></p>
        <p><a class="btn btn-lg navy" href="/orderManagement/orders/index">Orders Crud</a></p>
        </div>
    </div>

</div>