<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\CarwashForm;
use yii\web\Controller;
use Yii;

class CarwashController extends Controller
{
    public function actionIndex(){
        return $this->render('index', [

        ]);
    }

    public function actionCreate(){
        $model = new CarwashForm();
        return $this->render('create', [
            'model' => $model
        ]);
    }
}