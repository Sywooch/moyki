<?php
$this->title = 'Услуги и Кузова';
use yii\helpers\Html;
?>

<?= \app\components\AdminAlertWidget::widget(['type' => 'vehicle_created']);?>
<?= \app\components\AdminAlertWidget::widget(['type' => 'service_updated']);?>

<div class="admin">
    <div class="container">
        <div class="row">
        <div class="one-instance">
            <div class="h4" align="left">Кузова автомобилей</div>

            <?php foreach($vehicles as $vehicle):?>
                <div class="col-xs-12 body" data-element-id="<?=$vehicle->id;?>">
                  <div class="col-xs-4 images">
                        <div class="col-xs-4 item">
                            <?=Html::img($vehicle->image_1, ['class' => 'img-responsive']);?>
                        </div>
                        <div class="col-xs-4  item">
                            <?=Html::img($vehicle->image_2, ['class' => 'img-responsive']);?>
                        </div>
                        <div class="col-xs-4 item">
                            <?=Html::img($vehicle->image_3, ['class' => 'img-responsive']);?>
                        </div>
                  </div>
                    <div class="col-xs-7">
                        <div class="col-xs-12 item">
                            <div class="form">
                                <div class="form-control">
                                    <?= $vehicle->title;?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 item">
                            <textarea class="form-control">
                                <?= $vehicle->description;?>
                            </textarea>
                        </div>
                    </div>
                    <div class="col-xs-1 item action">
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-pencil']), \yii\helpers\Url::toRoute(['/admin/auto/edit', 'id_vehicle' => $vehicle->id]), ['class' => 'col-xs-12 edit']);?>
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']), \yii\helpers\Url::toRoute(['/admin/auto/delete', 'id_vehicle' => $vehicle->id]), ['class' => 'col-xs-12 delete']);?>

                    </div>
                </div>
        </div>
            <?php endforeach;?>

            <?= \yii\helpers\Html::a('Добавить',
                ['/admin/auto/create-vehicle'],
                ['class' => 'add-button']);?>
<hr width="90%">
    </div>
    <div class="row">
        <div class="one-instance">
            <div class="h4" align="left">Типы услуг</div>


            <?php foreach($services_main as $service):?>
                <div class="col-xs-12 body" data-element-id="<?=$service->id;?>">
                  <div class="col-xs-2 images">
                    <div class="col-xs-6 item">
                        <?=Html::img($service->image_1, ['class' => 'img-responsive']);?>
                    </div>
                    <div class="col-xs-6 item">
                        <?=Html::img($service->image_2, ['class' => 'img-responsive']);?>
                    </div>
                  </div>
                        <div class="col-xs-9">
                        <div class="col-xs-12 item">
                            <div class="form">
                                <div class="form-control">
                                    <?= $service->title;?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 item">
                            <textarea class="form-control desc">
                                <?= $service->description;?>
                            </textarea>
                        </div>
                        </div>

                    <div class="col-xs-1 item action">
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-pencil']), \yii\helpers\Url::toRoute(['/admin/service/edit', 'id_service' => $service->id]), ['class' => 'col-xs-12 edit']);?>
                        <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']), \yii\helpers\Url::toRoute(['/admin/service/delete', 'id_service' => $service->id]), ['class' => 'col-xs-12 delete']);?>
                    </div>
                </div>
            <?php endforeach;?>
            <?= \yii\helpers\Html::a('Добавить',
                ['/admin/service/create', 'type' => 'main'],
                ['class' => 'add-button']);?>
        </div>
    </div>
<hr width="90%">

    <div class="row">
        <div class="one-instance">
            <div class="h4" align="left">Дополнительные услуги</div>


            <?php foreach($services_add as $service):?>
                <div class="col-xs-12  body" data-element-id="<?=$service->id;?>">
                    <div class="col-xs-2 images">
                        <div class="col-xs-6 item">
                            <?=Html::img($service->image_1, ['class' => 'img-responsive']);?>
                        </div>
                        <div class="col-xs-6 item">
                            <?=Html::img($service->image_2, ['class' => 'img-responsive']);?>
                        </div>
                    </div>
                          <div class="col-xs-9">
                            <div class="col-xs-12 item">
                                <div class="form">
                                    <div class="form-control">
                                        <?= $service->title;?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 item">
                                <textarea class="form-control desc ">
                                <?= $service->description;?>
                                </textarea>
                            </div>
                        </div>

                        <div class="col-xs-1 action">
                           <div class="icon">
                            <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-pencil']), \yii\helpers\Url::toRoute(['/admin/service/edit', 'id_service' => $service->id]), ['class' => 'col-xs-3 edit']);?>
                            <?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']), \yii\helpers\Url::toRoute(['/admin/service/delete', 'id_service' => $service->id]), ['class' => 'col-xs-3 delete']);?>
                           </div>
                         </div>
            <?php endforeach;?>
        </div>
            <?= \yii\helpers\Html::a('Добавить',
                ['/admin/service/create', 'type' => 'add'], ['class' => 'add-button']);?>

    </div>
        <hr width="90%"><br><br>
    </div>
</div>

