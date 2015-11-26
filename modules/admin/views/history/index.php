<?php
$this->title = 'История | мойка.онлайн';
?>

<div class="admin">
    <div class="row col-xs-12">
        <div class="list col-xs-4">
            <?= \yii\helpers\Html::a('Просмотреть историю', ['/admin/history/history'], ['class' => 'add-button']);?>
        </div>
        <div class="list col-xs-4">
            <?= \yii\helpers\Html::a('История владельцев', ['/admin/history/history_of_owners'], ['class' => 'add-button']);?>
        </div>
        <div class="list col-xs-4">
            <?= \yii\helpers\Html::a('Назад', ['/admin/board/index'], ['class' => 'add-button']);?>
        </div>
    </div>

</div>