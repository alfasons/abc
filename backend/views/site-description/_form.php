<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteDescription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-description-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_head')->textInput(['maxlength' => true]) ?>

    
     <?= \cliff363825\kindeditor\KindEditorWidget::widget([
    'model' => $model,
    'attribute' => 'information',
    'options' => [], // html attributes
    'clientOptions' => [
        'width' => '900px',
        'height' => '300px',
        'themeType' => 'default', // optional: default, simple, qq
        'langType' => \cliff363825\kindeditor\KindEditorWidget::LANG_TYPE_EN, // optional: ar, en, ko, ru, zh-CN, zh-TW
        
    ],
]); ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
