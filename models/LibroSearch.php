<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Libro;

/**
 * LibroSearch represents the model behind the search form about `app\models\Libro`.
 */
class LibroSearch extends Libro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_libro', 'id_autor', 'id_categoria', 'id_editorial', 'precio'], 'integer'],
            [['isbn', 'titulo'], 'safe'],
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
        $query = Libro::find();

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
            'id_libro' => $this->id_libro,
            'id_autor' => $this->id_autor,
            'id_categoria' => $this->id_categoria,
            'id_editorial' => $this->id_editorial,
            'precio' => $this->precio,
        ]);

        $query->andFilterWhere(['like', 'isbn', $this->isbn])
            ->andFilterWhere(['like', 'titulo', $this->titulo]);

        return $dataProvider;
    }
}
