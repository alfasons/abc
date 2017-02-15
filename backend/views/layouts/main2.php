<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\models\User;
use backend\controllers\UserController;


DashboardAsset::register($this);
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
<body class="padTop53">
<?php $this->beginBody() ?>

  <!-- MAIN WRAPPER -->
<div id="wrap">
         <!-- HEADER SECTION -->
        <div id="top">
 
            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="<?php echo Yii::$app->urlManager->createUrl(['site/index']); ?>" class="navbar-brand">
                        <img src="img/techlogo.png" height="40" width="200"alt="" />
                        
                        </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </header>
                <!-- END LOGO SECTION -->
                
                  <ul class="nav navbar-top-links navbar-left">
                                        <li>
                        <a  href="<?php echo Yii::$app->urlManager->createUrl(['site/index']); ?>">
                           <i class="icon-home"></i> &nbsp; <span class="label label-default">Home</span>   
                        </a>
                  </li>
                     <li>
                        <a  href="<?php echo Yii::$app->urlManager->createUrl(['site-description/index']); ?>">
                          <i class="icon-desktop">&nbsp; </i>  <span class="label label-default">Site</span>
                        </a>
                  </li>
                   <li>
                        <a   
                          href="<?php echo Yii::$app->urlManager->createUrl(['pages/index']); ?>">
                           <i class="icon-tasks">&nbsp; </i> <span class="label label-default">Pages</span>
                        </a>
                  </li>
                  <li> 
                        <a href="<?php echo Yii::$app->urlManager->createUrl(['faqs/index']); ?>">
                       <i class="icon-question"></i> &nbsp; <span class="label label-default">Faqs</span>   
                        </a>
                  </li>
                  </ul>
                  
                <ul class="nav navbar-top-links navbar-right">


                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success">2</span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                       <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                        <br />
                                        <span class="label label-primary">Important</span> 

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Raphel Jonson</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-success"> Moderate </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Chi Ley Suk</strong>
                                        <span class="pull-right text-muted">
                                            <em>26 Jan 2014</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-danger"> Low </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-danger">5</span>   <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Profile </strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Pending Tasks </strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Work Completed </strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Summary </strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-comment" ></i> New Comment
                                    <span class="pull-right text-muted small"> 4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-twitter info"></i> 3 New Follower
                                    <span class="pull-right text-muted small"> 9 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-envelope"></i> Message Sent
                                    <span class="pull-right text-muted small" > 20 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-tasks"></i> New Task
                                    <span class="pull-right text-muted small"> 1 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-upload"></i> Server Rebooted
                                    <span class="pull-right text-muted small"> 2 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i>Admin Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/site/logout']); ?>"data-method="post"><i class="icon-signout"></i> Logout (<?= Yii::$app->user->identity->username ?>)</a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
     <!-- END HEADER SECTION -->
     
     

        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?= Yii::$app->user->identity->firstname ?> <?= Yii::$app->user->identity->lastname ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="<?php echo Yii::$app->urlManager->createUrl(['site/index']); ?>" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>



            
                <li><a href="gallery.html"><i class="icon-tasks"></i> Pages </a></li>
                <li><a href="gallery.html"><i class="icon-film"></i> Welcome site </a></li>
                <li><a href="tables.html"><i class="icon-table"></i> Admins </a></li>
                <li><a href="maps.html"><i class="icon-map-marker"></i> Security  </a></li>

                <li><a href="#"><i class="icon-columns"></i> Faqs </a></li>
                                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-warning-sign"></i> Manual Guideline
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-warning">5</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="errors_403.html"><i class="icon-angle-right"></i> Error 403  </a></li>
                        <li><a href="errors_404.html"><i class="icon-angle-right"></i> Error 404  </a></li>
                        <li><a href="errors_405.html"><i class="icon-angle-right"></i> Error 405  </a></li>
                        <li><a href="errors_500.html"><i class="icon-angle-right"></i> Error 500  </a></li>
                        <li><a href="errors_503.html"><i class="icon-angle-right"></i> Error 503  </a></li>
                    </ul>
                </li>
            
                <li><a href="login.html"><i class="icon-signin"></i> Login Page </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->
        
        <!--PAGE CONTENT -->
         <div id="content">
          <div class="inner" style="min-height: 700px;">

                     
                <div class="row">
                    <div class="col-lg-offset-3">
                        <h1> MTech Admin-Dashboard </h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                           
                            <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['user/index']); ?>">
                                <i class="icon-user icon-3x"></i>
                                <span> Admins</span>
                                <span class="label label-success">1</span>
                            </a>

                            <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['pages/index']); ?>">
                                <i class="icon-tasks icon-3x"></i>
                                <span>Pages</span>
                                <span class="label btn-metis-4">456</span>
                            </a>
                            <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['faqs/index']); ?>">
                                <i class="icon-question icon-3x"></i>
                                <span>Faqs</span>
                                <span class="label label-warning">+25</span>
                            </a>
                            <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['site-description/index']); ?>">
                                <i class="icon-desktop icon-3x"></i>
                                <span>welcome page</span>
                                <span class="label btn-metis-2">6</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-key icon-3x"></i>
                                <span>Security</span>
                                <span class="label label-danger">6</span>
                            </a>


                            
                            
                        </div>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
               
            <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
                    <?= $content ?>
          </div>
       
        </div>
        <!--END PAGE CONTENT -->
    
          <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    Records
                    <li>admins &nbsp; : <span><?= 1 ?></span></li>
                    <li>pages &nbsp; : <span>5</span></li>
                    <li>Faqs &nbsp; : <span>10</span></li>
                    <li>other &nbsp; : <span>#</span></li>
                    
                </ul>
            </div>
            <div class="well well-small">
                <button class="btn btn-block"> Help </button>
                <button class="btn btn-primary btn-block"> Tickets</button>
                <button class="btn btn-info btn-block"> New </button>
                <button class="btn btn-success btn-block"> Users </button>
                <button class="btn btn-danger btn-block"> Profit </button>
                <button class="btn btn-warning btn-block"> Sales </button>
                <button class="btn btn-inverse btn-block"> Stock </button>
            </div>
            <div class="well well-small">
                <span>Profit</span><span class="pull-right"><small>20%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                </div>
                <span>Sales</span><span class="pull-right"><small>40%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                </div>
                <span>Pending</span><span class="pull-right"><small>60%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                </div>
                <span>Summary</span><span class="pull-right"><small>80%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                </div>
            </div>
          
            
         

        </div>
         <!-- END RIGHT STRIP  SECTION -->
           </div>
    
  
 

  

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; MTECH LIMITED.  <?= date('Y') ?></p>

        <p class="pull-right"><?= 'Powered by MTech Limited.' ?></p>
    </div>
</footer>

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

