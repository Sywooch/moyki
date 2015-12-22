<?php
$this->title = 'Админ | Создание мойки';
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use kartik\time\TimePicker;
?>
<?php $form = ActiveForm::begin([
    'id' => 'create-carwash-form',
    'action' => Url::toRoute(['/admin/carwash/create-ajax']),
    'options' => [
        'class' => 'form-horizontal admin',
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
<div class="row owners">
    <div class="col-xs-12 section-title">Владельцы</div>
    <div class="one-owner col-xs-12">
        <div class="col-xs-4">
            <?= $form->field($model, 'owners_fio[]')->label('')->input('text', ['placeholder' => 'ФИО']);?>
        </div>
        <div class="col-xs-4">
            <?= $form->field($model, 'owners_phone[]')->label('')->input('text', ['placeholder' => 'Телефон']);?>
        </div>
        <div class="col-xs-4">
            <?= $form->field($model, 'owners_password[]')->label('')->input('text', ['placeholder' => 'Пароль']);?>
        </div>
    </div>
    <div class="btn btn-primary add-carwash-owner col-xs-2">Добавить</div>
</div>
<div class="row admins">
    <div class="col-xs-12 section-title">Администраторы</div>
    <div class="one-admin col-xs-12">
        <div class="col-xs-4">
            <?= $form->field($model, 'admins_fio[]')->label('')->input('text', ['placeholder' => 'ФИО']);?>
        </div>
        <div class="col-xs-4">
            <?= $form->field($model, 'admins_phone[]')->label('')->input('text', ['placeholder' => 'Телефон']);?>
        </div>
        <div class="col-xs-4">
            <?= $form->field($model, 'admins_password[]')->label('')->input('text', ['placeholder' => 'Пароль']);?>
        </div>
    </div>
    <div class="btn btn-primary add-carwash-admin col-xs-2">Добавить</div>
</div>

<!-- work periods -->
<div class="row work monday">
    <div class="col-xs-2">
        Понедельник
    </div>
    <div class="col-xs-3">
        <?= $form->field($model, 'work_in_monday_start')->widget(TimePicker::classname(), [
            'pluginOptions' => [
                'minuteStep' => 1
            ],
            'options' => ['value'=> '12:00 AM']
        ])->label('');?>
    </div>
    <div class="col-xs-3">
        <?= $form->field($model, 'work_in_monday_end')->widget(TimePicker::classname(), [
            'pluginOptions' => [
                'minuteStep' => 1
            ],
            'options' => ['value'=> '12:00 PM']
        ])->label('');?>
    </div>
</div>

    <div class="row work tuesday">
        <div class="col-xs-2">
            Вторник
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_tuesday_start')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 AM']
            ])->label('');?>
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_tuesday_end')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 PM']
            ])->label('');?>
        </div>
    </div>

    <div class="row work wednesday">
        <div class="col-xs-2">
            Среда
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_wednesday_start')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 AM']
            ])->label('');?>
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_wednesday_end')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 PM']
            ])->label('');?>
        </div>
    </div>

    <div class="row work thursday">
        <div class="col-xs-2">
            Четверг
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_thursday_start')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 AM']
            ])->label('');?>
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_thursday_end')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 PM']
            ])->label('');?>
        </div>
    </div>

    <div class="row work friday">
        <div class="col-xs-2">
            Пятница
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_friday_start')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 AM']
            ])->label('');?>
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_friday_end')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 PM']
            ])->label('');?>
        </div>
    </div>

    <div class="row work saturday">
        <div class="col-xs-2">
            Суббота
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_saturday_start')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 AM']
            ])->label('');?>
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_saturday_end')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 PM']
            ])->label('');?>
        </div>
    </div>

    <div class="row work sunday">
        <div class="col-xs-2">
            Воскресенье
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_sunday_start')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 AM']
            ])->label('');?>
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'work_in_sunday_end')->widget(TimePicker::classname(), [
                'pluginOptions' => [
                    'minuteStep' => 1
                ],
                'options' => ['value'=> '12:00 PM']
            ])->label('');?>
        </div>
    </div>
<!-- work periods -->
<div class="row">
    <div class="col-xs-4">
        <?= $form->field($model, 'box_count')->input('number', ['min' => 0, 'max' => 99000, 'step' => 100, 'value' => 0]);?>
    </div>
</div>

<div class="row">
    <?php if((count($vehicles)) and (count($services))):?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <?php foreach($vehicles as $vehicle):?>
                        <th>
                            <?= $vehicle->title;?>
                        </th>
                    <?php endforeach;?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($services as $service):?>
                    <tr>
                        <td>
                            <?=$service->title;?>
                        </td>
                        <?php foreach($vehicles as $veh):?>
                            <td class="set-service-time" data-service-id="<?=$service->id;?>" data-vehicle-id="<?=$veh->id;?>">

                            </td>
                        <?php endforeach;?>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    <?php endif;?>
</div>

<?=Html::submitButton('Сохранить', ['class' => 'btn btn-success col-xs-4 save-carwash', 'id' => 'create-carwash']);?>
<?=Html::a('Назад', ['/admin/carwash'], ['class' => 'btn btn-default col-xs-4 pull-right back-carwash']);?>
<br><br><br>
<?php ActiveForm::end();?>