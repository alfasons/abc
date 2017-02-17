<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SearchAlumini */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aluminis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumini-index">
   <div class="container">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
 
    <p>
        <?= Html::a('Create Alumini', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'full_name',
            'mobile_no',
            'email_address:email',
            'gender',
             'adm_no',
            // 'year_completed',

            
        ],
    ]); ?>
    </div>

</div>
