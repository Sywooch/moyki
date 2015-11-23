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
    public $owners;
    public $admins;
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
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'name' => 'Название мойки',
        ];
    }

}