<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "alumini".
 *
 * @property integer $id
 * @property integer $full_name
 * @property string $mobile_no
 * @property string $email_address
 * @property integer $gender
 * @property integer $adm_no
 * @property integer $year_completed
 */
class Alumini extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumini';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'mobile_no', 'email_address', 'gender', 'adm_no', 'year_completed'], 'required'],
            [['full_name', 'gender', 'adm_no', 'year_completed'], 'integer'],
            [['mobile_no'], 'string', 'max' => 20],
            [['email_address'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'mobile_no' => 'Mobile No',
            'email_address' => 'Email Address',
            'gender' => 'Gender',
            'adm_no' => 'Adm No',
            'year_completed' => 'Year Completed',
        ];
    }
}
