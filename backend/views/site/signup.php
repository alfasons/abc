<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Create Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="list-group ">
    <li class="list-group-item">
        <div class="site-signup">

            <p class="col-md-offset-1 ">Please fill out the following fields to create admin and give the necessary permissions:</p>
            <br>
            <div class="row">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <div class="col-md-offset-1 col-lg-5">

                    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'idnumber')->textInput(['maxlength' => true]) ?>

                </div>
                <div class="col-lg-5">

                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-lg-5">
                    <?php
                    $authItems = ArrayHelper::map($authItems, 'name', 'name')
                    ?>

                    <?= $form->field($model, 'permissions')->checkboxList($authItems); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-10">
                    <?= Html::submitButton('Create', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </li>
</ul>