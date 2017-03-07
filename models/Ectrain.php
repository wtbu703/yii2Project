<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ectrain".
 *
 * @property string $id
 * @property string $name
 * @property integer $category
 * @property string $content
 * @property string $dayNum
 * @property integer $period
 * @property string $peopleNum
 * @property string $target
 * @property string $published
 * @property string $publisher
 */
class Ectrain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ectrain';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'category', 'dayNum', 'period', 'peopleNum', 'target', 'published'], 'required'],
            [['category', 'dayNum', 'period', 'peopleNum'], 'integer'],
            [['content'], 'string'],
            [['published'], 'safe'],
            [['id'], 'string', 'max' => 40],
            [['name'], 'string', 'max' => 16],
            [['target'], 'string', 'max' => 32],
            [['publisher'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '使用函数创建唯一40位ID',
            'name' => '培训名',
            'category' => '培训分类，字典',
            'content' => '内容',
            'dayNum' => '天数',
            'period' => '期数，字典',
            'peopleNum' => '人数',
            'target' => '培训对象，针对人群',
            'published' => '发布时间',
            'publisher' => '发布人',
        ];
    }
}