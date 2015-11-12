<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;

class ServiceController extends Controller
{

    public function actionCreate(){
        return $this->render('create');
    }
}