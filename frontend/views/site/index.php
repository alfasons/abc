<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <h2 class="center"> WELCOME TO CHEMOLINGOT HIGH SCHOOL.</h2>
	
			<!-- about us slider -->
                        <div id="about-slider" style="border: 1px solid black; border-radius: 10px; top: -40px" class="col-md-offset-1 col-md-9">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                                                        
					   </div>
					   <div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
                        <div class="col-md-2">
                            
                            
                        </div>
			  </div>
                        <div class="row">
                            
                    Mission.
                     <br>
                         Given the expertise and experience that your company has, I wish to ask for the opportunity to pursue my career through the unique opportunity in PWC. I believe the company’s motivated environment would provide me with an invaluable experience and that my passion and skills would make me a valuable asset to your company. I am ready, willing and confident to work and extra mile and portray excellence to my best. 
                     
                     <h2 class="center">Vision</h2>
                     <p>
                         Given the expertise and experience that your company has, I wish to ask for the opportunity to pursue my career through the unique opportunity in PWC. I believe the company’s motivated environment would provide me with an invaluable experience and that my passion and skills would make me a valuable asset to your company. I am ready, willing and confident to work and extra mile and portray excellence to my best. 
                     </p>
                     <h2 class="center">What we DO.</h2>
                     <p>
                         Given the expertise and experience that your company has, I wish to ask for the opportunity to pursue my career through the unique opportunity in PWC. I believe the company’s motivated environment would provide me with an invaluable experience and that my passion and skills would make me a valuable asset to your company. I am ready, willing and confident to work and extra mile and portray excellence to my best. 
                     <a class="btn btn-default" href="<?php echo Yii::$app->urlManager->createUrl(['/site/about']); ?>">Read More.... &raquo;</a></p>
                     
                     </p>
 </div>

	
			

