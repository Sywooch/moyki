<?php
$this->title = 'Заказы | мойка.онлайн';
?>

<div class="admin">
    <div class="row col-xs-12">
        <div class="list col-xs-6">
            <?= \yii\helpers\Html::a('Просмотреть заказы', ['/admin/order/order'], ['class' => 'add-button']);?>
        </div>

        <div class="list col-xs-6">
            <?= \yii\helpers\Html::a('Назад', ['/admin/board/index'], ['class' => 'add-button']);?>
        </div>
    </div>

</div>