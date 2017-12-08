<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Editorial;

/**
 * EditorialSearch represents the model behind the search form about `app\models\Editorial`.
 */
class EditorialSearch extends Editorial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_editorial'], 'integer'],
            [['editorial'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Editorial::find();

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
            'id_editorial' => $this->id_editorial,
        ]);

        $query->andFilterWhere(['like', 'editorial', $this->editorial]);

        return $dataProvider;
    }
}
