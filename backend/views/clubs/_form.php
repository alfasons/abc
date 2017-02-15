<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Clubs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clubs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'club_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'club_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'achievement')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'date_updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
