<?php
$this->title = 'Услуги и Кузова';
?>
Список: кузова, услуги, дополнительные услуги, время услуг.
<div class="container admin">
    <div class="row">
        <div class="col-xs-12">
            <?= \yii\helpers\Html::a('Добавить Кузов Автомобиля', ['/admin/auto/create-vehicle'], ['class' => 'add-button']);?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <?= \yii\helpers\Html::a('Добавить Услугу', ['/admin/service/create'], ['class' => 'add-button']);?>
        </div>
    </div>
</div>