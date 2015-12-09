<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = Yii::t('app', 'Wash online');
?>

<div class="steps">
<!-------------------------(one)--------------------------------->

    <div class="step">

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

                                <div class="steps-text">
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
        <br><br><br>
                <hr class="line">
                <div class="right"></div>
            </div>
    </div>



<!---------------------------(two)---------------------------------->

    <div class="step">


        <div class="container">

            <div class="step-header">
                <h2><?=Yii::t('app', 'Step 2.Choose type of car wash');?></h2>
            </div>
            <?php foreach($services_main as $service):?>
            <div class="left">

                <div class="block">

                        <div class="img">
                           <?=Html::img($service->image_1, ['class' => 'img-responsive']);?>
                        </div>

                    <span class="type <?=$service->type;?>">
                        <?=Html::img("/images/static/service-ease.png", ['class' => 'one']);?>
                    </span>


                    <div class="steps-text">
                        <div class="form">
                            <div class="item">
                                <div class="head-text2">
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
            <br><br><br>
            <hr class="line">
        <div class="right"></div>
       </div>
    </div>

<!-------------------------(three)--------------------------------->

    <div class="step">

        <div class="container">

        <div class="left">

            <div class="step-header">
                <h2><?=Yii::t('app', 'Step 3.Choose additional services');?></h2>
            </div>
            <div class="three-container">

                <div class="left">

                       <div class="row">

                            <?php foreach($services_add as $key=>$service):?>

                                <div class="col-xs-6 blocks <?=(($key % 2) == 0)?'even':'';?>">
                                    <div class="image-tonic">
                                        <?=Html::img($service->image_1, ['class' => 'img-responsive']);?>
                                    </div>
                                            <?= $service->title;?>
                                </div>

                            <?php endforeach;?>
                       </div>
                </div>
            </div>
            <br><br><br>
        </div>
            <br><br><br>
            <hr class="line">
        <div class="right"></div>
       </div>
    </div>

</div>