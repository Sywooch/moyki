<?php

namespace app\modules\admin\controllers;


use app\modules\admin\models\Service;
use app\modules\admin\models\ServiceForm;
use yii\web\Controller;
use Yii;
use yii\validators;

use yii\web\UploadedFile;

class ServiceController extends Controller
{

    public function actionCreate()
    {
        $model = new ServiceForm();
            if($model->load(Yii::$app->request->post()) && $model->validate()){

                //create UploadedFile, get file from fileInput
                $modeldb = new Service();

                $modeldb->$image_1->saveAs('uploads/' . $this->image_1->baseName . '.' . $this->image_1->extension);
                $modeldb->$image_2->saveAs('uploads/' . $this->image_2->baseName . '.' . $this->image_2->extension);
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