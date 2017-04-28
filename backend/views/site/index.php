<?php
/* @var $this yii\web\View */

$this->title = 'My  Application';
?>
<div class="site-index">

    </br
    <!-- COMMENT AND NOTIFICATION  SECTION -->

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="col-md-offset-2"><i class="icon-asterisk ">&nbsp;&nbsp;</i>System Administration Central Point Dashboard</h4>
                </div>

                <div class="panel-body">
                    <div class="list-group">
                        <!-- Awesome -->

                        <div class="row">

                            <div class="form-group">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="search" class="form-control" id="search" placeholder="Add your options..">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="searchable-container">
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['user/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;Admins</h5>
                                                            <i class="icon-user icon-3x"></i>

                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['contents/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;Contents</h5>
                                                            <i class="icon-tasks icon-3x"></i>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['academics/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;Academics</h5>
                                                            <i class="icon-smile icon-3x"></i>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['students/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;Students</h5>
                                                            <i class="icon-group icon-3x"></i>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['principals/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;Principals</h5>
                                                            <i class="icon-key icon-3x"></i>

                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['alumini/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;Aluminis</h5>
                                                            <i class="icon-group icon-3x"></i>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['projects/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;Projects</h5>
                                                            <i class="icon-building icon-3x"></i>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['downloads/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;Downloads</h5>
                                                            <i class="icon-download icon-3x"></i>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['faqs/index']); ?>">
                                            <div class="info-block block-info clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                                </div>
                                                <div class="btn-group bizmoduleselect">
                                                    <label class="btn btn-default">
                                                        <div class="bizcontent">
                                                            <h5><span class="label label-danger">6</span>&nbsp;FAQS</h5>
                                                            <i class="icon-question icon-3x"></i>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <div class="col-lg-7">

            <div class="chat-panel panel panel-success">
                <div class="panel-heading">
                    <i class="icon-envelope "></i>
                    Chemolingot MAILS & FAQS

                </div>

                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="img/1.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font "> Jack Sparrow </strong>
                                    <small class="pull-right text-muted label label-danger">
                                        <i class="icon-time"></i> 12 mins ago
                                    </small>
                                </div>
                                <br />
                                <p>
                                    Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                            <span class="chat-img pull-right">
                                <img src="img/2.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted label label-info">
                                        <i class="icon-time"></i> 13 mins ago</small>
                                    <strong class="pull-right primary-font"> Jhony Deen</strong>
                                </div>
                                <br />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="img/3.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font"> Jack Sparrow </strong>
                                    <small class="pull-right text-muted label label-warning">
                                        <i class="icon-time"></i> 12 mins ago
                                    </small>
                                </div>
                                <br />
                                <p>
                                    Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                            <span class="chat-img pull-right">
                                <img src="img/4.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted label label-primary">
                                        <i class="icon-time"></i> 13 mins ago</small>
                                    <strong class="pull-right primary-font"> Jhony Deen</strong>
                                </div>
                                <br />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your comment here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-sm" id="btn-chat">
                                Send
                            </button>
                        </span>
                    </div>
                </div>

            </div>


        </div>
        <div class="col-lg-5">

            <div class="chat-panel panel panel-success">
                <div class="panel-heading">
                    <i class="icon-user "></i>
                    Developer information

                </div>

                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-12 col-sm-6">
                            <div class="card-container">
                                <div class="card">
                                    <div class="front">
                                        <div class="cover">
                                            <img src="https://www.clipartsgram.com/image/129556292-kyz84k3.jpg"/>
                                        </div>
                                        <div class="user">
                                            <img class="img-circle"src="attachments/1492954287.png" alt=""/>


                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h3 class="name">Alfason K. chirchir</h3>
                                                <p class="profession">Develover</p>
                                                <p class="text-center">"I love my job and what i do, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-mail-forward"></i> Auto Rotation
                                            </div>
                                        </div>
                                    </div> <!-- end front panel -->
                                    <div class="back">
                                        <div class="header">
                                            <h5 class="motto">"Motto: I can do Everthing through Christ who strengthens me"</h5>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h4 class="text-center">Job Description</h4>
                                                <p class="text-center">System/Web design,, HTML5, CSS3,Bootstrap4,Share point,C#,PHP,Javascript, vb.net andmany others</p>

                                                <div class="stats-container">
                                                    <div class="stats">
                                                        <h4>235</h4>
                                                        <p>
                                                            Followers
                                                        </p>
                                                    </div>
                                                    <div class="stats">
                                                        <h4>114</h4>
                                                        <p>
                                                            Following
                                                        </p>
                                                    </div>
                                                    <div class="stats">
                                                        <h4>35</h4>
                                                        <p>
                                                            Projects
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="footer">
                                            <div class="social-links text-center">
                                                <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                                <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                                <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                            </div>
                                        </div>
                                    </div> <!-- end back panel -->
                                </div> <!-- end card -->
                            </div> <!-- end card-container -->

                            <!--         <div class="col-sm-1"></div> -->

                        </div> <!-- end col-sm-10 -->
                    </div> <!-- end row -->
                </div>



            </div>


        </div>
    </div>
    <!-- END COMMENT AND NOTIFICATION  SECTION -->

</div>
<!--TABLE, PANEL, ACCORDION AND MODAL  -->

