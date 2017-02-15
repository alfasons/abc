<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $page_id
 * @property string $page_url_name
 * @property string $title
 * @property string $subject
 * @property string $content
 * @property string $otherinfo
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_url_name', 'title', 'subject', 'content', 'otherinfo'], 'required'],
            [['content'], 'string'],
            [['page_url_name', 'title', 'subject', 'otherinfo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'page_id' => 'Page ID',
            'page_url_name' => 'Page Url Name',
            'title' => 'Title',
            'subject' => 'Subject',
            'content' => 'Content',
            'otherinfo' => 'Edited by:',
        ];
    }
}
