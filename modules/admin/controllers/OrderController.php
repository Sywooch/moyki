<?php
namespace app\modules\admin\controllers;

use app\modules\admin\models\OrderForm;
use yii\web\Controller;
use Yii;

class OrderController extends Controller
{

    public function actionOrders(){
        $model = new OrderForm();
        return $this->render('orders', [
            'model' => $model
        ]);
    }


}