<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;

use frontend\models\Students;

class StudentsController extends Controller
{
    public function actionIndex()
    {
      $principal = Students::find()->where(['id' => 1])->one();
      return $this->render('index',[ 'p'=>$principal, ]);  
    }
    
    public function actionGames()
    {
      $page = Students::find()->where(['id' => 2])->one();
      return $this->render('games',['p'=>$page,]);
    }
    public function actionAdmission()
    {
      $page = Students::find()->where(['id' => 3])->one();
      return $this->render('admission',['p'=>$page,]);
    }
      
}