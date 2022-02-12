<?php

namespace frontend\modules\orderManagement\controllers;

use yii\web\Controller;

/**
 * Default controller for the `orderManagement` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
