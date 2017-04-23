<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Contents */
/* @var $form yii\widgets\ActiveForm */
?>
<ul class="list-group ">
    <li class="list-group-item">

        <div class="contents-form">



            <?php /* echo froala\froalaeditor\FroalaEditorWidget::widget([
              'model' => $model,
              'attribute' => 'content_info',
              'options'=>[// html attributes
              // 'id'=>'content'
              ],
              'clientOptions'=>[
              'toolbarInline'=> false,
              'theme' =>'royal',//optional: dark, red, gray, royal
              'language'=>'en_gb' // optional: ar, bs, cs, da, de, en_ca, en_gb, en_us ...
              ]
              ]);; */ ?>
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($model, 'content_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-5">
                    <?= $form->field($model, 'date_created')->textInput() ?>

                    <?= $form->field($model, 'date_upadted')->textInput() ?>

                    <?= $form->field($model, 'edited_by')->textInput(['maxlength' => true]) ?>
                </div>

            </div>
            <div class="row">
                <div class="col-md-offset-1">
                    <p>     Please edit the content below</p>
                    <?=
                    \cliff363825\kindeditor\KindEditorWidget::widget([
                        'model' => $model,
                        'attribute' => 'content_info',
                        'options' => [], // html attributes
                        'clientOptions' => [
                            'width' => '700px',
                            'height' => '250px',
                            'themeType' => 'default', // optional: default, simple, qq
                            'langType' => \cliff363825\kindeditor\KindEditorWidget::LANG_TYPE_EN, // optional: ar, en, ko, ru, zh-CN, zh-TW
                        ],
                    ]);
                    ?>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5  col-md-offset-1">
                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </li>
</ul>