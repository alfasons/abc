<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Alumini */

$this->title = 'Update Alumini: ' . $model->adm_no;
$this->params['breadcrumbs'][] = ['label' => 'Aluminis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adm_no, 'url' => ['view', 'id' => $model->adm_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alumini-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
