<?php
namespace app\modules\owner;

class Owner extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        $this->layout = 'main';

        // ...  other initialization code ...
        if(\Yii::$app->user->identity->role_id != 2){
            throw new \yii\web\HttpException(400);
        }
    }
}