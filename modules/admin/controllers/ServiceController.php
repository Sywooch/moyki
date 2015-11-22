<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Service;
use app\modules\admin\models\ServiceForm;
use yii\web\Controller;
use yii\web\UploadedFile;
use Yii;

class ServiceController extends Controller
{

    public function actionCreate()
    {
        $serviceForm = new ServiceForm();
            if($serviceForm->load(Yii::$app->request->post()) && $serviceForm->validate()){

                //create UploadedFile, get file from fileInput
                $service = new Service();
                $service->title = $serviceForm->title;
                $service->description = $serviceForm->description;
                $service->type = $serviceForm->type;
                $serviceForm->image_1 = UploadedFile::getInstance($serviceForm, 'image_1');
                $serviceForm->image_2 = UploadedFile::getInstance($serviceForm, 'image_2');
                    if($serviceForm->uploadImage($service)) {
                        Yii::$app->session->setFlash('create', 'Услуга успешно создана');
                        return $this->redirect((['/admin/auto/vehicle-and-services']));
                    }

                return $this->render('create', [
                     'service_model' => $serviceForm,
                ]);
            }else{
                return $this->render('create', [
                     'service_model' => $serviceForm,
                ]);
            }

    }

}