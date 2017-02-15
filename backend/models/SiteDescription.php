<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "site_description".
 *
 * @property integer $id
 * @property string $title_head
 * @property string $information
 * @property string $description
 */
class SiteDescription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_description';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_head', 'information', 'description'], 'required'],
            [['information'], 'string'],
            [['title_head', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_head' => 'Title Head',
            'information' => 'Information',
            'description' => 'Description',
        ];
    }
}
