<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Create Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
         <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <div class="col-lg-6">
           
            
                <?=$form ->field($model,'firstname')->textInput(['autofocus'=>true])?>
            
                <?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'idnumber')->textInput(['autofocus' => true]) ?>

        </div>
        
                    <div class="col-lg-6">

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
              
           
        </div>
         <div class="form-group">
                    <?= Html::submitButton('Create', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                </div>
         <?php ActiveForm::end(); ?>
    </div>
</div>