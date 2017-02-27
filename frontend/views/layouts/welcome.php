<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\WelcomeAsset;
use common\widgets\Alert;


WelcomeAsset::register($this);
?>
<?php $this->beginPage() ?>
   <!DOCTYPE html>
 <html lang="<?= Yii::$app->language ?>">
<head>  
   <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  
</head>
<body class="homepage">
<?php $this->beginBody() ?>
  
    <header id="header" >
        
            <nav class="navbar navbar-inverse navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo Yii::$app->urlManager->createUrl(['/site/index']); ?>"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo Yii::$app->urlManager->createUrl(['/site/index']); ?>">HOME</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['site/about']); ?>">General</a></li>
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['#']); ?>">History</a></li>
                                 <li><a href="<?php echo Yii::$app->urlManager->createUrl(['#']); ?>">Careers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRATION<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/contents/index']); ?>">Principal</a></li>
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/contents/bog']); ?>">Board of Management</a></li>
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/contents/strategics']); ?>">Strategic Plans</a></li>
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/contents/staff']); ?>">Teaching Staff</a></li>
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/contents/pta']); ?>">PTA</a></li>
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/contents/support']); ?>">Support Staff</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACADEMCS <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Departments</a></li>
                                <li><a href="#">Congresses</a></li>
                                <li><a href="#">Results</a></li>
                                <li><a href="#">KCSE</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDENTS<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Student Cancil</a></li>
                                <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/alumini/index']); ?>">Alumini</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Admission</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/site/contact']); ?>">CONTACT US</a></li>                        
                        <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/site/contact']); ?>">DOWNLOADS</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
            
        </nav><!--/nav-->
        
              
                        <?php
                        /*
          NavBar::begin([
        'brandLabel' => '<img src="images/logo.png" alt="logo">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
  
    $menuItems = [
        ['label' => 'HOME', 'url' => ['/site/index']],
        ['label' => 'ABOUT', 'url' => ['/site/about']],
        ['label'=>'ADMINISTRATION',
            'url'=>['contents/index'],
                       'options'=>['class'=>'dropdown-toggle'],

            'template' => '<a href="{url}" class="dropdown-menu">{label}</a>',

            'items' => [

                ['label' => 'Principal ', 'url' => ['contents/index']],
                ['label' => 'Board Of Management', 'url' => ['contents/bog']],
                ['label' => 'Strategic Plans ', 'url' => ['contents/strategics']],
                ['label' => 'Teaching Staff', 'url' => ['contents/staff']],
                ['label' => 'PTA', 'url' => ['contents/pta']],
                ['label' => 'Support Staff', 'url' => ['contents/support']],
                       ]
        ],
        ['label'=>'ACADEMICS',
            'url'=>['#'],
                       'options'=>['class'=>'dropdown'],

            'template' => '<a href="{url}" class="href_class">{label}</a>',

            'items' => [

                ['label' => 'Departments', 'url' => ['#']],
                ['label' => 'Congresses', 'url' => ['#']],
                ['label' => 'Results ', 'url' => ['#']],
                ['label' => 'KCSE', 'url' => ['#']],
            ]

        ],
        ['label'=>'STUDENTS',
            'url'=>['#'],
                       'options'=>['class'=>'dropdown-toggle'],

            'template' => '<a href="{url}" class="href_class">{label}</a>',

            'items' => [
                '<ul class="dropdown-menu">',
                ['label' => 'Student Cancil', 'url' => ['#']],
                ['label' => 'Alumini', 'url' => ['#']],
                ['label' => 'Games', 'url' => ['#']],
                ['label' => 'Admissions', 'url' => ['#']],
                ' </ul>'
            ]

            ],
        ['label'=>'CONTACT US','url'=>['/site/contact']],
        
        
    ];
    
    

  /*
 only admin  signs from backend and manages the files at the backend
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
*/
   /* echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
     
    NavBar::end();
    */
    ?>
    
          
		
    </header><!--/header-->

    <div style="border: 1px solid green;">
        <div class="container">
   
   <div  style="margin-top: 89px;top: 0px">
         <div class="panel panel-default ">
             <div class="panel-body " style=" background-color:white">
                 <div class="col-sm-6">
                     	<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					

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
			
      
        </div>
         <div class="col-sm-6">
        
               <div class="accordion">
                      
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>


                        </div><!--/#accordion1-->
                    </div>
             </div>
         </div>
      </div>
     
        
       </div>
    </div><!--/#main-slider-->

      
    <div class="container" >
              
                      
        <div class="row">
            <div class="col-md-2 "> 
                
                <div class="panel panel-success">
                            <div class="panel-heading">
                                Most visited
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-success bt-small" data-toggle="modal" data-target="#myModal">
                                    Notice
                                </button>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  
                                   <button class="btn btn-success bt-small" data-toggle="modal" data-target="#myModal">
                                    Notice
                                </button>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                

            </div>
            <div class="col-md-8">
                  <?= $content?>
            </div>
            <div class="col-md-2">
              downloads
              Most Visited sites
                -------------------
                -
                               <div class="x_content">

                  <p>Regular notifications</p>
                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Regular Success',
                                  text: 'That thing that you were trying to do worked!',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });">Success</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'New Thing',
                                  text: 'Just to let you know, something happened.',
                                  type: 'info',
                                  styling: 'bootstrap3'
                              });">Info</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Regular Notice',
                                  text: 'Check me out! I\'m a notice.',
                                  styling: 'bootstrap3'
                              });">Notice</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Oh No!',
                                  text: 'Something terrible happened.',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });">Error</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Oh No!',
                                  text: 'Something terrible happened.',
                                  type: 'info',
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Dark</button>

                  <hr />

                  <p>Sticky notifications.. these wont close unless user closes them.</p>
                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Success',
                                  text: 'Sticky success... I\'m not even gonna make a joke.',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Info',
                                  text: 'Sticky Info... I\'m not even gonna make a joke.',
                                  type: 'info',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Info</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Warning',
                                  text: 'Sticky Warning... I\'m not even gonna make a joke.',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Warning</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Danger',
                                  text: 'Sticky Danger... I\'m not even gonna make a joke.',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Error</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Success',
                                  text: 'Sticky success... I\'m not even gonna make a joke.',
                                  type: 'info',
                                  hide: false,
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Dark</button>

                  <hr/>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Non-Blocking Notice',
                                  type: 'info',
                                  text: 'When you hover over me I\'ll fade to show the elements underneath. Feel free to click any of them just like I wasn\'t even here.',
                                  nonblock: {
                                      nonblock: true
                                  },
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Non-Blocking Notice</button>

                
                </div>
             
            </div>
            
        </div>
        
    </div>
       </div>     
       <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

      <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>About Boresha</h2>
				<p class="lead">Boresha Sacco is a cooperative society located in Eldama Ravine<br> Its mainly constitutes the teachers and it aim is to refinance its members </p>
			</div>
			
			
			
			<!-- Our Skill -->
			<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown">
					<h2>Our Skill</h2>
                                        <p class="lead">Meet our professional team, from different fields, equiped with everthing<br> Ready to serve you with the best of their abilility</p>
				</div>
				
				<div class="row">
		
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="joomla-skill">                                   
								<p><em>85%</em></p>
								<p>Guaranteed</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="html-skill">                                  
								<p><em>95%</em></p>
								<p>Exallent</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">                                    
								<p><em>80%</em></p>
								<p>speed</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<p><em>90%</em></p>
								<p>Efficiency</p>                                     
							</div>
						</div>
					</div>
					
				</div>
	
            </div><!--/.our-skill-->
			

			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Boresha Team</h2>
					<p class="lead">This are our esteem experts,available 24/7 <br>Motto:  God bless the work of our hands so that we can strive for greater heights </p>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
                                                                    <a href="#"><img class="media-object img-bordered" src="images/alfa.png "height="150" width="170" alt=""></a>
								</div>
								<div class="media-body">
									<h4>CHIRCHIR K.</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">System & Web </a></li>
										<li class="btn"><a href="#">Graphics</a></li>
										<li class="btn"><a href="#">Bootstrap</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>Chirchir K Alfason is a  holder BSC Information Technology from JKUAT,with skills and experience in both web design and  system development. He is also the founder of Alfasons Limited Company, one of the fastest growing IT company in Kenya.He also has exprience in firm wireframe in his field of experties. </p>
						</div>
					</div><!--/.col-lg-4 -->
					
					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man2.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>Jhon Doe is a  holder BSC Information Technology from JKUAT,with skills and experience in both web design and  system development. He is also the founder of Alfasons Limited Company, one of the fastest growing IT company in Kenya.He also has exprience in firm wireframe in his field of experties. </p>
						</div>
					</div><!--/.col-lg-4 -->					
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>Jhon Doe is a  holder BSC Information Technology from JKUAT,with skills and experience in both web design and  system development. He is also the founder of Alfasons Limited Company, one of the fastest growing IT company in Kenya.He also has exprience in firm wireframe in his field of experties. </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man4.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
							</div><!--/.media -->
							<p>Jhon Doe is a  holder BSC Information Technology from JKUAT,with skills and experience in both web design and  system development. He is also the founder of Alfasons Limited Company, one of the fastest growing IT company in Kenya.He also has exprience in firm wireframe in his field of experties. </p>
						</div>
					</div>
				</div>	<!--/.row-->
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->


    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  hidden-xs col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/tab2.png">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                     </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->



    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                     <p class="pull-left">&copy; Chemolingot High.  <?= date('Y') ?></p>
                </div>
                <div class="col-sm-6">
             <p class="pull-right"><?= '"The Future is Now"' ?></p>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
       <!-- PNotify -->
    <script>
      $(document).ready(function() {
        new PNotify({
          title: "PNotify",
          type: "info",
          text: "Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.",
          nonblock: {
              nonblock: true
          },
          addclass: 'dark',
          styling: 'bootstrap3',
          hide: false,
          before_close: function(PNotify) {
            PNotify.update({
              title: PNotify.options.title + " - Enjoy your Stay",
              before_close: null
            });

            PNotify.queueRemove();

            return false;
          }
        });

      });
    </script>
    <!-- /PNotify -->

    <!-- Custom Notification -->
    <script>
      $(document).ready(function() {
        var cnt = 10;

        TabbedNotification = function(options) {
          var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
            "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

          if (!document.getElementById('custom_notifications')) {
            alert('doesnt exists');
          } else {
            $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
            $('#custom_notifications #notif-group').append(message);
            cnt++;
            CustomTabs(options);
          }
        };

        CustomTabs = function(options) {
          $('.tabbed_notifications > div').hide();
          $('.tabbed_notifications > div:first-of-type').show();
          $('#custom_notifications').removeClass('dsp_none');
          $('.notifications a').click(function(e) {
            e.preventDefault();
            var $this = $(this),
              tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
              others = $this.closest('li').siblings().children('a'),
              target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabbed_notifications).children('div').hide();
            $(target).show();
          });
        };

        CustomTabs();

        var tabid = idname = '';

        $(document).on('click', '.notification_close', function(e) {
          idname = $(this).parent().parent().attr("id");
          tabid = idname.substr(-2);
          $('#ntf' + tabid).remove();
          $('#ntlink' + tabid).parent().remove();
          $('.notifications a').first().addClass('active');
          $('#notif-group div').first().css('display', 'block');
        });
      });
    </script>
    <!-- /Custom Notification -->

   <script src="js/jquery.js"></script>
     <script src="js/pnotify.js"></script>
    <script src="js/pnotify.buttons.js"></script>
    <script src="js/pnotify.nonblock.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->
 
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
