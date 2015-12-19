<?php
namespace app\modules\owner\models;
use Yii;
use yii\base\Model;
use yii\validators;

class AdministratorsForm extends Model{

    public $name;
    public $phone;

    public function rules()
    {
        return
            [
                [['name', 'phone'], 'required'],
                [['phone'], 'integer'],
            ];
    }

    public function attributeLabels()
    {
        return [

            'name' => 'Имя',
            'phone' => 'Телефон',
        ];
    }
}