<?php
use yii\bootstrap\Dropdown;
?>

<?php if(is_null($user)):?>
    <a href="#" class="header" data-toggle="modal" data-target="#login"><?=Yii::t('app', 'Login');?></a>
    <a href="#" class="header" data-toggle="modal" data-target="#sign-up"><?=Yii::t('app', 'Sign Up');?></a>
<?php elseif($user->role_id == 3):?>
<div class="dropdown login">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle dropdown-login"><?=$user->phone;?></a>
    <?php
    echo Dropdown::widget([
        'items' => [
            ['label' => Yii::t('app', 'Profile'), 'url' => '#'],
            ['label' => Yii::t('app', 'Admin panel'), 'url' => \yii\helpers\Url::to(['/admin/board/index'])],
            ['label' => Yii::t('app', 'Exit'), 'url' => \yii\helpers\Url::to(['site/logout']), 'linkOptions' => ['data-method' => 'post']],
        ],
    ]);
    ?>
</div>
<?php elseif($user->role_id == 2):?>
<div class="dropdown login">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle dropdown-login"><?=$user->phone;?></a>
    <?php
    echo Dropdown::widget([
        'items' => [
            ['label' => Yii::t('app', 'Profile'), 'url' => '#'],
            ['label' => Yii::t('app', 'Admin panel'), 'url' => \yii\helpers\Url::to(['/owner/board/index'])],
            ['label' => Yii::t('app', 'Exit'), 'url' => \yii\helpers\Url::to(['site/logout']), 'linkOptions' => ['data-method' => 'post']],
        ],
    ]);
    ?>
</div>
<?php else:?>
    <a href="#" class="header login"><?=Yii::t('app', 'Welcome');?>, <?=$user->phone;?></a>
    <a href="<?=\yii\helpers\Url::to(['site/logout']);?>" data-method="post" class="header"><?=Yii::t('app', 'Log out');?></a>
<?php endif;?>