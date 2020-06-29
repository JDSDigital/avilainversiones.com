<?php

namespace common\models;

use Yii;
use yii\helpers\Url;
use yii\imagine\Image;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "xblog".
 *
 * @property int $id
 * @property string $title
 * @property string $summary
 * @property string $article
 * @property string|null $file
 * @property string|null $source
 * @property int $views
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Blog extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 10;
    const STATUS_DELETED = 0;

    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xblog';
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
            [['title', 'summary', 'article'], 'required'],
            [['article'], 'string'],
            [['views', 'status'], 'integer'],
            [['title', 'summary', 'file'], 'string', 'max' => 255],
            ['source', 'url', 'defaultScheme' => 'https'],
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
            'summary' => 'Resumen',
            'article' => 'Artículo',
            'file' => 'Archivo',
            'source' => 'Fuente',
            'views' => 'Vistas',
            'status' => 'Estado',
            'created_at' => 'Creado En',
            'updated_at' => 'Actualizado En',
        ];
    }

    /**
     * Upload supplied images via UploadedFile
     * @return boolean
     */
    public function upload(): bool
    {
        if ($this->validate()) {

            $uploadedImages = UploadedFile::getInstances($this, 'image');

            if (count($uploadedImages) > 0) {

                foreach ($uploadedImages as $key => $uploadedImage) {
                    $name = $this->id . '-' . ($key + 1) . '-' . time() . '.' . $uploadedImage->extension;
                    if ($this->file) {
                        $url = Url::to('@frontend/web/images/blog/') . $this->file;
                        $urlThumb = Url::to('@frontend/web/images/blog/thumbs/') . $this->file;

                        unlink($url);
                        unlink($urlThumb);
                    }

                    $this->file = $name;

                    if (!$this->saveImages($uploadedImage, $name)) {
                        return false;
                    }

                    $this->save();
                }

                return true;

            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    public static function getImagefolder() : string
    {
        return Yii::getAlias('@frontend/web/images/blog/');
    }

    public static function getImagethumbfolder() : string
    {
        return Yii::getAlias('@frontend/web/images/blog/thumbs/');
    }

    public static function getFolder() : string
    {
        $directory = Yii::getAlias('@web/images/courses/');

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

    /**
     * {@inheritdoc}
     * @return BlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlogQuery(get_called_class());
    }
}
