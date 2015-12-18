<?php

namespace app\modules\owner\controllers;

use app\modules\owner\models\Administrator;
use app\modules\owner\models\AdministratorsForm;
use app\modules\owner\models\Discounts;
use app\modules\owner\models\DiscountsForm;
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

        $discountsForm = new DiscountsForm();

        $discount_list = Discounts::find()->indexBy('id')->all();

        if($discountsForm->load(Yii::$app->request->post()) and $discountsForm->validate()){
            $discounts = new Discounts();
            $discounts->phone = $discountsForm->phonel;
            $discounts->discount = $discountsForm->discount;

            if($discounts->save()) {
                Yii::$app->session->setFlash('discounts', 'Новая скидка успешно создана');
                return $this->redirect(['/owner/owner/discounts']);
            }
            return $this->render('discounts', [
                'discounts_model' => $discountsForm,
                'discounts_list' => $discount_list,
            ]);
        }

        return $this->render('discounts', [
            'discounts_model' => $discountsForm,
            'discounts_list' => $discount_list,
        ]);
    }

    public function actionDeleteDiscounts($id_discounts){
        if(Yii::$app->request->isAjax and Yii::$app->request->isPost) {
            $discounts = Discounts::findOne($id_discounts);
            if ($discounts->delete()) {
                $response = [
                    'status' => 'ok',
                    'element_id' => $id_discounts,
                    'msg' => 'Скидка успешно добавлена',
                    'type' => 'discounts'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'element_id' => $id_discounts,
                    'msg' => 'Скидка не была удалена. Ошибка',
                    'type' => 'discounts'
                ];
            }
            echo Json::encode($response);
        }
    }


    public function actionHistory(){
        return $this->render('history', []);
    }

    public function actionStatistic(){
        return $this->render('statistic', []);
    }

    public function actionOrders(){
        return $this->render('order', []);
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

    public function actionDeleteAdministrators($id_administrators){
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