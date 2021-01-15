<?php

namespace tahayldz\Sikayet\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use tahayldz\Sikayet\models\Sikayet;

/**
 * SikayetSearch represents the model behind the search form of `tahayldz\Sikayet\models\Sikayet`.
 */
class SikayetSearch extends Sikayet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['isim', 'email', 'sikayetTuru', 'sikayet'], 'safe'],
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
        $query = Sikayet::find();

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
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'sikayetTuru', $this->sikayetTuru])
            ->andFilterWhere(['like', 'sikayet', $this->sikayet]);

        return $dataProvider;
    }
}
