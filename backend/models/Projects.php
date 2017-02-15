<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $project_name
 * @property string $content
 * @property string $edited_by
 * @property string $date_created
 * @property string $date_updated
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'content', 'edited_by', 'date_created', 'date_updated'], 'required'],
            [['content'], 'string'],
            [['date_created', 'date_updated'], 'safe'],
            [['project_name'], 'string', 'max' => 200],
            [['edited_by'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'content' => 'Content',
            'edited_by' => 'Edited By',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }
}
