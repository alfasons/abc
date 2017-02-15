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


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('New Alumini', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'full_name',
             'gender',
            'mobile_no',
             'adm_no',
            'email_address:email',

             'year_completed',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
