<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\gii\generators\form;
?>

<?php
$this->title = 'Редактирование нового кузова';?>


<?php $form = ActiveForm::begin([
    'action' => Url::to(['/admin/auto/edit_vehicle', 'id_vehicle' => $vehicleInstance->id]),
    'options' => [
        'enctype' => 'multipart/form-data',
        'class' => 'form-horizontal'
    ],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-xs-12 \">{input}</div>\n<div class=\"col-xs-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-xs-12 control-label label-get-tour'],
    ],
]);
?>

<?= $form->field($vehicleForm, 'image_1')->fileInput();?>
<?= $form->field($vehicleForm, 'image_2')->fileInput();?>
<?= $form->field($vehicleForm, 'image_3')->fileInput();?>
<?= $form->field($vehicleForm, 'title')->textInput(); ?>
<?= $form->field($vehicleForm, 'description')->textarea(); ?>

<?= Html::submitButton('Редатировать', ['class'  => 'btn btn-success col-xs-4']); ?>
<?=Html::a('Назад', ['/admin/auto/vehicle-and-services'],
    ['class' => 'btn btn-default col-xs-4 pull-right']);?>



<?php ActiveForm::end()?>
