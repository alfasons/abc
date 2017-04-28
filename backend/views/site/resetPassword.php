<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title col-md-offset-2">Chemolingot High School</h3>
    </div>
    <div class="panel-body">
        <div class="site-reset-password">



            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
            <?=
            $form->field($model, 'password', ['template' => '
                 Please choose your new password <br><br>
                 <div class="input-group col-sm-12 ">
                    <span class="input-group-addon">
                       <span class="icon-key"></span>
                    </span>
                    {input}
                 </div>
                 {error}{hint}
             ', 'inputOptions' => ['placeholder' => 'Enter your email ...', 'class' => 'form-control']]
            )->passwordInput(['autofocus' => true])
            ?>



            <div class="form-group">
                <?= Html::submitButton('Reset Password', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

