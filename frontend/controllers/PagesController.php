<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Pages;

class PagesController extends Controller
{
    public function actionAllpages()
    {
        $query = Pages::find();

        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count(),
        ]);

        $pages = $query->orderBy('page_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
       
            return $this->render('allpages', [
            'pages' => $pages,
            'pagination' => $pagination,
        ]);
    }

    public function actionIndex()
    {
       /* 
        
        * 
        *  
        */
        $page = Pages::find()->where(['page_id' => 1])->one();

    return $this->render('index',[
            'p'=>$page,
            ]);
        


    }
    public function actionDoccs()
    {
              $page = Pages::find()->where(['page_id' => 2])->one();

    return $this->render('doccs',[
            'p'=>$page,
            ]);
        

    }
   public function actionDownloads()
     {
        $page = Pages::find()->where(['page_id' => 3])->one();

         return $this->render('downloads',[
            'p'=>$page,
            ]);
     }
}