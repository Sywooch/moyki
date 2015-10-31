<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class RegistrationForm extends Model
{
    public $phone;
    public $password;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['phone', 'password'], 'required'],
            ['phone', 'unique', 'targetClass' => '\app\models\User',
                'message' => Yii::t('app','Phone has already been taken')],
        ];
    }

    public function attributeLabels()
    {
        return [
            'phone' => \Yii::t('app','Phone'),
            'password' => \Yii::t('app', 'Password'),
        ];
    }

    public function registration($data){
        if ($this->load($data) and $this->validate()) {
            $user = new User();
            $user->phone = $this->phone;
            $user->setPassword($this->password);
            if($user->save()) {
                Yii::$app->user->login($user);
                return true;
            }
            return false;
        }
    }
}
