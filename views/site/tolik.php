<?php

use yii\widgets\BaseListView;
use yii\helpers\BaseJson;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\gii\generators\form;
?>

<?php $form = ActiveForm::begin([]); ?>
<?= $form->field($tolik_model, 'name')->textInput(); ?>
<?= $form->field($tolik_model, 'email')->dropDownList([
    'first' => 'anatolik_red@i.ua',
    'second' => 'woody_green@i.ua',
    'third' => 'anatolik_red@mail.ru',
]);?>

<?= Html::submitButton('Submit', ['class' => 'btn btn-primary col-xs-3']); ?>
