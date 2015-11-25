<?php
$this->title = 'Добавление нового кузова';
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin([
    'id' => 'user-favourite-tours-form',
    'action' => Url::toRoute(['/admin/auto/create-vehicle']),
    'options' => [
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data'
    ],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-xs-12 \">{input}</div>\n<div class=\"col-xs-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-xs-12 control-label label-get-tour'],
    ],
]); ?>
    <div class="container">
<?= $form->field($model, 'image_1')->fileInput() ?>
<?= $form->field($model, 'image_2')->fileInput() ?>
<?= $form->field($model, 'image_3')->fileInput() ?>
<?= $form->field($model, 'title');?>
<?= $form->field($model, 'description')->textarea();?>

<?=Html::submitButton('Сохранить', ['class' => 'btn btn-success col-xs-4']);?>
<?=Html::a('Назад', ['/admin/auto/vehicle-and-services'], ['class' => 'btn btn-default col-xs-4 pull-right']);?>
    </div>
<?php ActiveForm::end();?>