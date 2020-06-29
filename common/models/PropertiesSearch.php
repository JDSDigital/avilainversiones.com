<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Properties;

/**
 * PropertiesSearch represents the model behind the search form of `common\models\Properties`.
 */
class PropertiesSearch extends Properties
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'contract_id', 'featured', 'rooms', 'toilets', 'garage', 'views', 'taken', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'summary', 'description', 'city', 'commune', 'address'], 'safe'],
            [['price', 'area'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Properties::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'type_id' => $this->type_id,
            'contract_id' => $this->contract_id,
            'price' => $this->price,
            'featured' => $this->featured,
            'area' => $this->area,
            'rooms' => $this->rooms,
            'toilets' => $this->toilets,
            'garage' => $this->garage,
            'views' => $this->views,
            'taken' => $this->taken,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'commune', $this->commune])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
