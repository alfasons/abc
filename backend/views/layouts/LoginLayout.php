<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Carousel;

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

                <img src="img/schoollogo.png" id="logoimg" class=" img img-rounded" alt=" Logo" width="80" height="80">
            </div>

            <br>
        </div>
        <!--END PAGE CONTENT -->
        <!--div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
        <?php /*
          echo Carousel::widget(
          ['items' => [
          ['content' => '<img src="http://upload.wikimedia.org/wikipedia/commons/a/a1/Baby_goats_jan_2007_crop.jpg"/>',
          'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
          'options' => ['interval' => '600']
          ],
          ['content' => '<img src="http://t0.gstatic.com/images?q=tbn:ANd9GcQ-YmEBJbefTMcAHWut4qcZTFuq-ZyTudPjA5HCkSgMvlgf5wM5hQ"/>',
          'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
          'options' => ['interval' => '600']
          ],
          ['content' => '<img src="http://pixabay.com/static/uploads/photo/2014/08/05/09/58/goat-410279_640.jpg"/>',
          'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
          'options' => ['interval' => '600']
          ],
          ]
          ]);
         */ ?>
                </div>
            </div>
        </div-->
        <div class="container">

            <div class="row col-md-offset-4 " style="margin-top:10px; width:400px; font-size: 13px;" class=" col-md-5 col-md-offset-4 col-sm-12 col-sm-offset-40 ">
                <?= $content ?>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
