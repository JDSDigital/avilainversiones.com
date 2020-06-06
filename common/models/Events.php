<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "xevents".
 *
 * @property int $id
 * @property string $title
 * @property string $summary
 * @property string|null $article
 * @property int $views
 * @property int $featured
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property EventsImages[] $eventsImages
 */
class Events extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 10;
    const STATUS_DELETED = 0;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xevents';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'summary'], 'required'],
            [['article'], 'string'],
            [['views', 'featured', 'status'], 'integer'],
            [['title', 'summary'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Título',
            'summary' => 'Resúmen',
            'article' => 'Artículo',
            'views' => 'Vistas',
            'featured' => 'Destacado',
            'status' => 'Estado',
            'created_at' => 'Creado En',
            'updated_at' => 'Actualizado En',
        ];
    }

    /**
     * Gets query for [[EventsImages]].
     *
     * @return \yii\db\ActiveQuery|EventsImagesQuery
     */
    public function getEventsImages()
    {
        return $this->hasMany(EventsImages::className(), ['event_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventsQuery(get_called_class());
    }
}
