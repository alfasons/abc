<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<ul class="list-group ">
    <li class="list-group-item">
        <div class="user-form">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-offset-5 col-lg-4">
                    <?= Html::img($model->attachment, ['class' => 'img-circle', 'width' => '100', 'height' => '100']) ?>

                </div>
                <br>

            </div>
            <div class="row">
                <div class="col-md-offset-1 col-lg-5">



                    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'idnumber')->textInput() ?>

                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                </div>
                <div class=" col-lg-5">

                    <?= $form->field($model, 'status')->textInput() ?>

                    <?= $form->field($model, 'created_at')->textInput() ?>

                    <?= $form->field($model, 'updated_at')->textInput() ?>

                    <?= $form->field($model, 'attachment', ['labelOptions' => ['style' => 'color:Green']])->fileInput(['maxlength' => true])->label('Select a new image file below to change the image above') ?>

                </div>

            </div>
            <div class="row">
                <div class="col-md-offset-1 col-lg-5 ">
                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>
    </li>
</ul>

