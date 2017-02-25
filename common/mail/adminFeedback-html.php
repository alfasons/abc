<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $name  string user name*/
/* @var $email string user email */
/* @var $body  string the review */
?>
<div class="admin-feedback">
    <p>Dear Chemolingot High School,</p>
    <p><strong><u>Subject: Queries from website.</u></strong></p>
    
    <p><?= Html::encode($name)?>   (<?= Html::encode($email) ?>)contacted you on your  school website, check the message below. Thank you. :-</p>

    <blockquote>
        <?= Html::encode($body) ?>
    </blockquote>
    <p>( <strong>Time :::<?= date('d-m-Y ')?></strong> )</p>
</div>