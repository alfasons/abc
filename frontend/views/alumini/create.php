<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Alumini */

$this->title = 'Register as an alumini';
$this->params['breadcrumbs'][] = ['label' => 'Aluminis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumini-create">

    <h2 class="center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
