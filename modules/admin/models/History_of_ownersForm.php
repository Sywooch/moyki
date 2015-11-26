<?php
namespace app\modules\admin\models;
use Yii;
use yii\base\Model;
use yii\validators;


class History_of_ownersForm extends Model{

    public $change;
    public $place;
    public $time;

    public function rules(){
        return[
            [['change', 'place', 'time'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return[
            'change' => 'Изменения',
            'place' => 'Место',
            'time' => 'Время',
        ];
    }

}