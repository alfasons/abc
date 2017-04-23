<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Contents;

class ContentsController extends Controller {

    public function actionIndex() {
        $principal = Contents::find()->where(['id' => 1])->one();
        return $this->render('index', ['p' => $principal,]);
    }

    public function actionBog() {
        $page = Contents::find()->where(['id' => 2])->one();
        return $this->render('bog', ['p' => $page,]);
    }

    public function actionStaff() {
        $page = Contents::find()->where(['id' => 4])->one();
        return $this->render('staff', ['p' => $page,]);
    }

    public function actionStrategics() {
        $page = Contents::find()->where(['id' => 3])->one();
        return $this->render('strategics', ['p' => $page,]);
    }

    public function actionPta() {
        $page = Contents::find()->where(['id' => 5])->one();
        return $this->render('pta', ['p' => $page,]);
    }

    public function actionSupport() {
        $page = Contents::find()->where(['id' => 6])->one();
        return $this->render('support', ['p' => $page,]);
    }

    public function actionHistory() {
        $page = Contents::find()->where(['id' => 7])->one();
        return $this->render('history', ['p' => $page,]);
    }

    public function actionListofp() {
        $page = Contents::find()->where(['id' => 8])->one();
        return $this->render('listofp', ['p' => $page,]);
    }

}
