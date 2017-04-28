<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>

<h2 class="center">CONTACT US.</h2>


<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default" style=" background-color:#fff; border: 1px solid #cccccc; ">



            <div class="panel-body"style=" background-color:transparent; color:#000; font-family:Arial, Helvetica, sans-serif; font-size:12px" >
                <div class="center">Drop a message.</div>
<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name', ['template' => '
                              Full Name*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-user"></span>
                                    </span>
                                      {input}
                                 </div>
                                    {error}{hint}
                                  ', 'inputOptions' => ['placeholder' => '', 'class' => 'form-control']]
                )->textInput(['maxlength' => true])
                ?>

                <?= $form->field($model, 'email', ['template' => '
                                 Email*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-envelope"></span>
                                    </span>
                                      {input}
                                 </div>
                                    {error}{hint}
                                  ', 'inputOptions' => ['placeholder' => '', 'class' => 'form-control']]
                )->textInput(['maxlength' => true])
                ?>

                <?= $form->field($model, 'subject', ['template' => '
                                  Subject*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-pencil"></span>
                                    </span>
                                      {input}
                                 </div>
                                    {error}{hint}
                                  ', 'inputOptions' => ['placeholder' => '', 'class' => 'form-control']]
                )->textInput(['maxlength' => true])
                ?>

                <?= $form->field($model, 'body', ['template' => '
                                 Message*
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-comment"></span>
                                    </span>
                                      {input}
                                 </div>
                                    {error}{hint}
                                  ', 'inputOptions' => ['placeholder' => '', 'class' => 'form-control']]
                )->textarea(['rows' => 5])
                ?>

                <?=
                $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])
                ?>

<?= Html::submitButton('Submit', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>

<?php ActiveForm::end(); ?>
                <hr>



                <div class="row">

                    <div class="col-md-offset-1 ">
                        <h5 class="center">Head Office Address/Contacts</h5>
                        <div class="col-md-6">

                            <p>Chemolingot High School, <br>
                                P. O Box 1121-00100, <br>
                                Marigat.
                            </p>
                        </div>
                        <div class="col-md-5">

                            <p> <span class="fa fa-phone"></span> : 670-898-2847 <br>
                                <span class="fa fa-envelope-o"></span> :info@domain.com</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<div class="row">


    <h2 class="center">OR  Visit Our Location</h2>
    <div class="gmap-area">

        <div class="row">
            <div class="col-sm-3 ">
                <div class="gmap">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                </div>
            </div>


        </div>
    </div>
</div>