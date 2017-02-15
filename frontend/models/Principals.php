<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "principals".
 *
 * @property integer $id
 * @property string $full_name
 * @property integer $Id_number
 * @property string $gender
 * @property string $from_date
 * @property string $to_date
 * @property string $achievements
 */
class Principals extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'principals';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'Id_number', 'gender', 'from_date', 'to_date', 'achievements'], 'required'],
            [['Id_number'], 'integer'],
            [['from_date'], 'safe'],
            [['achievements'], 'string'],
            [['full_name', 'to_date'], 'string', 'max' => 200],
            [['gender'], 'string', 'max' => 100],
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
            'Id_number' => 'Id Number',
            'gender' => 'Gender',
            'from_date' => 'From Date',
            'to_date' => 'To Date',
            'achievements' => 'Achievements',
        ];
    }
}
