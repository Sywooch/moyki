<?php

namespace app\modules\admin\controllers;

use app\assets\AppAsset;
use app\modules\admin\models\Service;
use app\modules\admin\models\ServiceForm;
use app\modules\admin\models\VehicleForm;
use yii\base\Model;
use yii\web\Controller;
use Yii;
use yii\validators;
use yii\widgets\ActiveForm;

class ServiceController extends Controller
{

    public function actionCreate()
    {
        $model = new ServiceForm();
            if($model->load(Yii::$app->request->post()) && $model->validate()){

                $modeldb = new Service();
//                $modeldb->image_1 = $model->image_1;
//                $modeldb->image_2 = $model->image_2;
                $modeldb->title = $model->title;
                $modeldb->description = $model->description;
                $modeldb->type = $model->type;
                $modeldb->save();

                return $this->render('create', [
                     'service_model' => $model,
                ]);
            }else{
                return $this->render('create', [
                     'service_model' => $model,
                ]);
            }
    }

}