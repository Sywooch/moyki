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
            [['image_1', 'image_2'], 'file'],


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
    public function uploadImage(){
        if ($this->validate()) {
            $service_model = new Service();
            $service_model->title = $this->title;
            $service_model->description = $this->description;
            $service_model->type = $this->type;
            $image_service_upload = 'images/uploads/vehicle/';
            $image_1_path = $image_service_upload . $this->image_1->baseName .'-'.uniqid() . '.'.$this->image_1->extension;
            $image_2_path = $image_service_upload . $this->image_2->baseName .'-'.uniqid() . '.'.$this->image_2->extension;
            if($this->image_1->saveAs($image_1_path)){  $service_model->image_1 = '/'.$image_1_path;  }
            if($this->image_2->saveAs($image_2_path)){  $service_model->image_2 = '/'.$image_2_path;  }

            $service_model->save();
            return true;
        } else {
            return false;
        }
    }

    public function uploadImageEdit($service_model){
        if ($this->validate()) {
            $service_model->title = $this->title;
            $service_model->description = $this->description;
            $service_model->type = $this->type;
            $image_service_upload = 'images/uploads/vehicle/';
            $image_1_path = $image_service_upload . $this->image_1->baseName .'-'.uniqid() . '.'.$this->image_1->extension;
            $image_2_path = $image_service_upload . $this->image_2->baseName .'-'.uniqid() . '.'.$this->image_2->extension;
            if($this->image_1->saveAs($image_1_path)){  $service_model->image_1 = '/'.$image_1_path;  }
            if($this->image_2->saveAs($image_2_path)){  $service_model->image_2 = '/'.$image_2_path;  }

            $service_model->save();
            return true;
        } else {
            return false;
        }
    }


}