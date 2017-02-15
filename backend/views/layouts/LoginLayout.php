<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
use common\widgets\Alert;

LoginAsset::register($this);
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


       <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center wow fadeInLeftBig">
        <h1>CHEMOLINGOT HIGH SCHOOL</h1>
        <img src="img/techlogo.png" id="logoimg" alt=" Logo" />
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
    

  
    <div class="container">
     
<div class="row">
           <?= $content ?>
      </div> 
    </div>
  <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; MTech <?= date('Y') ?></p>

        <p class="pull-right">powered by MTech</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
