<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Principals */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="principals-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_number')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from_date')->textInput() ?>

    <?= $form->field($model, 'to_date')->textInput(['maxlength' => true]) ?>

    
    
      <?= \cliff363825\kindeditor\KindEditorWidget::widget([
    'model' => $model,
    'attribute' => 'achievements',
    'options' => [], // html attributes
    'clientOptions' => [
        'width' => '700px',
        'height' => '300px',
        'themeType' => 'default', // optional: default, simple, qq
        'langType' => \cliff363825\kindeditor\KindEditorWidget::LANG_TYPE_EN, // optional: ar, en, ko, ru, zh-CN, zh-TW
        
    ],
]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
