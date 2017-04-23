<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Alumini */

$this->title = $model->adm_no;
$this->params['breadcrumbs'][] = ['label' => 'Aluminis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumini-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->adm_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->adm_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'adm_no',
            'gender',
            'mobile_no',
            'email_address:email',
            'year',
        ],
    ]) ?>

</div>
