<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Principals;

/**
 * SearchPrincipals represents the model behind the search form about `backend\models\Principals`.
 */
class SearchPrincipals extends Principals
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Id_number'], 'integer'],
            [['full_name', 'gender', 'from_date', 'to_date', 'achievements'], 'safe'],
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
        $query = Principals::find();

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
            'Id_number' => $this->Id_number,
            'from_date' => $this->from_date,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'to_date', $this->to_date])
            ->andFilterWhere(['like', 'achievements', $this->achievements]);

        return $dataProvider;
    }
}
