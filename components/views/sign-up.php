<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="signUpLabel">
    <div class="modal-dialog sign-up">
        <div class="modal-header">
            <a href="#" class="first" data-toggle="modal" data-target="#sign-up"><?=Yii::t('app', 'Sign Up');?></a>
            <a href="#" class="second" data-toggle="modal" data-target="#login"><?=Yii::t('app', 'Login');?></a>
        </div>
        <div class="modal-content">
            <?php $form = ActiveForm::begin([
                'id' => 'registration-form',
                'action' => Url::toRoute(['site/sign-up']),
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-xs-12\">{input}</div>\n<div class=\"col-xs-12\">{error}</div>",
                    'labelOptions' => ['class' => 'col-xs-12 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'phone', ['template' => "{label}\n<div class=\"col-xs-12 \"><div class=\"input-group \"><span class=\"input-group-addon\">+</span>{input}</div></div>\n<div class=\"col-xs-12\">{error}</div>"]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <div class="col-xs-12 sign-up success-msg">

                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <?= Html::submitButton(Yii::t('app', 'Sign Up'), ['class' => 'btn btn-primary', 'name' => 'sign-up-button', 'id' => 'sign-up-btn']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->