<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "clubs".
 *
 * @property integer $id
 * @property string $club_name
 * @property string $club_description
 * @property string $achievement
 * @property string $date_created
 * @property string $date_updated
 */
class Clubs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clubs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_name', 'club_description', 'achievement', 'date_created', 'date_updated'], 'required'],
            [['achievement'], 'string'],
            [['date_created', 'date_updated'], 'safe'],
            [['club_name', 'club_description'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'club_name' => 'Club Name',
            'club_description' => 'Club Description',
            'achievement' => 'Achievement',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }
}
