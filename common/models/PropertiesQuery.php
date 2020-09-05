<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Properties]].
 *
 * @see Properties
 */
class PropertiesQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere('[[status]]=10');
    }

    /**
     * {@inheritdoc}
     * @return Properties[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Properties|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
