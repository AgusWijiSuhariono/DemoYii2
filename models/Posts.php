<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $date
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'title', 'description', 'content', 'date'], 'required'],
            [['author_id'], 'integer'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'date' => 'Date',
        ];
    }

    public function getAuthor()
    {
        return $this->hasOne(Authors::className(), ['id' => 'author_id']);
    }
}
