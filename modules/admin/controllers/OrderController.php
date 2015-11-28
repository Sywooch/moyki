<?php
namespace app\modules\admin\controllers;

use app\modules\admin\models\OrderForm;
use yii\web\Controller;
use Yii;

class OrderController extends Controller
{
    public function actionIndex(){
        return $this->render('index', [

        ]);
    }

    public function actionOrder(){
        $model = new OrderForm();
        return $this->render('order', [
            'model' => $model
        ]);
    }

}