<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

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
                    <?php
                    /* =
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
                      ]); */
                    echo $form->field($model, 'content_info')->widget(TinyMce::className());
                    ?>

                    <?=
                    $form->field($model, 'content_info')->widget(TinyMce::className(), [
                        'options' => ['rows' => 6],
                        'language' => 'es',
                        'clientOptions' => [
                            'plugins' => [
                                "advlist autolink lists link charmap print preview anchor",
                                "searchreplace visualblocks code fullscreen",
                                "insertdatetime media table contextmenu paste"
                            ],
                            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                        ]
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