<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pages */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('#editor_id', {
            langType : 'en'
        });
    });
</script>
<div class="pages-view">

    <div class="container">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->page_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->page_id], [
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
            'page_id',
            'page_url_name:url',
            'title',
            'subject',
            'content:ntext',
            'otherinfo',
        ],
    ]) ?>

</div>
    </div>

