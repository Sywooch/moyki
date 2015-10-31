<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$danger = '<script>alert("hello");</script>';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        mojki
    </p>
    <?=\yii\helpers\HtmlPurifier::process($danger);?>

    <code><?= __FILE__ ?></code>
    <p> autosalon </p>
</div>
