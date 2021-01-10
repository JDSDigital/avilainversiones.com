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
    public $thumbImage;

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
            [['user_id', 'title', 'article'], 'required'],
            [['article'], 'string'],
            [['user_id', 'views', 'status'], 'integer'],
            [['title', 'summary', 'author', 'file', 'thumb'], 'string', 'max' => 255],
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
            'user_id' => 'Usuario',
            'title' => 'Título',
            'summary' => 'Resumen',
            'article' => 'Artículo',
            'thumb' => 'Miniatura',
            'author' => 'Autor',
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

            $uploadedImage = UploadedFile::getInstance($this, 'image');
            $uploadedThumb = UploadedFile::getInstance($this, 'thumbImage');

            if ($uploadedImage) {
                $name = $this->id . time() . '.' . $uploadedImage->extension;

                if ($this->file) {
                    $url = Url::to('@frontend/web/images/blog/') . $this->file;
                    unlink($url);
                }

                $this->file = $name;

                $this->saveImage($uploadedImage, $name);
                if (!$this->save()) {
                    return false;
                }
            }

            if ($uploadedThumb) {
                $nameThumb = $this->id . '-thumb-' . time() . '.' . $uploadedThumb->extension;

                if ($this->thumb) {
                    $urlThumb = Url::to('@frontend/web/images/blog/thumbs/') . $this->thumb;
                    unlink($urlThumb);
                }

                $this->thumb = $nameThumb;

                $this->saveThumb($uploadedThumb, $nameThumb);
                if (!$this->save()) {
                    return false;
                }
            }

            return true;
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
        $directory = Yii::getAlias('@web/images/blog/');

        return str_replace('admin/', '', $directory);
    }

    public function getImage() : string
    {
        return self::getFolder() . $this->file;
    }

    public function getThumb() : string
    {
        return self::getFolder() . 'thumbs/' . $this->thumb;
    }

    public function saveImage(UploadedFile $uploadedImage, string $name): bool
    {
        if (!file_exists(self::getImagethumbfolder()))
        {
            FileHelper::createDirectory(self::getImagethumbfolder(), $mode = 0777, $recursive = true);
        }

        $uploadedImage->saveAs(self::getImagefolder() . 'tmp-' . $name);

        Image::resize(self::getImagefolder() . 'tmp-' . $name, 1024, null)
        ->save(self::getImagefolder() . $name, ['jpeg_quality' => 80]);

        unlink(self::getImagefolder() . 'tmp-' . $name);

        return true;
    }

    public function saveThumb(UploadedFile $uploadedImage, string $name): bool
    {
        if (!file_exists(self::getImagethumbfolder()))
        {
            FileHelper::createDirectory(self::getImagethumbfolder(), $mode = 0777, $recursive = true);
        }

        $uploadedImage->saveAs(self::getImagefolder() . 'tmp-' . $name);

        Image::resize(self::getImagefolder() . 'tmp-' . $name, null, 300)
        ->save(self::getImagethumbfolder() . $name, ['jpeg_quality' => 80]);

        unlink(self::getImagefolder() . 'tmp-' . $name);

        return true;
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getSeoTitle(): string
    {
        return str_replace(' ', '-', strtolower( $this->title ));
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
