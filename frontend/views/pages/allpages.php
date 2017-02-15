<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'All Documents';
$this->params['breadcrumbs'][] = $this->title;
?>

  <h><u> <strong>AlL Our Doccs here </strong></u>:Pages</h><br>
<?= LinkPager::widget(['pagination' => $pagination]) ?>

   <?php foreach ($pages as $page): ?>    
      <?= $page->content;?>    
   
<?php endforeach; ?>




