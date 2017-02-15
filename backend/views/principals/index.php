<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SearchPrincipals */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Principals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="principals-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 
    <p>
        <?= Html::a('New Principal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
     
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
            'full_name',
           'Id_number',
            'gender',
            'from_date',
             'to_date',
            // 'achievements:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
