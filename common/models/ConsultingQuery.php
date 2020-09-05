<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Consulting]].
 *
 * @see Consulting
 */
class ConsultingQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere('[[status]]=10');
    }

    /**
     * {@inheritdoc}
     * @return Consulting[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Consulting|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
