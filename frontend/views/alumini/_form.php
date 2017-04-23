<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Alumini */
/* @var $form yii\widgets\ActiveForm */
?>
         <div class="alumini-form">
             
                <div class="col-md-offset-1 col-md-9">
                <div class="panel panel-default" style=" background-color:#fff; border: 1px solid #cccccc; ">
          
                     
              <div class="panel-body"style=" background-color:transparent; color:#000; font-family:Arial, Helvetica, sans-serif; font-size:12px" >
           <div class="center">Please fill the form.</div>
                     <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                
                          <?= $form->field($model, 'full_name', ['template' => '
                             Full Name*
                                <div class="input-group col-xm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-user"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                                  )->textInput(['autofocus'=>true])  ?>
                       
                            <?= $form->field($model, 'adm_no', ['template' => '
                                ADM No*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-envelope"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                               )->textInput(['autofocus'=>true])  ?> 
                       
                             <?= $form->field($model, 'gender', ['template' => '
                                 Gender*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-pencil"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                                  )->textInput(['autofocus'=>true])  ?>
       
                            <?= $form->field($model, 'email_address', ['template' => '
                                Email Address*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-envelope"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                                  )->textInput(['autofocus'=>true]) ?>
                            <?= $form->field($model, 'mobile_no', ['template' => '
                                Mobile No*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-phone"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                                  )->textInput(['autofocus'=>true]) ?>
                            <?= $form->field($model, 'year', ['template' => '
                                Year*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-graduation-cap"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                                  )->textInput(['autofocus'=>true]) ?>
                                                  
                         <div class="form-group">
                           <?= Html::submitButton($model->isNewRecord ? 'Sign Up' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                          </div> 
                <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
             
                 
                
                  </div>


