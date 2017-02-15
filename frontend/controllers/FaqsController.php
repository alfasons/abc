<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Faqs;


class FaqsController extends Controller
{
 
    public function actionIndex()
    {
        $query = Faqs::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $faqs = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
       
            return $this->render('index', [
            'faqs' => $faqs,
            'pagination' => $pagination,
        ]);
        
    }
    
}