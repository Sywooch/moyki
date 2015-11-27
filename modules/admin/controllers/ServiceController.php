<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Service;
use app\modules\admin\models\ServiceForm;
use yii\helpers\Json;
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
                $serviceForm->image_1 = UploadedFile::getInstance($serviceForm, 'image_1');
                $serviceForm->image_2 = UploadedFile::getInstance($serviceForm, 'image_2');
                    if($serviceForm->uploadImage()) {
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

    public function actionEdit($id_service){
        $serviceInstance = Service::findOne($id_service);
        $serviceForm = new ServiceForm();

        $serviceForm->image_1 = $serviceInstance->image_1;
        $serviceForm->image_2 = $serviceInstance->image_2;
        $serviceForm->type = $serviceInstance->type;
        $serviceForm->title = $serviceInstance->title;
        $serviceForm->description = $serviceInstance->description;

        if($serviceForm->load(Yii::$app->request->post()) and $serviceForm->validate()){

            if($serviceInstance->image_1 != $serviceForm->image_1) {
                $serviceForm->image_1 = UploadedFile::getInstance($serviceForm, 'image_1');
            }else{
                $serviceForm->image_1 = null;
            }
            if($serviceInstance->image_2 != $serviceForm->image_2) {
                $serviceForm->image_2 = UploadedFile::getInstance($serviceForm, 'image_2');
            }else{
                $serviceForm->image_2 = null;
            }

            if($serviceForm->uploadImageEdit($serviceInstance)) {
                Yii::$app->session->setFlash('service_updated', 'Услуга успешно изменена');
                return $this->redirect((['/admin/auto/vehicle-and-services']));
            }
        }

        return $this->render('edit', [
            'serviceForm' => $serviceForm,
            'serviceInstance' => $serviceInstance
        ]);
    }

    public function actionDelete($id_service){
        if(Yii::$app->request->isAjax and Yii::$app->request->isPost) {
            $serviceModel = Service::findOne($id_service);
            if ($serviceModel->delete()) {
                $response = [
                    'status' => 'ok',
                    'element_id' => $id_service,
                    'msg' => 'Услуга удалена',
                    'type' => 'service'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'element_id' => $id_service,
                    'msg' => 'Услуга не была удалена. Ошибка',
                    'type' => 'service'
                ];
            }
            echo Json::encode($response);
        }
    }

}