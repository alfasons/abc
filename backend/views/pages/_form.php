<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model backend\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form ">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'page_url_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
    
        <?php echo froala\froalaeditor\FroalaEditorWidget::widget([
    'model' => $model,
    'attribute' => 'content',
    'options'=>[// html attributes
      
    ],
    'clientOptions'=>[
        'toolbarInline'=> true,
        'theme' =>'royal',//optional: dark, red, gray, royal
        'language'=>'en_gb' // optional: ar, bs, cs, da, de, en_ca, en_gb, en_us ...
    ]
]);; ?>
        

    
  <?= \cliff363825\kindeditor\KindEditorWidget::widget([
    'model' => $model,
    'attribute' => 'content',
    'options' => [], // html attributes
    'clientOptions' => [
        'width' => '700px',
        'height' => '300px',
        'themeType' => 'default', // optional: default, simple, qq
        'langType' => \cliff363825\kindeditor\KindEditorWidget::LANG_TYPE_EN, // optional: ar, en, ko, ru, zh-CN, zh-TW
        
    ],
]); ?>

  

    <?= $form->field($model, 'otherinfo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
   
 
    <?php ActiveForm::end(); ?>

</div>
