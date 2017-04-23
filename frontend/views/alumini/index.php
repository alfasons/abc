<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\SearchAlumini */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aluminis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumini-index">

    <h2 class="center">CHEMOLINGOT ALUMINI'S</h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alumini', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div style=" background-color:transparent; color:#000; font-family:Arial, Helvetica, sans-serif; font-size:12px">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'full_name',
            'adm_no',
            'gender',
            //'mobile_no',
            // 'email_address:email',
             'year',
        ],
    ]); ?>
        </div>
</div>
