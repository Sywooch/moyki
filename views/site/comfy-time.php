<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = Yii::t('app', 'Wash online');
?>

<div class="steps">
<!-------------------------(one)--------------------------------->

    <div class="step one">

        <div class="main-header">
            <?=Yii::t('app', 'Step 1.Choose carcass of auto');?>
        </div>
            <div class="container">

                <?php foreach($vehicles as $vehicle):?>

                    <div class="left">
                        <div class="block">

                                <div class="img">
                                    <?=Html::img($vehicle->image_1, ['class' => 'img-responsive']);?>
                                </div>

                                <div class="text-one">
                                    <div class="form">
                                        <div class="item">
                                            <div class="head-text">
                                                <h4><?= $vehicle->title;?></h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="foot-text">
                                            <?= $vehicle->description;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>

                <div class="right">

                </div>
            </div>
    </div>


<!---------------------------(two)---------------------------------->

    <div class="step two">


        <div class="container">

            <div class="step-header">
                <h2><?=Yii::t('app', 'Step 2.Choose type of car wash');?></h2>
            </div>
            <?php foreach($services_main as $service):?>
            <div class="left">

                <div class="block">

                        <div class="img">
                           <h2><?=Html::img($service->image_1, ['class' => 'img-responsive']);?></h2>
                        </div>

                    <div class="text-one">
                        <div class="form">
                            <div class="item">
                                <div class="head-text">
                                    <h4><?= $service->title;?></h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="foot-text">
                                    <?= $service->description;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach;?>

        <div class="right">

        </div>
       </div>
    </div>

<!-------------------------(three)--------------------------------->

    <div class="step three steps">


        <div class="container">
        <div class="left">
            <div class="step-header">
                <h2><?=Yii::t('app', 'Step 3.Choose additional services');?></h2>
            </div>
            <?php foreach($services_add as $service):?>

                <div class="left">

                    <div class="block">
                        <div class="img">
                            <?=Html::img($service->image_1, ['class' => 'img-responsive']);?>
                        </div>

                        <div class="text-one">
                            <div class="form">
                                <div class="item">
                                    <div class="head-text">
                                        <?= $service->title;?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="foot-text">
                                    <?= $service->description;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endforeach;?>
        </div>
        <div class="right col-xs-4">

        </div>
       </div>
    </div>
</div>