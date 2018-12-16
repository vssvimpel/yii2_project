<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "massage".
 *
 * @property int $id
 * @property string $text
 * @property string $name
 * @property string $email
 * @property int $views
 */
class Massage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'massage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'name'], 'required'],
            [['text'], 'string'],
            [['views'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID сообщения',
            'text' => 'Текст сообщения',
            'name' => 'Имя',
            'email' => 'Email',
            'views' => 'Просмотров',
        ];
    }
}
