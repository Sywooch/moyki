<?php
$this->title = 'Услуги и Кузова';
use yii\helpers\Html;
?>

<?= \app\components\AdminAlertWidget::widget(['type' => 'vehicle_created']);?>
<?= \app\components\AdminAlertWidget::widget(['type' => 'service_updated']);?>

<div class="admin">
    <div class="row">
        <div class="one-instance">
            <div class="h4" align="left">Кузова автомобилей</div>
            <div class="col-xs-12 head">
                <div class="col-xs-1">Иконка 1</div>
                <div class="col-xs-1">Иконка 2</div>
                <div class="col-xs-1">Иконка 3</div>
                <div class="col-xs-3">Название</div>
                <div class="col-xs-5">Описание</div>
                <div class="col-xs-1">Действия</div>
            </div>

            <?php foreach($vehicles as $vehicle):?>
                <div class="col-xs-12 each-row">
                    <div class="col-xs-1 item">
                        <?=Html::img($vehicle->image_1, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-1 item">
                        <?=Html::img($vehicle->image_2, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-1 item">
                        <?=Html::img($vehicle->image_3, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-3 item">
                        <?= $vehicle->title;?>
                    </div>
                    <div class="col-xs-5 item">
                        <?= $vehicle->description;?>
                    </div>
                    <div class="col-xs-1 item action">
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-pencil']), \yii\helpers\Url::toRoute(['/admin/auto/edit_vehicle', 'id_vehicle' => $vehicle->id]), ['class' => 'col-xs-6']);?>
                        <span class="col-xs-1 glyphicon glyphicon-trash"></span>
                    </div>
                </div>
            <?php endforeach;?>

            <?= \yii\helpers\Html::a('Добавить',
                ['/admin/auto/create-vehicle'],
                ['class' => 'add-button']);?>
        </div>
    </div>
    <div class="row">
        <div class="one-instance">
            <div class="h4" align="left">Типы услуг</div>
            <div class="col-xs-12 head">
                <div class="col-xs-1">Иконка 1</div>
                <div class="col-xs-1">Иконка 2</div>
                <div class="col-xs-4">Название</div>
                <div class="col-xs-5">Описание</div>
                <div class="col-xs-1">Действия</div>
            </div>

            <?php foreach($services_main as $service):?>
                <div class="col-xs-12 each-row" data-service-id="<?=$service->id;?>">
                    <div class="col-xs-1 item">
                        <?=Html::img($service->image_1, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-1 item">
                        <?=Html::img($service->image_2, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-4 item">
                        <?= $service->title;?>
                    </div>
                    <div class="col-xs-5 item">
                        <?= $service->description;?>
                    </div>
                    <div class="col-xs-1 item action">
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-pencil']), \yii\helpers\Url::toRoute(['/admin/service/edit', 'id_service' => $service->id]), ['class' => 'col-xs-6 edit']);?>
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']), \yii\helpers\Url::toRoute(['/admin/service/delete', 'id_service' => $service->id]), ['class' => 'col-xs-6 delete']);?>
                    </div>
                </div>
            <?php endforeach;?>
            <?= \yii\helpers\Html::a('Добавить',
                ['/admin/service/create', 'type' => 'main'],
                ['class' => 'add-button']);?>
        </div>
    </div>


    <div class="row">
        <div class="one-instance">
            <div class="h4" align="left">Дополнительные услуги</div>
            <div class="col-xs-12 head">
                <div class="col-xs-1">Иконка 1</div>
                <div class="col-xs-1">Иконка 2</div>
                <div class="col-xs-4">Название</div>
                <div class="col-xs-5">Описание</div>
                <div class="col-xs-1">Действия</div>
            </div>

            <?php foreach($services_add as $service):?>
                <div class="col-xs-12 each-row" data-service-id="<?=$service->id;?>">
                    <div class="col-xs-1 item">
                        <?=Html::img($service->image_1, ['class' => 'img-reponsive']);?>
                    </div>
                    <div class="col-xs-1 item">
                        <?=Html::img($service->image_2, ['class' => 'img-reponsive']);?>
                    </div>
                    <div class="col-xs-4 item">
                        <?= $service->title;?>
                    </div>
                    <div class="col-xs-5 item">
                        <?= $service->description;?>
                    </div>
                    <div class="col-xs-1 item action">
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-pencil']), \yii\helpers\Url::toRoute(['/admin/service/edit', 'id_service' => $service->id]), ['class' => 'col-xs-6 edit']);?>
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']), \yii\helpers\Url::toRoute(['/admin/service/delete', 'id_service' => $service->id]), ['class' => 'col-xs-6 delete']);?>
                    </div>
                </div>
            <?php endforeach;?>
            <?= \yii\helpers\Html::a('Добавить',
                ['/admin/service/create', 'type' => 'add'], ['class' => 'add-button']);?>
</div>