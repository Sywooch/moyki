<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\validators;

class VehicleForm extends Model
{
    public $image_1;
    public $image_2;
    public $image_3;
    public $title;
    public $description;


    public  function rules()
    {
        return[
            [['title', 'description'], 'required'],
            [['image_1', 'image_2', 'image_3'], 'file'],
        ];
    }


    public function attributeLabels()
    {
        return [

            'image_1' => 'Выберите изображение',
            'image_2' => 'Выберите изображение',
            'image_3' => 'Выберите изображение',
            'description' => 'Введите текст',
            'title' => 'Название',
        ];
    }
    public function uploadImage(){
        if ($this->validate()) {
            $vehicle_model = new Vehicle();
            $vehicle_model->title = $this->title;
            $vehicle_model->description = $this->description;
            $image_vehicle_upload = 'images/uploads/vehicle/';
            $image_1_path = $image_vehicle_upload . $this->image_1->baseName .'-'.uniqid() . '.'.$this->image_1->extension;
            $image_2_path = $image_vehicle_upload . $this->image_2->baseName .'-'.uniqid() . '.'.$this->image_2->extension;
            $image_3_path = $image_vehicle_upload . $this->image_3->baseName .'-'.uniqid() . '.'.$this->image_3->extension;
            if($this->image_1->saveAs($image_1_path)){  $vehicle_model->image_1 = '/'.$image_1_path;  }
            if($this->image_2->saveAs($image_2_path)){  $vehicle_model->image_2 = '/'.$image_2_path;  }
            if($this->image_3->saveAs($image_3_path)){  $vehicle_model->image_3 = '/'.$image_3_path;  }


            $vehicle_model->save();
            return true;
        } else {
            return false;
        }
    }

    public function uploadImageEdit($vehicle_model){
        if ($this->validate()) {
            $vehicle_model->title = $this->title;
            $vehicle_model->description = $this->description;
            $image_vehicle_upload = 'images/uploads/vehicle/';
            if(!is_null($this->image_1)) {
                $image_1_path = $image_vehicle_upload . $this->image_1->baseName . '-' . uniqid() . '.' . $this->image_1->extension;
                if($this->image_1->saveAs($image_1_path)){  $vehicle_model->image_1 = '/'.$image_1_path;  }
            }
            if(!is_null($this->image_2)) {
                $image_2_path = $image_vehicle_upload . $this->image_2->baseName . '-' . uniqid() . '.' . $this->image_2->extension;
                if($this->image_2->saveAs($image_2_path)){  $vehicle_model->image_2 = '/'.$image_2_path;  }
            }
            if(!is_null($this->image_3)){
                $image_3_path = $image_vehicle_upload . $this->image_3->baseName . '-' . uniqid() . '.' . $this->image_3->extension;
                if($this->image_3->saveAs($image_3_path)){ $vehicle_model->image_3 = '/'.$image_3_path; }
            }
            $vehicle_model->save();
            return true;
        } else {
            return false;
        }
    }


}