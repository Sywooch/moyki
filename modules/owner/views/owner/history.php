<?php
$this->title = 'История';
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use kartik\date\DatePicker;
?>
<?php $form = ActiveForm::begin([
    'id' => 'user-favourite-tours-form',
    'action' => Url::toRoute(['/owner/owner/history']),
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

            <div class="col-xs-7 body">
                <div class="col-xs-6">

                    <?= DatePicker::widget([
                        'name' => 'check_issue_date',
                        'value' => date('d-M-Y', strtotime('today')),
                        'options' => ['placeholder' => 'Введите дату'],
                        'language' => 'en',
                        'pluginOptions' => [
                            'format' => 'dd-M-yyyy',
                            'todayHighlight' => true,
                            'autoclose' => true
                        ],
                        'pluginEvents' => [
                            "changeDate" => "function(e) {
                          var date = $('[name=\"check_issue_date\"]').val();
                          alert(date);
                          //console.log(new Date(date).getTime()); //to timestamp
                        }",
                        ]
                    ]);
                    ?>
                </div>
            </div>
            <div class="col-xs-5 body">
            </div>
        </div>

        <div class="col-xs-12 table">
            <div class="col-xs-1 time">
                <th>Время</th>
            </div>
            <div class="col-xs-7 name">
                <th>Имя</th>
            </div>
            <div class="col-xs-2 action">
                <th>Изменения</th>
            </div>
            <div class="col-xs-2 phone">
                <th>Телефон</th>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end();?>



