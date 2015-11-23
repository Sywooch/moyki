<?php
$this->title = 'Создание мойки | мойка.онлайн';
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin([
    'id' => 'user-favourite-tours-form',
    'action' => Url::toRoute(['/admin/carwash/create']),
    'options' => [
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data'
    ],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-xs-12 \">{input}</div>\n<div class=\"col-xs-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-xs-12 control-label label-get-tour'],
    ],
]); ?>

<div class="row">
    <div class="col-xs-12 section-title">Добавление мойки</div>
    <div class="col-xs-4">
    <?= $form->field($model, 'name');?>
    </div>
    <div class="col-xs-4">
    <?= $form->field($model, 'email');?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'city')->dropDownList(['Киев' => 'Киев', 'Одесса' => 'Одесса', 'Днепропетровск' => 'Днепропетровск']);?>
    </div>
</div>

<div class="row">
    <div class="col-xs-4">
        <?= $form->field($model, 'address');?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'latitude');?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'longitude');?>
    </div>
    <div class="col-xs-6">
        <a href="<?=Url::to('https://support.google.com/maps/answer/18539?hl=ru', true);?>" target="_blank">Определить широту/долготу : Google Maps</a>
    </div>
    <div class="col-xs-6">
        <a href="<?=Url::to('http://mondeca.com/index.php/en/any-place-en', true);?>" target="_blank">Определить широту/долготу : Mondeca сервис</a>
    </div>
</div>

<div class="row">
    <div class="col-xs-6">
        <?= $form->field($model, 'description')->textarea();?>
    </div>
    <div class="col-xs-3">
        <?= $form->field($model, 'status')->dropDownList([0 => 'Не активна', 1 => 'Активна']);?>
    </div>
    <div class="col-xs-3">
        <?= $form->field($model, 'image')->fileInput();?>
    </div>
</div>

<?=Html::submitButton('Сохранить', ['class' => 'btn btn-success col-xs-4']);?>
<?=Html::a('Назад', ['/admin/carwash'], ['class' => 'btn btn-default col-xs-4 pull-right']);?>

<?php ActiveForm::end();?>