<?php

namespace common\models;

use yii\helpers\ArrayHelper;

/**
 * This is the ActiveQuery class for [[Blog]].
 *
 * @see Blog
 */
class BlogQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere('[[status]]=10');
    }

    public function viewsChart()
    {
        $query = $this
            ->select(['title', 'views'])
            ->where(['>', 'views', 0])
            ->orderBy(['views' => SORT_DESC])
            ->limit(10)
            ->asArray()
            ->all();

        $posts = [];
        foreach ($query as $post) {
            array_push($posts, [$post['title'], (int)$post['views']]);
        }
        return $posts;
    }

    /**
     * {@inheritdoc}
     * @return Blog[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Blog|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
