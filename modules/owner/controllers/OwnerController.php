<?php

namespace app\modules\owner\controllers;

use app\modules\owner\models\Administrator;
use app\modules\owner\models\AdministratorsForm;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\UploadedFile;
use Yii;

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
        $administratorsForm = new AdministratorsForm();

        $administrator_list = Administrator::find()->indexBy('id')->all();

        if($administratorsForm->load(Yii::$app->request->post()) and $administratorsForm->validate()){
            $administrators = new Administrator();
            $administrators->name = $administratorsForm->name;
            $administrators->phone = $administratorsForm->phone;

            if($administrators->save()) {
                Yii::$app->session->setFlash('administrators', 'Новый админ успешно создан');
                return $this->redirect(['/owner/owner/administrators']);
            }
            return $this->render('administrators', [
                'administrator_model' => $administratorsForm,
                'administrator_list' => $administrator_list,
            ]);
        }

        return $this->render('administrators', [
            'administrator_model' => $administratorsForm,
            'administrator_list' => $administrator_list,
        ]);
    }

    public function actionDelete($id_administrators){
        if(Yii::$app->request->isAjax and Yii::$app->request->isPost) {
            $administrator = Administrator::findOne($id_administrators);
            if ($administrator->delete()) {
                $response = [
                    'status' => 'ok',
                    'element_id' => $id_administrators,
                    'msg' => 'Админ успешно добавлен',
                    'type' => 'administrator'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'element_id' => $id_administrators,
                    'msg' => 'Админ не был удален. Ошибка',
                    'type' => 'administrator'
                ];
            }
            echo Json::encode($response);
        }
    }
 }