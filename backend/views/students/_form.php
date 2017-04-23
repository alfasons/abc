<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>
<ul class="list-group ">
    <li class="list-group-item">
        <div class="students-form">
            <div class="row">
                <div class="col-md-offset-1 col-lg-5">
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'content_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'content_info')->textarea(['rows' => 6]) ?>
                </div>
                <div class=" col-lg-5">

                    <?= $form->field($model, 'edited_by')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'date_created')->textInput() ?>

                    <?= $form->field($model, 'date_upadted')->textInput() ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-1 col-lg-5">

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
    </li>
</ul>
