<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Codes';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php /*

 *    <?php foreach ($pages as $page): ?>    
      <?= $page->content;?>    
   
<?php endforeach; ?>

<?= LinkPager::widget(['pagination' => $pagination]).'</br>Pages' ?>
 *  */?>

<?= $p->content;?> 