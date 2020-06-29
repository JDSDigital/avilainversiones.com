<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "xproperties_images".
 *
 * @property int $id
 * @property int $property_id
 * @property string $file
 * @property int $cover
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Properties $property
 */
class PropertiesImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xproperties_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'cover'], 'integer'],
            [['file'], 'required'],
            [['file'], 'image', 'extensions' => 'png, jpg'],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Properties::className(), 'targetAttribute' => ['property_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_id' => 'Propiedad',
            'file' => 'Archivo',
            'cover' => 'Portada',
            'created_at' => 'Creado En',
            'updated_at' => 'Actualizado En',
        ];
    }

    public static function getImagefolder() : string
    {
        return Yii::getAlias('@frontend/web/images/properties/');
    }

    public static function getImagethumbfolder() : string
    {
        return Yii::getAlias('@frontend/web/images/properties/thumbs/');
    }

    public static function getFolder() : string
    {
        $directory = Yii::getAlias('@web/images/properties/');

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
        if (!file_exists(self::getImagethumbfolder()))
        {
            FileHelper::createDirectory(self::getImagethumbfolder(), $mode = 0777, $recursive = true);
        }

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
        self::updateAll(['cover' => 0], 'property_id = ' . $this->property_id);

        $this->cover = self::STATUS_ACTIVE;

        if (self::update())
          return true;
        else
          return false;

    }

    /**
     * Gets query for [[Property]].
     *
     * @return \yii\db\ActiveQuery|PropertiesQuery
     */
    public function getProperty()
    {
        return $this->hasOne(Properties::className(), ['id' => 'property_id']);
    }

    /**
     * {@inheritdoc}
     * @return PropertiesImagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PropertiesImagesQuery(get_called_class());
    }
}
