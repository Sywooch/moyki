<?php
$this->title = 'Админ | Мойки';
?>
<div class="admin">
    <div class="row">
        <div class="list">
            <?= \yii\helpers\Html::a('Добавить Мойку', ['/admin/carwash/create'], ['class' => 'add-button']);?>
        </div>
    </div>
</div>