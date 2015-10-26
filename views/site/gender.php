<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;

$form = ActiveForm::begin([
    'id' => 'login-form',
   'options' => ['class' => 'form-horizontal'],
   'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
   ],
]); ?>

<?= $form->field($model, 'email')->input('email'); ?>
<?= $form->field($model, 'password')->passwordInput(); ?>
<?= $form->field($model, 'password_repeat')->passwordInput(); ?>
<?= $form->field($model, 'gender')->dropDownList(array(1=>'Male',0=>'Female')); ?>

<!----------------------------------------------------------------------------------->



<!---->
<?//= $form->field($model, 'rememberMe')->checkbox([
//    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
//]) ?>

<?= $form->field($model, 'date')->widget(DatePicker::className(), []); ?>
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>





<!--    <td>--><?//=$item->id;?><!--</td>-->
<!--    <td>--><?//=$item->email;?><!--</td>-->
<!--    <td>--><?//=$item->date;?><!--</td>-->
<!--    <td>--><?//=$item->gender;?><!--</td>-->
<!--    <td>--><?//= Yii::$app->formatter->format($item->email, 'datetime');?><!--</td>-->
<!--    <td>--><?//= Yii::$app->formatter->format($item->password, 'datetime');?><!--</td>-->
<!--    <td>--><?//= Yii::$app->formatter->format($item->date, 'datetime');?><!--</td>-->
<!--    <td>--><?//= Yii::$app->formatter->format($item->gender, 'datetime');?><!--</td>-->




<?php ActiveForm::end(); ?>