<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $name  string user name*/
/* @var $email string user email */
/* @var $body  string the review */
?>
<div class="user-feedback">
    <p> Hello <?= Html::encode($name) ?>,</p>

    <p>Thank you for contacting us, we will  get in touch with you as soon as possible.</p>
    
    <p>This is very helpful to us.</p>
    
    <p><strong>(MTech Limited :::: <?= date('d-m-Y  h:m:s')?>)</strong></p>
</div>