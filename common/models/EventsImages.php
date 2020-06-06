<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * This is the model class for table "xevents_images".
 *
 * @property int $id
 * @property int|null $event_id
 * @property string|null $file
 * @property int $cover
 * @property int $uploaded_at
 *
 * @property Events $event
 */
class EventsImages extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 10;
    const STATUS_DELETED = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xevents_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id', 'cover', 'uploaded_at'], 'integer'],
            [['file'], 'string', 'max' => 255],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Events::className(), 'targetAttribute' => ['event_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_id' => 'Event ID',
            'file' => 'Archivo',
            'cover' => 'Portada',
            'uploaded_at' => 'Subido En',
        ];
    }

    public static function getImagefolder() : string
    {
        return Yii::getAlias('@frontend/web/images/events/');
    }

    public static function getImagethumbfolder() : string
    {
        return Yii::getAlias('@frontend/web/images/events/thumbs/');
    }

    public static function getFolder() : string
    {
        $directory = Yii::getAlias('@web/images/events/');

        return str_replace('admin/', '', $directory);
    }

    public function getImage() : string
    {
        return self::getFolder() . $this->file;
    }

    public function getThumb() : string
    {
        return self::getFolder() . 'thumbs/' . $this->file;
    }

    public function saveImages(UploadedFile $uploadedImage, string $name): bool
    {
        $uploadedImage->saveAs(self::getImagefolder() . 'tmp-' . $name);

        Image::resize(self::getImagefolder() . 'tmp-' . $name, 1024, null)
        ->save(self::getImagefolder() . $name, ['jpeg_quality' => 80]);

        Image::resize(self::getImagefolder() . 'tmp-' . $name, null, 300)
        ->save(self::getImagethumbfolder() . $name, ['jpeg_quality' => 80]);

        unlink(self::getImagefolder() . 'tmp-' . $name);

        return true;
    }

    public function setCover()
    {
        self::updateAll(['cover' => 0], 'article_id = ' . $this->article_id);

        $this->cover = self::STATUS_ACTIVE;

        if (self::update())
          return true;
        else
          return false;

    }

    /**
     * Gets query for [[Event]].
     *
     * @return \yii\db\ActiveQuery|EventsQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Events::className(), ['id' => 'event_id']);
    }

    /**
     * {@inheritdoc}
     * @return EventsImagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventsImagesQuery(get_called_class());
    }
}
