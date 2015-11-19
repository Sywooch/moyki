<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\validators;
use yii\web\UploadedFile;

class TolikForm extends Model{

    public $name;
    public $mail;


    public function rules(){
        return
        [
            [['name', 'mail'], 'required'],
            ['name', 'integer'],
            ['mail', 'email'],
        ];
    }
}