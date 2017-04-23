<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;

use frontend\models\Academics;

class AcademicsController extends Controller
{
    public function actionIndex()
    {
      $principal = Academics::find()->where(['id' => 1])->one();
      return $this->render('index',[ 'p'=>$principal, ]);  
    }
    
    public function actionCongresses()
    {
      $page = Academics::find()->where(['id' => 2])->one();
      return $this->render('congresses',['p'=>$page,]);
    }
    public function actionKcse()
    {
      $page = Academics::find()->where(['id' => 4])->one();
      return $this->render('kcse',['p'=>$page,]);
    }
        public function actionResults()
    {
      $page = Academics::find()->where(['id' => 3])->one();
      return $this->render('results',[ 'p'=>$page, ]);  
    }
   
}