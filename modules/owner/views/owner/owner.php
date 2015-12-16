<?php
$this->title = 'Владелец';
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin([
    'id' => 'user-favourite-tours-form',
    'action' => Url::toRoute(['/owner/owner']),
    'options' => [
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data'
    ],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-xs-12 \">{input}</div>\n<div class=\"col-xs-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-xs-12 control-label label-get-tour'],
    ],
]); ?>