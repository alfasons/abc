<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "alumini".
 *
 * @property integer $id
 * @property string $full_name
 * @property integer $adm_no
 * @property string $gender
 * @property integer $mobile_no
 * @property string $email_address
 * @property string $year
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
            [['full_name', 'adm_no', 'gender', 'mobile_no', 'email_address', 'year'], 'required'],
            [['adm_no', 'mobile_no'], 'integer'],
            [['full_name'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 100],
            [['email_address'], 'string', 'max' => 200],
            [['year'], 'string', 'max' => 20],
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
            'adm_no' => 'Adm No',
            'gender' => 'Gender',
            'mobile_no' => 'Mobile No',
            'email_address' => 'Email Address',
            'year' => 'Year',
        ];
    }
}
