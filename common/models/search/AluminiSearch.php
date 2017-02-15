<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Alumini;

/**
 * AluminiSearch represents the model behind the search form about `common\models\Alumini`.
 */
class AluminiSearch extends Alumini
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'full_name', 'gender', 'adm_no', 'year_completed'], 'integer'],
            [['mobile_no', 'email_address'], 'safe'],
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
        $query = Alumini::find();

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
            'full_name' => $this->full_name,
            'gender' => $this->gender,
            'adm_no' => $this->adm_no,
            'year_completed' => $this->year_completed,
        ]);

        $query->andFilterWhere(['like', 'mobile_no', $this->mobile_no])
            ->andFilterWhere(['like', 'email_address', $this->email_address]);

        return $dataProvider;
    }
}
