<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Contents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contents-form">

    <?php $form = ActiveForm::begin(); ?>

 
           <?= \cliff363825\kindeditor\KindEditorWidget::widget([
    'model' => $model,
    'attribute' => 'content_info',
    'options' => [], // html attributes
    'clientOptions' => [
        'width' => '886px',
        'height' => '250px',
        'themeType' => 'default', // optional: default, simple, qq
        'langType' => \cliff363825\kindeditor\KindEditorWidget::LANG_TYPE_EN, // optional: ar, en, ko, ru, zh-CN, zh-TW
        
    ],
]); ?>
    
    <div class="col-md-6">
        <?= $form->field($model, 'content_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
    </div>   
    <div class="col-md-6">
        <?= $form->field($model, 'date_created')->textInput() ?>
         


        <?= $form->field($model, 'date_upadted')->textInput() ?>
        
         <?= $form->field($model, 'edited_by')->textInput(['maxlength' => true]) ?>
     </div>


      <div class="col-md-6">
         <div class="form-group">
           <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
         </div>
     </div>

    

    <?php ActiveForm::end(); ?>

</div>
