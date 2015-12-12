<?php

namespace app\modules\owner\controllers;

use Yii;
use yii\web\Controller;

class OwnerController extends Controller{

     public function actionOwner(){
         return $this->render('owner', []);
     }

     public function actionIndex(){
         return $this->render('index', []);
     }

    public function actionBoard(){
        return $this->render('board', []);
    }

    public function actionDiscounts(){
        return $this->render('discounts', []);
    }

    public function actionHistory(){
        return $this->render('history', []);
    }

    public function actionStatistic(){
        return $this->render('statistic', []);
    }

    public function actionOrders(){
        return $this->render('orders', []);
    }

    public function actionAdministrators(){
        return $this->render('administrators', []);
    }



 }