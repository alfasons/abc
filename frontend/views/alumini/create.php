<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Alumini */

$this->title = 'Create Alumini';
$this->params['breadcrumbs'][] = ['label' => 'Aluminis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumini-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
