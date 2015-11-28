<?php
namespace app\modules\admin\models;
use Yii;
use yii\base\Model;
use yii\validators;

class OrderForm extends Model{
    public $object_1;
    public $object_2;

    public function rules(){
        return[
            [['object_1', 'object_2'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return[
            '$object_1' => 'Дата',
            '$object_2' => 'Мойки',
        ];
    }

}