<?php
$this->title = 'История Владельцев';
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use kartik\date\DatePicker;
?>
<?php $form = ActiveForm::begin([
    'id' => 'user-favourite-tours-form',
    'action' => Url::toRoute(['/admin/history/history_of_owners']),
    'options' => [
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data'
    ],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-xs-12 \">{input}</div>\n<div class=\"col-xs-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-xs-12 control-label label-get-tour'],
    ],
]); ?>
<div class="admin">
    <div class="col-xs-12 container_history">
        <div class="row">
           <div class="col-xs-3"></div>
            <div class="col-xs-6 body">
                <div class="col-xs-2">
                    <label>Что</label>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Изменение администраторов</a></li>
                            <li><a href="#">Получение выгрузки</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-2">
                    <label>Где</label>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                             <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Мойка 1</a></li>
                            <li><a href="#">Мойка 2</a></li>
                            <li><a href="#">Мойка 3</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-8">
                    <label>Когда</label>
                    <?= DatePicker::widget([
                        'name' => 'check_issue_date',
                        'value' => date('d-M-Y', strtotime('today')),
                        'options' => ['placeholder' => 'Введите дату'],
                        'pluginOptions' => [
                            'format' => 'dd-M-yyyy',
                            'todayHighlight' => true,
                            'autoclose' => true
                        ],
                    ]);
                    ?>
                </div>
              </div>
            <div class="col-xs-3"></div>
        </div>
    </div>
</div>
<?php ActiveForm::end();?>


