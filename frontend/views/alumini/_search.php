<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\SearchAlumini */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumini-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'mobile_no') ?>

    <?= $form->field($model, 'email_address') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'adm_no') ?>

    <?php // echo $form->field($model, 'year_completed') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
