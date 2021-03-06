<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[EventsImages]].
 *
 * @see EventsImages
 */
class EventsImagesQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    public function cover()
    {
        return $this->andWhere('[[cover]]=1')->one();
    }

    /**
     * {@inheritdoc}
     * @return EventsImages[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return EventsImages|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
