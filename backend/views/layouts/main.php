<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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
                            <img src="img/schoollogo.png" height="40" width="200"alt=""   />

                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                    </header>
                    <!-- END LOGO SECTION -->




                </nav>

            </div>
            <!-- END HEADER SECTION -->



            <!-- MENU SECTION -->
            <div id="left" >
                <div class="media user-media well-small">
                    <br/>
                    <a class="user-link" href="<?php echo Yii::$app->urlManager->createUrl(['user/index']); ?>">
                        <img class="media-object img-circle user-img" alt="User Picture" src="<?= Yii::$app->user->identity->attachment ?>" width="80" height="80" />
                    </a>
                    <br />
                    <div class="media-body">
                        <h5 class="media-heading"> <?= Yii::$app->user->identity->firstname ?> <?= Yii::$app->user->identity->lastname ?> </h5>
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
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['user/index']); ?>"<i class="icon-key"></i> Admins  </a></li>
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['contents/index']); ?>"><i class="icon-tasks"></i> Contents </a></li>
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['academics/index']); ?>"><i class="icon-desktop"></i> Academics </a></li>
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['students/index']); ?>"><i class="icon-group "></i> Students </a></li>
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['principals/index']); ?>"><i class="icon-user"></i> Principals  </a></li>
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['alumini/index']); ?>"><i class="icon-group"></i> Alumimis  </a></li>
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['projects/index']); ?>"><i class="icon-building"></i> Projects  </a></li>
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['downloads/index']); ?>"><i class="icon-download"></i> Downloads  </a></li>
                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['faqs/index']); ?>"><i class="icon-question"></i> Faqs </a></li>
                    <li class="panel">
                        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                            <i class="icon-warning-sign"></i> Others

                            <span class="pull-right">
                                <i class="icon-angle-left"></i>
                            </span>
                            &nbsp; <span class="label label-warning">5</span>&nbsp;
                        </a>
                        <ul class="collapse" id="error-nav">
                            <li><a href="<?php echo Yii::$app->urlManager->createUrl(['managesite/index']); ?>"><i class="icon-angle-right"></i> Error 403  </a></li>
                            <li><a href="errors_404.html"><i class="icon-angle-right"></i> Error 404  </a></li>
                            <li><a href="errors_405.html"><i class="icon-angle-right"></i> Error 405  </a></li>
                            <li><a href="errors_500.html"><i class="icon-angle-right"></i> Error 500  </a></li>
                            <li><a href="errors_503.html"><i class="icon-angle-right"></i> Error 503  </a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/site/logout']); ?>"data-method="post"><i class="icon-signout"></i> Log out </a></li>

                </ul>

            </div>
            <!--END MENU SECTION -->

            <!--PAGE CONTENT -->
            <div id="content">
                <div class="inner" style="min-height: 700px;">
                    <br>
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>
                    <?= Alert::widget() ?>

                    <?= $content ?>
                </div>

            </div>
            <!--END PAGE CONTENT -->

            <!-- RIGHT STRIP  SECTION -->
            <div id="right">

                </br>
                <div class="well well-small">
                    <ul class="list-unstyled">
                        <p>Statistics</p>
                        <li>admins &nbsp; : <span><?= 1 ?></span></li>
                        <li>pages &nbsp; : <span>5</span></li>
                        <li>Faqs &nbsp; : <span>10</span></li>
                        <li>other &nbsp; : <span>#</span></li>

                    </ul>
                </div>

                <div class="well well-small">
                    <p>System Evaluation</p>
                    <span>Accuracy.</span><span class="pull-right"><small>96%</small></span>

                    <div class="progress mini">
                        <div class="progress-bar progress-bar-info" style="width: 96%"></div>
                    </div>
                    <span>Effeciency</span><span class="pull-right"><small>95%</small></span>

                    <div class="progress mini">
                        <div class="progress-bar progress-bar-striped" style="width: 95%"></div>
                    </div>
                    <span>Completeness</span><span class="pull-right"><small>90%</small></span>

                    <div class="progress mini">
                        <div class="progress-bar progress-bar-warning" style="width: 90%"></div>
                    </div>
                    <span>Overal Functionality</span><span class="pull-right"><small>94%</small></span>

                    <div class="progress mini">
                        <div class="progress-bar progress-bar-success stripe-ad  " style="width: 94%"></div>
                    </div>
                </div>




            </div>
            <!-- END RIGHT STRIP  SECTION -->
        </div>






        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; CHEMOLINGOT HIGH SCHOOL.  <?= date('Y') ?></p>

                <p class="pull-right"><?= 'Powered by AlfaTech Limited.' ?></p>
            </div>
        </footer>

        <!-- GLOBAL SCRIPTS -->
        <script src="js/plugins/jquery-2.0.3.min.js"></script>
        <script src="js/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- END GLOBAL SCRIPTS -->

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/plugins/flot/jquery.flot.js"></script>
        <script src="js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="js/plugins/flot/jquery.flot.time.js"></script>
        <script  src="js/plugins/flot/jquery.flot.stack.js"></script>
        <script src="js/js/for_index.js"></script>




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

