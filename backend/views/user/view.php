<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = 'Profile';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">


    <div class="row">
        <div class="col-md-5">

            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
        <div class=" col-md-offset-2 col-md-3">

            <?= Html::img($model->attachment, ['class' => 'img-circle', 'width' => '100', 'height' => '100']) ?>
        </div>
    </div>


    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            /*  this is for display an image  //photo,
              [
              'attribute' => 'Profile Picture',
              'value' => $model->attachment,
              'format' => ['image', ['class' => 'img-circle', 'width' => '100', 'height' => '100']],
              ],
             *
             */
            //  'id',
            'firstname',
            'lastname',
            'idnumber',
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
        ],
    ])
    ?>

</div>
