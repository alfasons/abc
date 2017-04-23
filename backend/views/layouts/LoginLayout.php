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

                <img src="img/techlogo.png" id="logoimg" class=" img img-rounded" alt=" Logo">
            </div>

            <br>
        </div>
        <!--END PAGE CONTENT -->
        <div class="container">

            <div class="row col-md-offset-4 " style="margin-top:10px; width:400px; font-size: 13px;" class=" col-md-5 col-md-offset-4 col-sm-12 col-sm-offset-40 ">
                <?= $content ?>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
