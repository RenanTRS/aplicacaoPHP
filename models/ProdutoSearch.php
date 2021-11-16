<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Produto;

/**
 * ProdutoSearch represents the model behind the search form of `app\models\Produto`.
 */
class ProdutoSearch extends Produto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'is_gs', 'is_rma'], 'integer'],
            [['product_id', 'box_cod', 'detail', 'started_at', 'packed_at', 'cycle_time'], 'safe'],
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
        $query = Produto::find();

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
            'status' => $this->status,
            'is_gs' => $this->is_gs,
            'is_rma' => $this->is_rma,
            'started_at' => $this->started_at,
            'packed_at' => $this->packed_at,
        ]);

        $query->andFilterWhere(['like', 'product_id', $this->product_id])
            ->andFilterWhere(['like', 'box_cod', $this->box_cod])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'cycle_time', $this->cycle_time]);

        return $dataProvider;
    }
}
