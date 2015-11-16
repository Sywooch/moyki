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

])?>

<?= $form->field($service_model, 'title')->textInput(); ?>
<?= $form->field($service_model, 'description')->textarea(); ?>
<?= $form->field($service_model, 'type')->dropDownList( [
    'main' => 'Основная',
    'add' => 'Дополнительная',

]); ?>
<?= Html::submitButton('Save', ['class'  => 'btn btn-default col-xs-6' ]); ?>
<?//= Html::submitButton('Save', ['class'  => 'btn btn-default col-xs-6' ]); ?>





<?php ActiveForm::end()?>
