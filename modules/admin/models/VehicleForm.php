<?php
namespace app\modules\admin\models;
use Yii;
use yii\base\Model;
use yii\validators;

class VehicleForm extends Model
{
   public $image;
   public $title;
   public $description;
   public $process_period;
   public $cost;
   public $active;


    public  function rules()
    {
        return[
            [['image', 'title', 'description', 'process_period', 'cost', 'active'], 'required'],
            ['process_period', 'required'],
            [['image'], 'file', 'extensions' => 'gif, jpg, png'],
            ['active', 'boolean'],
          ];
    }


    public function attributeLabels()
    {
        return [

            'image' => 'Выберите изображение',
            'process_period' => 'Время',
            'description' => 'Введите текст',
            'title' => 'Сообщение',
            'cost' => 'Стоимость',
            'active' => 'Вход выполнен',
        ];
    }


}