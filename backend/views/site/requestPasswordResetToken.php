<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title col-md-offset-2">Chemolingot High School</h3>
    </div>
    <div class="panel-body">
        <div class="site-request-password-reset">

            <br>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
            <?=
            $form->field($model, 'email', ['template' => '
           Please fill out your email. A link to reset password will be sent there <br><br>
                 <div class="input-group col-sm-12 ">
                    <span class="input-group-addon">
                       <span class="glyphicon glyphicon-envelope"></span>
                    </span>
                    {input}
                 </div>
                 {error}{hint}
             ', 'inputOptions' => ['placeholder' => 'Enter your email ...', 'class' => 'form-control']]
            )->textInput(['autofocus' => true])
            ?>
            <div class="form-group">
                <button type="submit" class="btn btn-success right" ><span class="glyphicon glyphicon-log-in white"></span> Submit</button>
                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </div>
</div>