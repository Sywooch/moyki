<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;
use yii\bootstrap\Dropdown;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <section class="header">
        <div class="custom-container">
            <div class="left">
                <a href="/">
                    <?= Html::img("/images/static/wash-big-logo.png", ['class' => 'main-logo']);?>
                </a>
            </div>
            <div class="right">
                <div class="btn-group buttons" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Киев<span class="glyphicon glyphicon-menu-down city-choose"></span></a>
                        <?php
                        echo Dropdown::widget([
                            'items' => [
                                ['label' => 'Киев', 'url' => '#'],
                                ['label' => 'Днепропетровск', 'url' => '#'],
                                ['label' => 'Одесса', 'url' => '#'],
                            ],
                        ]);
                        ?>
                    </div>
                    </div>
                    <?= \app\components\HeaderLayoutWidget::widget();?>
                </div>
            </div>
        </div>
    </section>
</header>

<div class="wrap">
    <div class="custom-container">
        <div class="row">
            <?= $content ?>
        </div>
    </div>
    <section class="bottom-bg"></section>
</div>

<footer class="footer">
    <div class="custom-container">
        <div class="row">
            <span class="copyright">&copy; <?= date('Y') ?> "<?=Yii::t('app', 'Wash online');?>" </span>
        </div>
    </div>
</footer>

<?php if(Yii::$app->user->isGuest):?>
    <?= \app\components\PopupWidget::widget(['popup_name' => 'login']);?>
    <?= \app\components\PopupWidget::widget(['popup_name' => 'sign-up']);?>
<?php endif;?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
