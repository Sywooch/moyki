<?php
$this->title = 'Заказы';
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\date\DatePicker;
?>
<?php $form = ActiveForm::begin([
    'id' => 'user-favourite-tours-form',
    'action' => Url::toRoute(['/admin/order/order']),
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
                    <label>Мойка</label>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Мойка <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Мойка 1</a></li>
                            <li><a href="#">Мойка 2</a></li>
                            <li><a href="#">Мойка 3</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-6">
                    <label>Дата</label>
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
    </div>
</div>
<?php ActiveForm::end();?>



