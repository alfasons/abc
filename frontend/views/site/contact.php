<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

            
                <h2>How To Reach Us</h2>
                <p class="">Drop Your Message!.</p>
         
                <div class="row">
                     <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <div class="col-md-6">
                          <?= $form->field($model, 'name', ['template' => '
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-user"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                                  )->textInput(['autofocus'=>true])  ?>
                       
                            <?= $form->field($model, 'email', ['template' => '
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-envelope"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                               )->textInput(['autofocus'=>true])  ?> 
                       
                             <?= $form->field($model, 'subject', ['template' => '
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-pencil"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                                  )->textInput(['autofocus'=>true])  ?>
                    </div>
                    <div class="col-md-6">
                            <?= $form->field($model, 'body', ['template' => '
                                <div class="input-group col-sm-12 ">
                                  <span class="input-group-addon">
                                  <span class="fa fa-comment"></span>
                                    </span>
                                      {input} 
                                 </div>
                                    {error}{hint}
                                  '] 
                                  )->textarea(['rows' => 5]) ?>
                        
                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>                        
                    </div>
                      <?= Html::submitButton('Submit', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
                        
                <?php ActiveForm::end(); ?>
                </div>
        
                
                  
                       
  
                        

                                             

              
                         
       
     

   
                     
            <h2>Or Visit Our Premises</h2>
            <p class="lead">Get in touch to our esteem offices</p>
     
        <div class="gmap-area">
           
                <div class="row">
                    <div class="col-sm-3 ">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-5 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
  