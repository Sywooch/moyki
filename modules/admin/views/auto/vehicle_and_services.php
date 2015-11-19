<?php
$this->title = 'Услуги и Кузова';
use yii\helpers\Html;
?>

<?= \app\components\AdminAlertWidget::widget(['type' => 'vehicle_created']);?>

<div class="admin">
    <div class="row">
        <div class="one-instance">

            <div class="col-xs-12 head">
                <div class="col-xs-2">Иконка 1</div>
                <div class="col-xs-2">Иконка 2</div>
                <div class="col-xs-2">Иконка 3</div>
                <div class="col-xs-2">Название</div>
                <div class="col-xs-2">Описание</div>
                <div class="col-xs-2">Действия</div>
            </div>

            <?php foreach($vehicles as $vehicle):?>
                <div class="col-xs-12 each-row">
                    <div class="col-xs-2 item">
                        <?=Html::img($vehicle->image_1, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-2 item">
                        <?=Html::img($vehicle->image_2, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-2 item">
                        <?=Html::img($vehicle->image_3, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-2 item">
                        <?= $vehicle->title;?>
                    </div>
                    <div class="col-xs-2 item">
                        <?= $vehicle->title;?>
                    </div>
                    <div class="col-xs-2 item action">
                        <span class="col-xs-4 glyphicon glyphicon-pencil"></span>
                        <span class="col-xs-4 glyphicon glyphicon-info-sign"></span>
                        <span class="col-xs-4 glyphicon glyphicon-trash"></span>
                    </div>
                </div>
            <?php endforeach;?>

            <?= \yii\helpers\Html::a('Добавить Кузов Автомобиля', ['/admin/auto/create-vehicle'], ['class' => 'add-button']);?>
        </div>
    </div>
    <div class="row">
        <div class="one-instance">

            <div class="col-xs-12 head">
                <div class="col-xs-2">Иконка 1</div>
                <div class="col-xs-2">Иконка 2</div>
                <div class="col-xs-2">Название</div>
                <div class="col-xs-2">Описание</div>
                <div class="col-xs-2">Действия</div>
            </div>

            <?php foreach($services as $service):?>
                <div class="col-xs-12 each-row">
                    <div class="col-xs-2 item">
                        <?=Html::img($service->image_1, ['class' => 'img-reponsive']);?>
                    </div>
                    <div class="col-xs-2 item">
                        <?=Html::img($service->image_2, ['class' => 'img-reponsive']);?>
                    </div>
                    <div class="col-xs-2 item">
                        <?= $service->title;?>
                    </div>
                    <div class="col-xs-2 item">
                        <?= $service->title;?>
                    </div>
                    <div class="col-xs-2 item action">
                        <span class="col-xs-4 glyphicon glyphicon-pencil"></span>
                        <span class="col-xs-4 glyphicon glyphicon-info-sign"></span>
                        <span class="col-xs-4 glyphicon glyphicon-trash"></span>
                    </div>
                </div>
            <?php endforeach;?>

            <?= \yii\helpers\Html::a('Добавить Услугу', ['/admin/service/create'], ['class' => 'add-button']);?>
        </div>
    </div>
</div>