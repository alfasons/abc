<?php

namespace frontend\controllers;
use frontend\models\Principals;

class PrincipalsController extends \yii\web\Controller
{
    public function actionIndex()
    {
      $principal = Principals::find()->where(['id' => 1])->one();
      return $this->render('index',[ 'p'=>$principal, ]);  
    }

}
