<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Create Admin';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <div class="col-md-12">
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                <span class="round-tab">
                                    <i class="icon icon-user"></i>
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                <span class="round-tab">
                                    <i class="icon icon-key"></i>
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <form role="form">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <h3>Personal Information</h3>
                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">
                                    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'idnumber')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">
                            <h3>Credentials information</h3>
                            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step3">
                            <h3>Permisions section</h3>
                            <?php
                            $authItems = ArrayHelper::map($authItems, 'name', 'name')
                            ?>

                            <?= $form->field($model, 'permissions')->checkboxList($authItems); ?>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                <li> <?= Html::submitButton('Create', ['class' => 'btn btn-success btn-info-full next-step', 'name' => 'signup-button']) ?></li>

                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <h3>Complete</h3>
                            <p>You have successfully completed all steps.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </section>
    </div>


</div>
<?php ActiveForm::end(); ?>


