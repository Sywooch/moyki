<?php
$this->title = 'Владелец | Скидки';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\gii\generators\form;
?>

<?= \app\components\AdminAlertWidget::widget(['type' => 'discounts']);?>

<div class="wrap">
    <?php foreach($discounts_list as $discount):?>
        <div class="col-xs-12 discounts" data-element-id="<?=$discount->id;?>">
            <div class="col-xs-5 data-list">
                <?= $discount->phone;?>
            </div>
            <div class="col-xs-5 data-list">
                <?= $discount->discount;?>
            </div>
            <div class="list col-xs-1 item action">
                <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-remove']), \yii\helpers\Url::toRoute(['/owner/owner/delete-discounts', 'id_discounts' => $discount->id]), ['class' => 'col-xs-12 delete']);?>
            </div>
        </div>

    <?php endforeach; ?>
</div>
<?php $form = ActiveForm::begin([
    'action' => Url::to(['/owner/owner/discounts']),
    'options' => [
        'class' => 'form-horizontal'
    ],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-xs-12 \">{input}</div>\n<div class=\"col-xs-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-xs-12 control-label label-get-tour'],
    ],
]);
?>


<div class="wrap">
    <div class="col-xs-12 item">
        <div class="col-xs-10 item">
            <div class="col-xs-6 item">
                <?=$form->field($discounts_model, 'phone')->textInput() ;?>

            </div>
            <div class="col-xs-6 item">
                <?=$form->field($discounts_model, 'discount')->textInput() ;?>

            </div>
        </div>
<!--                <div class="list col-xs-2 del">-->
<!--                    --><?//= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-remove']), \yii\helpers\Url::toRoute(['/owner/owner/delete-discounts', 'id_discounts' => $discount->id]), ['class' => 'col-xs-12 delete']);?>
<!--                </div>-->
    </div>

    <!--    ------------------------------------------------>
    <div class="row col-xs-12" data-element-id="<?=$discounts->id;?>">
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
