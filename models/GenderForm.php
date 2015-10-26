<?php
namespace app\models;

use Yii;
use yii\base\Model;

class GenderForm extends Model
{
    public $email;
    public $password;
    public $password_repeat;
    public $date;
    public $gender;
    public $radio;

    public function rules()
    {

    return [

        ['email', 'email', ],
        ['password', 'compare'],
        [['password', 'password_repeat'] , 'required'],
        ['date', 'default', 'value' => null],
        ['radio','each','rule' => ['required']],
        ['date', 'required', 'when' => function($model){
            return $model->gender == 0;
        }, 'whenClient' => "function (attribute, value) {
            return $('[name=\"GenderForm[gender]\"').val() == 0;
        }"],
    ];

    }

}

