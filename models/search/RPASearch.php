<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RPA;

/**
 * RPASearch represents the model behind the search form of `app\models\RPA`.
 */
class RPASearch extends RPA
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kurs', 'insurance', 'fob', 'freight', 'cif', 'nilai_pabean', 'bm', 'ppn', 'ppnbm', 'pph', 'denda_adm', 'total_bm_pdri', 'no'], 'integer'],
            [['uuid', 'hashcode', 'pemilik_barang', 'alamat', 'no_passport', 'kebangsaan', 'flight_voyage', 'negara_asal', 'jumlah', 'uraian_barang', 'keterangan', 'nama_petugas', 'nip_petugas', 'tanggal_rekam'], 'safe'],
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
        $query = RPA::find();

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
            'kurs' => $this->kurs,
            'insurance' => $this->insurance,
            'fob' => $this->fob,
            'freight' => $this->freight,
            'cif' => $this->cif,
            'nilai_pabean' => $this->nilai_pabean,
            'bm' => $this->bm,
            'ppn' => $this->ppn,
            'ppnbm' => $this->ppnbm,
            'pph' => $this->pph,
            'denda_adm' => $this->denda_adm,
            'total_bm_pdri' => $this->total_bm_pdri,
            'tanggal_rekam' => $this->tanggal_rekam,
            'no' => $this->no,
        ]);

        $query->andFilterWhere(['like', 'uuid', $this->uuid])
            ->andFilterWhere(['like', 'hashcode', $this->hashcode])
            ->andFilterWhere(['like', 'pemilik_barang', $this->pemilik_barang])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_passport', $this->no_passport])
            ->andFilterWhere(['like', 'kebangsaan', $this->kebangsaan])
            ->andFilterWhere(['like', 'flight_voyage', $this->flight_voyage])
            ->andFilterWhere(['like', 'negara_asal', $this->negara_asal])
            ->andFilterWhere(['like', 'jumlah', $this->jumlah])
            ->andFilterWhere(['like', 'uraian_barang', $this->uraian_barang])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'nama_petugas', $this->nama_petugas])
            ->andFilterWhere(['like', 'nip_petugas', $this->nip_petugas]);

        return $dataProvider;
    }
}
