<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Contents */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contents-view">

    <h4><?= Html::encode($this->title) ?></h4>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
           // 'id',
            'content_name',
            'description',
            'subject',
            'content_info:html',
            'edited_by',
            'date_created',
            'date_upadted',
        ],
    ]) ?>

</div>
