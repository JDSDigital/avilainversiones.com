<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Alliances]].
 *
 * @see Alliances
 */
class AlliancesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Alliances[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Alliances|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
