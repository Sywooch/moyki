<?php

namespace app\modules\owner\controllers;

use yii\web\Controller;
use Yii;

class BoardController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionBoard(){
        return $this->render('board');
    }
}