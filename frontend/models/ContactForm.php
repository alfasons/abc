<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;



/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @inheritdoc
     * 
     */
    public static function tablename()
    {
        return 'contactform';
    }
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }
   public function sendEmail($supportEmail)
    {
        $adminSuccess = Yii::$app
            ->mailer
            ->compose(
                ['html' => 'adminFeedback-html', 'text' => 'adminFeedback-text'],
                [
                    'email' => $this->email,
                    'body'  => $this->body,
                    'name'  => $this->name,
                    'supportEmail' => $supportEmail,
                ]
            )
            ->setFrom([$supportEmail => Yii::$app->params['siteName']])
            ->setTo($supportEmail)
            ->setSubject('Chemolingot High:' . $this->subject)
            ->send();
        $userSuccess = Yii::$app
            ->mailer
            ->compose(
                ['html' => 'userFeedback-html', 'text' => 'userFeedback-text'],
                [
                    'email' => $this->email,
                    'body'  => $this->body,
                    'name'  => $this->name,
                    'supportEmail' => $supportEmail,
                ]
            )
            ->setFrom([$supportEmail => Yii::$app->params['siteName']])
            ->setTo($this->email)
            ->setSubject( Yii::$app->params['siteName'])
            ->send();
      
        return $userSuccess && $adminSuccess;
    }
       
}