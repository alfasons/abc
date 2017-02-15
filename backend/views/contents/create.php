<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Contents */

$this->title = 'Create Contents';
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contents-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
