<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\CarwashForm;
use app\modules\admin\models\Service;
use app\modules\admin\models\Vehicle;
use yii\helpers\Json;
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
        $vehicles = Vehicle::find()->indexBy('id')->all();
        $services = Service::find()->indexBy('id')->all();
        if($model->load(Yii::$app->request->post()) and $model->validate()) {

        }
        return $this->render('create', [
            'model' => $model,
            'vehicles' => $vehicles,
            'services' => $services
        ]);
    }

    public function actionCreateAjax(){
        $model = new CarwashForm();
        if(Yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post()) and $model->validate()) {
                $response = [
                    'model' => $model
                ];
                echo Json::encode($response);
                Yii::$app->end();
            }else{
                $response = [
                    'model' => $model
                ];
                echo Json::encode($response);
                Yii::$app->end();
            }
        }
    }
}