<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\SiteDescription;
use frontend\models\Contents;
use yii\data\Pagination;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
            'class' => 'yii\captcha\CaptchaAction',
            'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
        ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
       
        $query = SiteDescription::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $homepage = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
       
            return $this->render('index', [
            'homepage' => $homepage,
            'pagination' => $pagination,
        ]);
        
       
    

    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
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

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())&& $model->validate() ) {
           
            if ($model->sendEmail(Yii::$app->params['supportEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }
            
          
            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
                
            ]);
        }

    }
  


    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
 public function actionSignup()
{
$model = new SignupForm();
if ($model->load(Yii::$app->request->post())) {
if ($user = $model->signup()) {
$email = \Yii::$app->mailer->compose()
->setTo($user->email)
->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
->setSubject('Signup Confirmation')
->setTextBody("
Click this link ".\yii\helpers\Html::a('confirm',
Yii::$app->urlManager->createAbsoluteUrl(
['site/confirm','id'=>$user->id,'key'=>$user->auth_key]
))
)
->send();
if($email){
Yii::$app->getSession()->setFlash('success','Check Your email!');
}
else{
Yii::$app->getSession()->setFlash('warning','Failed, contact Admin!');
}
return $this->goHome();
}
}
 
return $this->render('signup', [
'model' => $model,
]);
}

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
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
    public function actionResetPassword($token)
    {
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
    public function actionKcb()
    {
        return $this->render('kcb');
       
    }


    public function actionTest()
    {
     return $this->render('test');   
    }
    public function actionConfirm()
        {
        $user = \common\models\User::find()->where([

        'status'=>0,
        ])->one();
        if(!empty($user)){
        $user->status=10;
        $user->save();
        Yii::$app->getSession()->setFlash('success','Success!');
        }
        else{
        Yii::$app->getSession()->setFlash('warning','Failed!');
        }
        return $this->goHome();
        }
        
     public function actionContents()
             
         {
         $query= Contents::find();
         //$query =Contents::find();

        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count(),
        ]);

       $contentpages = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
       
            return $this->render('contents', [
            'contentpages' => $contentpages,
            'pagination' => $pagination,
        ]);

         }
         
       
}
