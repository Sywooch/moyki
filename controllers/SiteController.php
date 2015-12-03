<?php

namespace app\controllers;

use app\models\RegistrationForm;
use app\modules\admin\models\Service;
use app\modules\admin\models\Vehicle;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;



class SiteController extends Controller
{
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex()
    {
        return $this->render('index', [
//            'model' => $model,
        ]);
    }
    public function actionComfyTime()
    {

        $vehicles = Vehicle::find()->indexBy('id')->all();
        $services_main = Service::find()->where(['type' => 'main'])->all();
        $services_add = Service::find()->where(['type' => 'add'])->all();
        return $this->render('comfy-time',[
            'vehicles' => $vehicles,
            'services_main' => $services_main,
            'services_add' => $services_add,
        ]);
    }


    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        if (Yii::$app->request->isAjax) {
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                $response = [
                    'status' => 'ok',
                    'url' => Url::to(['site/index']),
                    'message' => Yii::t('app', 'You have logged in successful')
                ];
                echo Json::encode($response);
                Yii::$app->end();
            }else{
                $response = [
                    'status' => 'error',
                    'errors' => $model->getErrors()
                ];
                echo Json::encode($response);
                Yii::$app->end();
            }
        }
    }

    public function actionSignUp(){
        if (Yii::$app->request->isAjax) {
            $registrationForm = new RegistrationForm();
            if ($user = $registrationForm->registration(Yii::$app->request->post())) {
                $response = [
                    'status' => 'ok',
                    'url' => Url::to(['site/index']),
                    'message' => Yii::t('app', 'You have signed up successful')
                ];
                echo Json::encode($response);
                Yii::$app->end();
            }
            $response = [
                'status' => 'error',
                'errors' => $registrationForm->getErrors()
            ];
            echo Json::encode($response);
            Yii::$app->end();
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model


        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

}
