<?php
namespace app\modules\owner\models;
use Yii;
use yii\base\Model;
use yii\validators;

class DiscountsForm extends Model{

    public $phone;
    public $discount;

    public function rules()
    {
        return
            [
                [['discount', 'phone'], 'required'],
                [['phone', 'discount'], 'integer'],
            ];
    }

    public function attributeLabels()
    {
        return [

            'discount' => 'Скидка',
            'phone' => 'Телефон',
        ];
    }
}