<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SearchClubs */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clubs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clubs-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create a Club', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'club_name',
            'club_description',
            'achievement:ntext',
            'date_created',
             'date_updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
