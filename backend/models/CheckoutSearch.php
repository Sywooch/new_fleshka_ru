<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Checkout;

/**
 * CheckoutSearch represents the model behind the search form about `app\models\Checkout`.
 */
class CheckoutSearch extends Checkout {

    //public $status;
    public $statusName;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'product_id'], 'integer'],
            [['product_title', 'prices', 'colors', 'session_id', 'name', 'email', 'comment', 'phone', 'statusFull','date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Checkout::find()->groupBy('session_id')->orderBy('id desc');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $query->joinWith(['statusFull']);
        $this->load($params);

        $dataProvider->setSort([
            'attributes' => [
                'id',
                'session_id',
                'name',
                'email',
                'status',
                'date',
                'statusName' => [
                    'asc' => ['yu_checkout_status.title' => SORT_ASC],
                    'desc' => ['yu_checkout_status.title' => SORT_DESC],
                ]
            ]
        ]);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
        ]);

//        $query->joinWith(['statusFull' => function ($q) {
//                $q->where('yu_checkout_status.title LIKE "%' . $this->statusName . '%"');
//            }]);

        $query->andFilterWhere(['like', 'product_title', $this->product_title])
                ->andFilterWhere(['like', 'prices', $this->prices])
                ->andFilterWhere(['like', 'colors', $this->colors])
                ->andFilterWhere(['like', 'session_id', $this->session_id])
                ->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'email', $this->email])
                ->andFilterWhere(['like', 'comment', $this->comment])
                ->andFilterWhere(['like', 'phone', $this->phone])
                ->andFilterWhere(['like', 'date', $this->date])
                ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }

}
