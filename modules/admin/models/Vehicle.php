<?php
namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;
//use karpoff\icrop\CropImageUploadBehavior;
class Vehicle extends ActiveRecord{

    public function rules()
    {
        return [
            ['image' => 'jpeg, gif, png', 'on' => ['insert', 'update']],
        ];
    }

//    function behaviors()
//    {
//        return [
//            [
//                'class' => CropImageUploadBehavior::className(),
//                'attribute' => 'image',
//                'scenarios' => ['insert', 'update'],
//                'path' => '@webroot/upload/docs',
//                'url' => '@web/upload/docs',
//                'ratio' => 1,
//                'crop_field' => 'photo_crop',
//                'cropped_field' => 'photo_cropped',
//            ],
//        ];
//    }


}