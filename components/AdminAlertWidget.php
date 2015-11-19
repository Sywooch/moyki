<?php
namespace app\components;

use yii\base\Widget;

class AdminAlertWidget extends Widget
{

    public $type;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render('admin_alert', [
            'type' => $this->type
        ]);
    }
}