<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\gii\generators\form;
?>

<?php
$service_type = Yii::$app->request->get('type');
if($service_type == 'main') {
    $this->title = 'Добавление основной услуги';
}else {
    $this->title = 'Добавление дополнительной услуги';
}
$service_model->type = $service_type;
?>

<?php $form = ActiveForm::begin([
    'action' => Url::to(['/admin/service/create']),
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
<div class="container">
<?= $form->field($service_model, 'image_1')->fileInput();?>
<?= $form->field($service_model, 'image_2')->fileInput();?>
<?= $form->field($service_model, 'title')->textInput(); ?>
<?= $form->field($service_model, 'description')->textarea(); ?>

<?= $form->field($service_model, 'type')->dropDownList( [
    'main' => 'Основная',
    'add' => 'Дополнительная',
]); ?>
<?= Html::submitButton('Сохранить', ['class'  => 'btn btn-success col-xs-4']); ?>
<?=Html::a('Назад', ['/admin/auto/vehicle-and-services'],
    ['class' => 'btn btn-default col-xs-4 pull-right']);?>

</div>

<?php ActiveForm::end()?>
