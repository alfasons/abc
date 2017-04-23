<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "downloads".
 *
 * @property integer $id
 * @property string $file_name
 * @property string $description
 * @property string $subject
 * @property string $content
 * @property string $attachment
 */
class Downloads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'downloads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_name', 'description', 'subject', 'content', 'attachment'], 'required'],
            [['content'], 'string'],
            [['file_name', 'description', 'subject', 'attachment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_name' => 'File Name',
            'description' => 'Description',
            'subject' => 'Subject',
            'content' => 'Content',
            'attachment' => 'Attachment',
        ];
    }
}
