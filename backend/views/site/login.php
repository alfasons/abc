<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title col-md-offset-2">Chemolingot High School</h3>
    </div>
    <div class="panel-body">
        <!--img src="img/techlogo.png" id="logoimg" alt=" Logo" /-->
        <br>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <?=
        $form->field($model, 'username', ['template' => '
            User Name <br>
                 <div class="input-group col-sm-12 ">
                    <span class="input-group-addon">
                       <span class="glyphicon glyphicon-user"></span>
                    </span>
                    {input}
                 </div>
                 {error}{hint}
             ', 'inputOptions' => ['placeholder' => 'Enter your username ...', 'class' => 'form-control']]
        )->textInput(['autofocus' => true])
        ?>
        <?=
        $form->field($model, 'password', ['template' => '
             Enter Password<br>
                 <div class="input-group col-sm-12 ">
                    <span class="input-group-addon">
                       <span class="glyphicon glyphicon-lock"></span>
                    </span>
                    {input}
                 </div>
                 {error}{hint}
             ', 'inputOptions' => ['placeholder' => 'Enter your username ...', 'class' => 'form-control']
        ])->passwordInput()->label(false)
        ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>



        <div class="form-group">
            <a data-toggle="modal" href="<?php echo Yii::$app->urlManager->createUrl(['site/request-password-reset']); ?>" style="font-size:11px;line-height:55px;color: #00cccc;">Forgot your password?</a>
            <button type="submit" class="btn btn-success right" id="loginBtn"><span class="glyphicon glyphicon-log-in white"></span> Login</button>

        </div>

        <?php ActiveForm::end(); ?>

        <div class="container">
            <p class="">&copy; chemolingot <?= date('Y') ?>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;       powered by Alfasons</p>


        </div>

    </div>
</div>