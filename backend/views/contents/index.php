<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SearchContens */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contents-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   <p>
        <?= Html::a('Create Content', ['create'], ['class' => 'btn btn-success']) ?>
   </p>

   
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'content_name',
            'description',
            'subject',
           // 'content_info:ntext',
             'edited_by',
             'date_created',
            'date_upadted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
