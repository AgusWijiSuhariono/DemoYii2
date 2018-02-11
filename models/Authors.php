<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $birthdate
 * @property string $added
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'birthdate'], 'required'],
            [['birthdate', 'added'], 'safe'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'birthdate' => 'Birthdate',
            'added' => 'Added',
        ];
    }
}
