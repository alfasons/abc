<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Principals */

$this->title = 'Create Principals';
$this->params['breadcrumbs'][] = ['label' => 'Principals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="principals-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
