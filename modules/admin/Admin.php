<?php
namespace app\modules\admin;

class Admin extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        $this->layout = 'main';

        // ...  other initialization code ...
        if(\Yii::$app->user->identity->role_id != 3){
            throw new \yii\web\HttpException(400);
        }
    }
}