<?php
namespace app\components;

use app\models\LoginForm;
use app\models\RegistrationForm;
use yii\base\Widget;

class HeaderLayoutWidget extends Widget
{

    public $user;

    public function init()
    {
        parent::init();
        $this->user = (\Yii::$app->user->isGuest)?null:\Yii::$app->user->identity;

    }

    public function run()
    {
        return $this->render('header_layout', [
            'user' => $this->user
        ]);
    }
}