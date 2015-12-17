<?php
$this->title = 'Владелец | Администраторы';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\gii\generators\form;
?>

<?= \app\components\AdminAlertWidget::widget(['type' => 'administrators']);?>

<div class="row">
    <?php foreach($administrator_list as $admin):?>
        <div class="col-xs-12 administrator" data-element-id="<?=$admin->id;?>">
            <div class="col-xs-5">
                <?= $admin->name;?>
            </div>
            <div class="col-xs-5">
                <?= $admin->phone;?>
            </div>
            <div class="list col-xs-2 item action">
                <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-remove']), \yii\helpers\Url::toRoute(['/owner/owner/delete-administrators', 'id_administrators' => $admin->id]), ['class' => 'col-xs-12 delete']);?>
            </div>
        </div>

    <?php endforeach; ?>
</div>
<?php $form = ActiveForm::begin([
    'action' => Url::to(['/owner/owner/administrators']),
    'options' => [
        'class' => 'form-horizontal'
    ],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-xs-12 \">{input}</div>\n<div class=\"col-xs-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-xs-12 control-label label-get-tour'],
    ],
]);
?>


<div class="row">
    <div class="col-xs-12 item">
        <div class="col-xs-10 item">
            <div class="col-xs-6 item">
                <?=$form->field($administrator_model, 'name')->textInput() ;?>

            </div>
            <div class="col-xs-6 item">
                <?=$form->field($administrator_model, 'phone')->textInput() ;?>

            </div>
        </div>
        <div class="list col-xs-2 del">
            <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-remove']), \yii\helpers\Url::toRoute(['/owner/owner/delete-administrators', 'id_administrators' => $administrators->id]), ['class' => 'col-xs-12 delete']);?>
        </div>
    </div>

<!--    ------------------------------------------------>
    <div class="row col-xs-12" data-element-id="<?=$administrators->id;?>">
        <div class="col-xs-4">
            <div class="list col-xs-6">
                <?= Html::button('Добавить', ['class' => 'add-button']);?>
            </div>
            <div class="list col-xs-6">
                <?= Html::submitButton('Сохранить', ['class' => 'add-button']);?>
            </div>
        </div>
        <div class="list col-xs-8"></div>
        <br><br><br>
    </div>

</div>
<?php ActiveForm::end()?>
