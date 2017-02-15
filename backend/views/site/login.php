<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
                     <div class="panel panel-default ">
            <div class="panel-body ">
<div class="site-login col-lg-offset-3">

    <p><strong>Please provide your username and password</strong></p>


    <div class="row">
        <br/>
        <div class="col-lg-7">
            
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username', ['template' => '
  User Name
       <div class="input-group col-sm-12 ">
          <span class="input-group-addon">
             <span class="glyphicon glyphicon-user"></span>
          </span>
          {input} 
       </div>
       {error}{hint}
   ','inputOptions' => ['placeholder' =>'Enter your username ...','class' => 'form-control'] ]
                    
                       
                    )->textInput(['autofocus'=>true])  ?>
                        <?= $form->field($model, 'password', ['template' => '
   Enter Password
       <div class="input-group col-sm-12 ">
          <span class="input-group-addon">
             <span class="glyphicon glyphicon-lock"></span>
          </span>
          {input} 
       </div>
       {error}{hint}
   ','inputOptions' => ['placeholder' =>'Enter your username ...','class' => 'form-control'] 
                            ])->passwordInput()->label(false)?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>

  
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
  </div>
                     </div></div>
