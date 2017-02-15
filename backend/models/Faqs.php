<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "faqs".
 *
 * @property integer $id
 * @property string $question
 * @property string $answer
 * @property string $edited_by
 * @property string $date_created
 * @property string $date_updated
 */
class Faqs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faqs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question', 'answer', 'edited_by', 'date_created', 'date_updated'], 'required'],
            [['answer'], 'string'],
            [['date_created', 'date_updated'], 'safe'],
            [['question', 'edited_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'answer' => 'Answer',
            'edited_by' => 'Edited By',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }
}
