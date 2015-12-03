<?php
$this->title = Yii::t('app', 'Wash online');
?>

<div class="col-xs-12">


        <div class="6">
            <div class="list col-xs-6" align="center">
                <?= \yii\helpers\Html::a('Любимая мойка', ['/site/index'], ['class' => 'add-button-site']);?>
            </div>
            <div class="list col-xs-6" align="center">
                <?= \yii\helpers\Html::a('Удобное время', ['/site/comfy-time'], ['class' => 'add-button-site']);?>
            </div>
        </div>



</div>