<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */

$this->title = 'Update Students: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="students-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
