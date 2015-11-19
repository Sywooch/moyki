<?php
use yii\bootstrap\Alert;
?>
<?php if(Yii::$app->session->getFlash($type)):?>
    <?php
    echo Alert::widget([
        'options' => [
            'class' => 'alert-success',
        ],
        'body' => Yii::$app->session->getFlash($type),
    ]);
    ?>
<?php endif;?>