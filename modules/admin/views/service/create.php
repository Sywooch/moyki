<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\gii\generators\form;
?>

<?php
$this->title = 'Добавление новой услуги';?>

<p>Здесь будет форма для добавления новой ОСНОВНОЙ или ДОПОЛНИТЕЛЬНОЙ услуги</p>
<?php $form = ActiveForm::begin([
    'action' => Url::to(['/admin/service/create']),
    'options' => ['enctype' => 'multipart/form-data'],

])?>

<?= $form->field($service_model, 'image_1')->fileInput();?>
<?= $form->field($service_model, 'image_2')->fileInput();?>
<?= $form->field($service_model, 'title')->textInput(); ?>
<?= $form->field($service_model, 'description')->textarea(); ?>
<?= $form->field($service_model, 'type')->dropDownList( [
    'main' => 'Основная',
    'add' => 'Дополнительная',
]); ?>
<?= Html::submitButton('Save', ['class'  => 'btn btn-default col-xs-3' ]); ?>


<?php ActiveForm::end()?>
