<?php
namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

class Vehicle extends ActiveRecord{

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->updated_at = time();
            }
            if($this->isNewRecord){
                $this->created_at = time();
                $this->updated_at = time();
            }
            return true;
        }
        return false;
    }

}