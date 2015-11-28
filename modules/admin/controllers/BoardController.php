<?php

namespace app\modules\admin\controllers;

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