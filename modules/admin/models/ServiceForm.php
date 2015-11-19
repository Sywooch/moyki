<?php
namespace app\modules\admin\models;
use Yii;
use yii\base\Model;
use yii\validators;
use yii\web\UploadedFile;

class ServiceForm extends Model{

    public $image_1;
    public $image_2;
    public $title;
    public $description;
    public $type;

    public function rules()
    {
        return
        [
            [['title', 'description', 'type'], 'required'],
            [['image_1', 'image_2'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, gif', 'maxFiles' => 2],

        ];
    }


    public function attributeLabels()
    {
        return [

            'image_1' => 'Выберите изображение 1',
            'image_2' => 'Выберите изображение 2',
            'title' => 'Услуга',
            'description' => 'Что входилд в услугу',
            'type' => 'Тип услуги',

        ];
    }

}