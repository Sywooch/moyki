<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Service;
use app\modules\admin\models\Vehicle;
use app\modules\admin\models\VehicleForm;
use yii\web\Controller;
use yii\web\UploadedFile;
use Yii;

class AutoController extends Controller
{
    public function actionVehicleAndServices(){
        $vehicles = Vehicle::find()->indexBy('id')->all();
        $services_main = Service::find()->where(['type' => 'main'])->all();
        $services_add = Service::find()->where(['type' => 'add'])->all();
        return $this->render('vehicle_and_services',[
                'vehicles' => $vehicles,
                'services_main' => $services_main,
                'services_add' => $services_add,
            ]);
    }

    public function actionCreateVehicle(){
        $vehicleForm = new VehicleForm();
        if($vehicleForm->load(Yii::$app->request->post()) and $vehicleForm->validate()){
            //create DB object (vehicle table)
            $vehicle = new Vehicle();
            $vehicle->title = $vehicleForm->title;
            $vehicle->description = $vehicleForm->description;
            $vehicleForm->image_1 = UploadedFile::getInstance($vehicleForm, 'image_1');
            $vehicleForm->image_2 = UploadedFile::getInstance($vehicleForm, 'image_2');
            $vehicleForm->image_3 = UploadedFile::getInstance($vehicleForm, 'image_3');
            if($vehicleForm->uploadImage($vehicle)) {
                Yii::$app->session->setFlash('vehicle_created', 'Новый тип кузова успешно создан');
                return $this->redirect(['/admin/auto/vehicle-and-services']);
            }
            return $this->render('create_vehicle', [
                'model' => $vehicleForm
            ]);
        }
        return $this->render('create_vehicle', [
            'model' => $vehicleForm
        ]);
    }

    public function actionEdit($id_vehicle){
        $vehicleInstance = Vehicle::findOne($id_vehicle);
        $vehicleForm = new VehicleForm();

        $vehicleForm->image_1 = $vehicleInstance->image_1;
        $vehicleForm->image_2 = $vehicleInstance->image_2;
        $vehicleForm->image_3 = $vehicleInstance->image_3;
        $vehicleForm->title = $vehicleInstance->title;
        $vehicleForm->description = $vehicleInstance->description;

        if($vehicleForm->load(Yii::$app->request->post()) and $vehicleForm->validate()){

            $vehicleForm->image_1 = UploadedFile::getInstance($vehicleForm, 'image_1');
            $vehicleForm->image_2 = UploadedFile::getInstance($vehicleForm, 'image_2');
            $vehicleForm->image_3 = UploadedFile::getInstance($vehicleForm, 'image_3');

            if($vehicleForm->uploadImageEdit($vehicleInstance)) {
                Yii::$app->session->setFlash('vehicle_updated', 'Кузов успешно изменен');
                return $this->redirect((['/admin/auto/vehicle-and-services']));
            }
        }

        return $this->render('edit_vehicle', [
            'vehicleForm' => $vehicleForm,
            'vehicleInstance' => $vehicleInstance
        ]);
    }

    public function actionDelete($id_vehicle){
        if(Yii::$app->request->isAjax and Yii::$app->request->isPost) {
            $vehicleModel = Vehicle::findOne($id_vehicle);
            if ($vehicleModel->delete()) {
                $response = [
                    'status' => 'ok',
                    'vehicle_id' => $id_vehicle,
                    'msg' => 'Кузов удален'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'vehicle_id' => $id_vehicle,
                    'msg' => 'Кузов не был удален. Ошибка'
                ];
            }
            echo Json::encode($response);
        }
    }
}