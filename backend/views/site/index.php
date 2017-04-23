<?php
/* @var $this yii\web\View */

$this->title = 'My  Application';
?>
<div class="site-index">

    </br

    <!--BLOCK SECTION -->
    <div class="row">
        <div class="col-lg-12">
            <div style="text-align: center;">

                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['user/index']); ?>">
                    <i class="icon-user icon-3x"></i>
                    <span> Admins</span>
                    <span class="label label-success">6</span>
                </a>

                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['contents/index']); ?>">
                    <i class="icon-tasks icon-3x"></i>
                    <span>Contents</span>
                    <span class="label btn-metis-4">6</span>
                </a>
                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['academics/index']); ?>">
                    <i class="icon-smile icon-3x"></i>
                    <span>Academics</span>
                    <span class="label btn-metis-4">456</span>
                </a>
                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['students/index']); ?>">
                    <i class="icon-group icon-3x"></i>
                    <span>Students</span>
                    <span class="label btn-metis-2">6</span>
                </a>
                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['principals/index']); ?>">
                    <i class="icon-key icon-3x"></i>
                    <span>Principals</span>
                    <span class="label label-danger">6</span>
                </a>
                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['alumini/index']); ?>">
                    <i class="icon-group icon-3x"></i>
                    <span>Alumini</span>
                    <span class="label label-danger">6</span>
                </a>
                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['projects/index']); ?>">
                    <i class="icon-building icon-3x"></i>
                    <span>Projects</span>
                    <span class="label label-danger">6</span>
                </a>
                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['downloads/index']); ?>">
                    <i class="icon-download icon-3x"></i>
                    <span>Downloads</span>
                    <span class="label label-danger">6</span>
                </a>
                <a class="quick-btn" href="<?php echo Yii::$app->urlManager->createUrl(['faqs/index']); ?>">
                    <i class="icon-question icon-3x"></i>
                    <span>Faqs</span>
                    <span class="label label-warning">25</span>
                </a>



            </div>

        </div>

    </div>
    <!--END BLOCK SECTION -->
    <!-- COMMENT AND NOTIFICATION  SECTION -->


    <div class="row">
        <div class="col-lg-5">

            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="icon-bell"></i> Chemolingot Notifications  Panel
                </div>

                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <i class=" icon-comment"></i> New Comment
                            <span class="pull-right text-muted small"><em> 4 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="icon-twitter"></i> 3 New Followers
                            <span class="pull-right text-muted small"><em> 12 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="icon-envelope"></i> Message Sent
                            <span class="pull-right text-muted small"><em> 27 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="icon-tasks"></i> New Task
                            <span class="pull-right text-muted small"><em>43 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="icon-upload"></i> Server Rebooted
                            <span class="pull-right text-muted small"><em>11:32 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="icon-warning-sign"></i> Server Crashed!
                            <span class="pull-right text-muted small"><em>11:13 AM</em>
                            </span>
                        </a>

                        <a href="#" class="list-group-item">
                            <i class="icon-ok"></i> New Order Placed
                            <span class="pull-right text-muted small"><em>9:49 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class=" icon-money"></i> Payment Received
                            <span class="pull-right text-muted small"><em>Yesterday</em>
                            </span>
                        </a>
                    </div>

                    <a href="#" class="btn btn-default btn-block btn-primary">View All Alerts</a>
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

    </div>
    <!-- END COMMENT AND NOTIFICATION  SECTION -->

</div>
<!--TABLE, PANEL, ACCORDION AND MODAL  -->

