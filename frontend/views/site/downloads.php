<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'downloads';
$this->params['breadcrumbs'][] = $this->title;
?>

<h2 class="center"> DOWNLOADS.</h2>
<ul class="list-group">



    <div class="row">
        <br>
        <?php $i = 1; ?>
        <?php foreach ($downloads as $download): ?>

            <?php
            //declare varaiable
            $n = $i++;
            // $date = $download->date;
            $file_name = $download->file_name;
            $description = $download->description;
            $subject = $download->subject;
            $content = $download->content;
            $attachement = $download->attachment;
            ?>

            <li class="list-group-item">
                <p>

                    <?= $n; ?>. &nbsp;&nbsp; <span class="fa fa-paperclip"  </span> &nbsp;&nbsp;<?= $subject ?>  <!--?= $content; ?--><a href="<?= $attachement; ?>" >
                        <?= $description; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-success pull-right glyphicon glyphicon-download"> Downoad </button>

                    </a>
                </p>
            </li>

        <?php endforeach; ?>
        <?= LinkPager::widget(['pagination' => $pagination]) ?>

    </div>
</ul>
<br>


