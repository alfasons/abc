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
            <div class="row">
                <div class="col-md-offset-1 col-lg-5">

                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'idnumber')->textInput() ?>

                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                </div>
                <div class=" col-lg-5">

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'status')->textInput() ?>

                    <?= $form->field($model, 'created_at')->textInput() ?>

                    <?= $form->field($model, 'updated_at')->textInput() ?>

                    <?= $form->field($model, 'attachment')->fileInput(['maxlength' => true]) ?>
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

