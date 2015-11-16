<?php
namespace app\modules\admin\models;
use Yii;
use yii\base\Model;
use yii\validators;

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
            [['image_1', 'image_2'], 'file', 'extensions' => 'gif, jpg, png'],

        ];
    }

    public function attributeLabels()
    {
        return [

            'image_1' => 'Выберите изображение 1',
            'image_2' => 'Выберите изображение 2',
            'title' => 'Введите информаци',
            'description' => 'Введите текст',
            'type' => 'Сообщение',

        ];
    }

}