<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;

class AutoController extends Controller
{
    public function actionVehicleAndServices(){
        return $this->render('vehicle_and_services');
    }

    public function actionCreateVehicle(){
        return $this->render('create_vehicle');
    }
}