<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[PropertiesImages]].
 *
 * @see PropertiesImages
 */
class PropertiesImagesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PropertiesImages[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PropertiesImages|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
