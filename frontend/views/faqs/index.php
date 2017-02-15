<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Faqs';
$this->params['breadcrumbs'][] = $this->title;

?>
<br>
<h3><strong> <u>Frequently Asked Questions & Instructions</u></strong></h3>

<hr>
    <?php foreach ($faqs as $faq): ?> 

<div class="bs-example">
    <div class="panel-group" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $faq->id;?>"><?= $faq->id;?>. <?= $faq->question;?></a>
                </h4>
            </div>
            <div id="collapse<?= $faq->id;?>" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>
                        
                         <div class="row">
                             &nbsp;&nbsp; ~ <?= $faq->answer;?> 
                         </div>                    
                  </p>
            </div>
       </div>
    </div>
          <br/>
 </div>
  
 </div>


    
   
    
   
<?php endforeach; ?>

<?= LinkPager::widget(['pagination' => $pagination]).'<br> Pages' ?>


