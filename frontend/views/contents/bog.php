<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="row">
    <h2 class="center"> BOARD OF GOVERNERS.</h2>
	
			<!-- about us slider -->
                        <div id="about-slider" style="border: 1px solid black; border-radius: 10px" class="col-md-offset-1 col-md-9">
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
<br>

 <?= $p->content_info;?>    



