<?php
namespace app\modules\admin\controllers;

use app\modules\admin\models\History_of_ownersForm;
use app\modules\admin\models\HistoryForm;
use yii\web\Controller;
use Yii;

class HistoryController extends Controller
{
    public function actionIndex(){
        return $this->render('index', [

        ]);
    }

    public function actionHistory(){
        $model = new HistoryForm();
        return $this->render('history', [
            'model' => $model
        ]);
    }

    public function actionHistoryOfOwners(){
        $model = new History_of_ownersForm();
        return $this->render('history_of_owners', [
            'model' => $model
        ]);
    }
}