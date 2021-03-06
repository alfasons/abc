<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use common\models\LoginForm;
use backend\models\SignupForm;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use backend\models\AuthItem;
use backend\models\User;
use backend\models\Contents;
use backend\models\Principals;
use backend\models\Downloads;
use backend\models\Academics;
use backend\models\Students;
use common\models\Alumini;
use backend\models\Faqs;
use backend\models\Projects;
use yii\helpers\Html;

/**
  /**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'index', 'faqs'],
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'faqs', 'signup'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        //count items in db
        $queryuser = User::find()->all();
        $countuser = count($queryuser);

        $querycontents = Contents::find()->all();
        $countcontents = count($querycontents);

        $queryuprincipals = Principals::find()->all();
        $countuprincipals = count($queryuprincipals);

        $queryacademics = Academics::find()->all();
        $countacademics = count($queryacademics);

        $querydownloads = Downloads::find()->all();
        $countdownloads = count($querydownloads);

        $queryfaqs = Faqs::find()->all();
        $countfaqs = count($queryfaqs);

        $querystudents = Students::find()->all();
        $countstudents = count($querystudents);

        $queryalumini = Alumini::find()->all();
        $countalumini = count($queryalumini);

        $queryprojects = Projects::find()->all();
        $countprojects = count($queryprojects);


        return $this->render('index', [
                    'countuser' => $countuser,
                    'countcontents' => $countcontents,
                    'countprincipals' => $countuprincipals,
                    'countacademics' => $countacademics,
                    'countdownloads' => $countdownloads,
                    'countfaqs' => $countfaqs,
                    'countstudents' => $countstudents,
                    'countalumini' => $countalumini,
                    'countprojects' => $countprojects,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin() {
        $this->layout = 'LoginLayout';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public function actionSignup() {
        $model = new SignupForm();
        $authItems = AuthItem::find()->all();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                $email = \Yii::$app->mailer->compose()
                        ->setTo($user->email)
                        ->setFrom([\Yii::$app->params['supportEmail'] => 'Chemolingot High'])
                        ->setSubject('Account Activation')
                        ->setTextBody(" Chemolingot High School
                           Hello " . $user->firstname . " " . $user->lastname . ",
                             Please click the link below to confirm  your Identity.
                            " .
                                Yii::$app->urlManager->createAbsoluteUrl(['site/confirm', 'id' => $user->id, 'key' => $user->auth_key]
                                ) . " Chemolingot High   ||   " . date('d-m-Y    h:m:s') . " "
                        )
                        ->send();
                if ($email) {
                    Yii::$app->getSession()->setFlash('success', 'Check Your email!');
                } else {
                    Yii::$app->getSession()->setFlash('warning', 'Failed, contact Admin!');
                }
                return $this->goHome();
            }
        }

        return $this->render('signup', [
                    'model' => $model,
                    'authItems' => $authItems,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $this->layout = 'LoginLayout';
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        $this->layout = 'LoginLayout';
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    public function actionReport() {
        return $this->render('report');
    }

    public function actionConfirm($key) {
        $user = \common\models\User::find()->where([
                    'auth_key' => $key,
                    'status' => 0,
                ])->one();
        if (!empty($user)) {
            $user->status = 10;
            $user->save();
            Yii::$app->getSession()->setFlash('success', 'Success!');
        } else {
            Yii::$app->getSession()->setFlash('warning', 'Failed!');
        }
        return $this->goHome();
    }

    public function actionErrors_403() {
        return $this->render('errors_403');
    }

    public function actionErrors_404() {
        return $this->render('errors_404');
    }

    public function actionErrors_405() {
        return $this->render('errors_405');
    }

    public function actionErrors_500() {
        return $this->render('errors_500');
    }

    public function actionErrors_503() {
        return $this->render('errors_503');
    }

}
