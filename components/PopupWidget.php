<?php
namespace app\components;

use app\models\LoginForm;
use app\models\RegistrationForm;
use yii\base\Widget;

class PopupWidget extends Widget
{
    public $popup_name;
    public $model;

    public function init()
    {
        parent::init();
        switch($this->popup_name){
            case 'login':
                $this->model = new LoginForm();
                break;
            case 'sign-up':
                $this->model = new RegistrationForm();
                break;
        }

    }

    public function run()
    {
        return $this->render($this->popup_name, [
            'model' => $this->model
        ]);
    }
}