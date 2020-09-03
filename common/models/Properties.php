<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "xproperties_properties".
 *
 * @property int $id
 * @property int $type_id
 * @property int $contract_id
 * @property string $title
 * @property string|null $summary
 * @property string|null $description
 * @property string|null $city
 * @property string|null $commune
 * @property float|null $price
 * @property int $featured
 * @property float|null $area
 * @property int|null $rooms
 * @property int|null $toilets
 * @property int|null $garage
 * @property string|null $address
 * @property int $visits
 * @property int $taken
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property PropertiesImages[] $xpropertiesImages
 */
class Properties extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 10;
    const STATUS_DELETED = 0;

    const TYPES = [
      1 => "Departamento",
      2 => "Casa"
    ];
    const CONTRACTS = [
      1 => "Arriendo",
      2 => "Venta"
    ];

    public $images;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xproperties_properties';
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
            [['type_id', 'contract_id', 'featured', 'rooms', 'toilets', 'garage', 'views', 'taken', 'status'], 'integer', 'min' => 0],
            [['title'], 'required'],
            [['description'], 'string'],
            [['price', 'area'], 'number', 'min' => 0],
            [['title', 'summary', 'city', 'commune', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_id' => 'Tipo',
            'contract_id' => 'Contrato',
            'title' => 'Título',
            'summary' => 'Resumen',
            'description' => 'Descripción',
            'city' => 'Ciudad',
            'commune' => 'Comuna',
            'price' => 'Precio',
            'featured' => 'Destacado',
            'area' => 'Area (m2)',
            'rooms' => 'Habitaciones',
            'toilets' => 'Baños',
            'garage' => 'Estacionamiento',
            'address' => 'Dirección',
            'views' => 'Vistas',
            'taken' => 'Ocupada',
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

            $uploadedImages = UploadedFile::getInstances($this, 'images');

            if (count($uploadedImages) > 0) {

                foreach ($uploadedImages as $key => $uploadedImage) {
                    $image = new PropertiesImages;
                    $name = $this->id . '-' . ($key + 1) . '-' . time() . '.' . $uploadedImage->extension;

                    $image->file = $name;
                    $image->property_id = $this->id;

                    if (!$image->saveImages($uploadedImage, $name)) {
                        return false;
                    }

                    if ($key == 0) {
                        $image->cover = (!$this->cover) ? PropertiesImages::STATUS_ACTIVE : PropertiesImages::STATUS_DELETED;
                    }

                    $image->save();
                }

                return true;

            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    public function getCover()
    {
        return $this->getPropertiesImages()->where(['cover' => PropertiesImages::STATUS_ACTIVE])->one();
    }

    public function getTypes()
    {
        return self::TYPES;
    }

    public function getContracts()
    {
        return self::CONTRACTS;
    }

    public function getType()
    {
        return self::TYPES[$this->type_id];
    }

    public function getContract()
    {
        return self::CONTRACTS[$this->contract_id];
    }

    public function getArea()
    {
        return $this->area . " m2";
    }

    /**
     * Gets query for [[XpropertiesImages]].
     *
     * @return \yii\db\ActiveQuery|PropertiesImagesQuery
     */
    public function getPropertiesImages()
    {
        return $this->hasMany(PropertiesImages::className(), ['property_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return PropertiesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PropertiesQuery(get_called_class());
    }
}
