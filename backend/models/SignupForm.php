<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $firstname;
    public $lastname;
    public $idnumber;
    public $username;
    public $email;
    public $password;
    


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ 'firstname','required' ],
            [ 'lastname','required' ],
            [ 'idnumber','required' ],
            
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
  public function signup()
{
    if ($this->validate()) {
        $user = new User();
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->idnumber = $this->idnumber;
        $user->username = $this->username;
        $user->email = $this->email;
       
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status = 0; 
        if ($user->save()) {
            return $user;
        }
    }
 
    return null;
}
}
