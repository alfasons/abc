<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $name  string user name*/
/* @var $email string user email */
/* @var $body  string the review */
?>
<div class="admin-feedback">
    <p>Hello MTech-(admin),</p>
    <p><strong><u>Subject: MTech Api Queries.</u></strong></p>
    
    <p><?= Html::encode($name)?>   (<?= Html::encode($email) ?>) wrote this :-</p>

    <blockquote>
        <?= Html::encode($body) ?>
    </blockquote>
    <p>( <strong>Time :::<?= date('d-m-Y   h:m:s')?></strong> )</p>
</div>