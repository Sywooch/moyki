<?php
namespace app\modules\admin\models;
use Yii;
use yii\base\Model;
use yii\validators;
use yii\web\UploadedFile;


class HistoryForm extends Model{
    public $data;
    public $moyki;

    public function rules(){
        return[
          [['data', 'moyki'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return[
          'data' => 'Дата',
          'moyki' => 'Мойки',
        ];
    }

}