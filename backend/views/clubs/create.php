<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Clubs */

$this->title = 'Create Clubs';
$this->params['breadcrumbs'][] = ['label' => 'Clubs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clubs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
