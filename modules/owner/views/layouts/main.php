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
<body class="admin">
<?php $this->beginBody() ?>

<header>
    <section class="header admin">
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('/images/static/wash-small-logo.png', ['class' => 'img-response main-logo']),
        ]);
        echo Nav::widget([
            'items' => [
                ['label' => Yii::t('app', 'Orders'), 'url' => ['/owner/owner/orders']],
                ['label' => Yii::t('app', 'History'), 'url' => ['/owner/owner/history']],
                ['label' => Yii::t('app', 'Statistics'), 'url' => ['/owner/owner/statistic']],
                ['label' => Yii::t('app', 'Administrators'), 'url' => ['/owner/owner/administrators']],
                ['label' => Yii::t('app', 'Discounts'), 'url' => ['/owner/owner/discounts']],
                ['label' =>   'Киев',
                    'items' => [
                        ['label' => Yii::t('app','Днепропетровск'), 'url' => ['/site/index']],
                        ['label' => Yii::t('app','Одесса'), 'url' => ['/site/index']],
                        ['label' => Yii::t('app','Львов'), 'url' => ['/site/index']],
                    ]
                ],
                ['label' =>   Yii::$app->user->identity->phone,
                    'items' => [
                        ['label' => Yii::t('app','On Site'), 'url' => ['/site/index']],
                        ['label' => Yii::t('app','Exit'), 'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ],
                    ]
                ],
            ],
            'options' => ['class' => 'navbar-nav'],
        ]);
        NavBar::end();
        ?>
    </section>
</header>

<div class="wrap-admin-discount">
    <div class="custom-container">
        <div class="row">
            <?= $content ?>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="custom-container">
        <div class="row">
            <span class="copyright">&copy; <?= date('Y') ?> "<?=Yii::t('app', 'Wash online');?>" </span>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
