<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\gii\generators\form;
?>

<?php
$this->title = 'Редактирование новой услуги';?>


<?php $form = ActiveForm::begin([
    'action' => Url::to(['/admin/service/edit', 'id_service' => $serviceInstance->id]),
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
<?php if(!is_null($serviceForm->image_1)):?>
    <?= Html::img($serviceForm->image_1, ['class' => 'img-responsive']);?>
<?php endif;?>
<?= $form->field($serviceForm, 'image_1')->fileInput();?>

<?php if(!is_null($serviceForm->image_2)):?>
    <?= Html::img($serviceForm->image_2, ['class' => 'img-responsive']);?>
<?php endif;?>
<?= $form->field($serviceForm, 'image_2')->fileInput();?>

<?= $form->field($serviceForm, 'title')->textInput(); ?>
<?= $form->field($serviceForm, 'description')->textarea(); ?>
<?= $form->field($serviceForm, 'type')->dropDownList( [
    'main' => 'Основная',
    'add' => 'Дополнительная',
], ['readonly' => true]); ?>
<?= Html::submitButton('Редатировать', ['class'  => 'btn btn-success col-xs-4']); ?>
<?=Html::a('Назад', ['/admin/auto/vehicle-and-services'],
    ['class' => 'btn btn-default col-xs-4 pull-right']);?>



<?php ActiveForm::end()?>
