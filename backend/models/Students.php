<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $id
 * @property string $content_name
 * @property string $description
 * @property string $subject
 * @property string $content_info
 * @property string $edited_by
 * @property string $date_created
 * @property string $date_upadted
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_name', 'description', 'subject', 'content_info', 'edited_by', 'date_created', 'date_upadted'], 'required'],
            [['content_info'], 'string'],
            [['date_created', 'date_upadted'], 'safe'],
            [['content_name', 'description', 'edited_by'], 'string', 'max' => 200],
            [['subject'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content_name' => 'Content Name',
            'description' => 'Description',
            'subject' => 'Subject',
            'content_info' => 'Content Info',
            'edited_by' => 'Edited By',
            'date_created' => 'Date Created',
            'date_upadted' => 'Date Upadted',
        ];
    }
}
