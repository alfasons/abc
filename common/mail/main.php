<?php

/* @var $this \yii\web\View */
/* @var $content string */  
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
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

<body>
<?php $this->beginBody() ?>

<div class="wrap ">
    <?php
    NavBar::begin([
        'brandLabel' => 'MTECH LIMITED API',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label'=>'APIs',
            'url'=>['/pages/index'],
                       'options'=>['class'=>'dropdown'],

            'template' => '<a href="{url}" class="href_class">{label}</a>',

            'items' => [

                ['label' => 'All ', 'url' => ['pages/allpages']],

                ['label' => 'Messaging API', 'url' => ['pages/index']],
                ['label' => 'Faqs ', 'url' => ['faqs/index']],
                ['label' => 'xxxx', 'url' => ['#']],
                ['label' => 'xxxx', 'url' => ['#']],

            ]

            ],
        ['label'=>'Doccs','url'=>['/pages/doccs']],
        ['label'=>'Downloads','url'=>['/pages/downloads']],
        ['label' => 'FAQS', 'url' => ['/faqs/index']],
        ['label' => 'Contact US', 'url' => ['/site/contact']],
        
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
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
 
    <div class="container ">
        <div class="row ">
           
          <div class="panel panel-default ">
            <div class="panel-body " style="border: 2px solid black">
              
    
      
            <div class="col-lg-2">
                <a href="<?=Yii::$app->urlManager->createUrl(['site/index']); ?>"><img class="img-responsive" src="images/techlogo.png" alt="Generic placeholder image" width="1000"></a>
                <br><br>
            <div class="span12" style="border: 2px solid black">
                    

                    
                

    <div class="panel-group panel">
  <div class="panel panel">
          <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapseon"> Overview</a>
      </h4>
    </div>
    <div id="collapseon" class="panel-collapse collapse">
      <ul class="list-group">
          <a href="#">  <li  class="list-group-item"></li></a>
          <a href="#">  <li  class="list-group-item">......</li></a>
          <a href="#">  <li  class="list-group-item">......</li></a>
      </ul>
     
    </div>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapseone"> APIS</a>
      </h4>
    </div>
    <div id="collapseone" class="panel-collapse collapse">
      <ul class="list-group">
           <a href="<?=Yii::$app->urlManager->createUrl(['pages/allpages']); ?>">  <li  class="list-group-item">ALL</li></a>
          <a href="<?=Yii::$app->urlManager->createUrl(['pages/index']); ?>">  <li  class="list-group-item">MESSAGE API</li></a>
          <a href="<?=Yii::$app->urlManager->createUrl(['faqs/index']); ?>">  <li  class="list-group-item">FAQS</li></a>
          <a href="#">  <li  class="list-group-item">......</li></a>
          <a href="#">  <li  class="list-group-item">......</li></a>
      </ul>
     
    </div>
          <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapsetwo"> Others</a>
      </h4>
    </div>
    <div id="collapsetwo" class="panel-collapse collapse">
      <ul class="list-group">
          <a href="#">  <li  class="list-group-item">......</li></a>
         <a href="#">  <li  class="list-group-item">........</li></a>
         <a href="#">  <li  class="list-group-item">........</li></a>
      </ul>
      
    </div>
          <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapsethree">xxxxxxx</a>
      </h4>
    </div>
    <div id="collapsethree" class="panel-collapse collapse">
      <ul class="list-group">
         <a href="#">  <li  class="list-group-item">.......</li></a>
         <a href="#">  <li  class="list-group-item">.......</li></a>
         <a href="#">  <li  class="list-group-item">........</li></a>
      </ul>
      
    </div>
  </div>
</div>
                </div>
            </div>
            
            <div class="col-lg-10">
                
                 <?= $content ?>
               
            </div>
         
           
        </div>
          </div>
          
        </div>

                    
        </div>
       
        

    </div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; MTech Limited <?= date('Y') ?></p>

        <p class="pull-right"><?= $chirchir='Powered by MTech' ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
