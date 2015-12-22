<?php
namespace app\modules\admin\models;

use Yii;
use yii\base\Model;

class CarwashForm extends Model
{
    public $name;
    public $email;
    public $address;
    public $image;
    public $city;
    public $status;
    public $latitude;
    public $longitude;
    public $description;
    public $owners_fio;
    public $owners_phone;
    public $owners_password;
    public $admins_fio;
    public $admins_phone;
    public $admins_password;
    public $work_in_monday_start;
    public $work_in_monday_end;
    public $work_in_tuesday_start;
    public $work_in_tuesday_end;
    public $work_in_wednesday_start;
    public $work_in_wednesday_end;
    public $work_in_thursday_start;
    public $work_in_thursday_end;
    public $work_in_friday_start;
    public $work_in_friday_end;
    public $work_in_saturday_start;
    public $work_in_saturday_end;
    public $work_in_sunday_start;
    public $work_in_sunday_end;
    public $box_count;
    public $services_description;
    public $services_cost;
    public $services_tax;

    public function rules()
    {
        return [
            [['name', 'email', 'owners_fio', 'owners_phone', 'owners_password', 'city', 'latitude', 'longitude'], 'required'],
            ['email', 'email'],
            [['owners_phone', 'admins_phone', 'box_count'], 'integer'],
            [['owners_fio', 'owners_phone', 'owners_password', 'admins_fio', 'admins_phone', 'admins_password'], 'default', 'value' => []],
            [['work_in_monday_start', 'work_in_monday_end',
                'work_in_tuesday_start', 'work_in_tuesday_end',
                'work_in_wednesday_start', 'work_in_wednesday_end',
                'work_in_thursday_start', 'work_in_thursday_end',
                'work_in_friday_start', 'work_in_friday_end',
                'work_in_saturday_start', 'work_in_saturday_end',
                'work_in_sunday_start', 'work_in_sunday_end'], 'default', 'value' => null]
        ];
    }


    public function attributeLabels()
    {
        return [
            'name' => 'Название мойки',
            'owners_fio' => 'Название мойки',
            'owners_phone' => 'Название мойки',
            'owners_password' => 'Название мойки',
            'email' => 'Email',
            'address' => 'Адрес',
            'image' => 'Изображение',
            'city' => 'Город',
            'status' => 'Статус',
            'latitude' => 'Широта',
            'longitude' => 'Долгота',
            'description' => 'Описание',
            'owners_fio' => 'ФИО владельца',
            'owners_phone' => 'Телефон владельца',
            'owners_password' => 'Пароль владельца',
            'admins_fio' => 'ФИО администратора',
            'admins_phone' => 'Телефон администратора',
            'admins_password' => 'Пароль администратора',
            'box_count' => 'Количество боксов'
        ];
    }

}