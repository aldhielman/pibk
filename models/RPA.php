<?php

namespace app\models;

use thamtech\uuid\helpers\UuidHelper;
use Yii;

/**
 * This is the model class for table "rpa".
 *
 * @property int $id
 * @property string $uuid
 * @property string $hashcode
 * @property string $pemilik_barang
 * @property string $alamat
 * @property string $no_passport
 * @property string $kebangsaan
 * @property string $flight_voyage
 * @property string $negara_asal
 * @property string $jumlah
 * @property string $uraian_barang
 * @property string|null $keterangan
 * @property int $kurs
 * @property int $insurance
 * @property int $fob
 * @property int $freight
 * @property int $cif
 * @property int $nilai_pabean
 * @property int $bm
 * @property int $ppn
 * @property int $ppnbm
 * @property int $pph
 * @property int $denda_adm
 * @property int $total_bm_pdri
 * @property string $nama_petugas
 * @property string $nip_petugas
 * @property string $tanggal_rekam
 * @property int $no
 */
class RPA extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpa';
    }

    public function behaviors()
    {
        return [
            [
                'class' => 'mdm\autonumber\Behavior',
                'attribute' => 'no', // required
                'value' => 'RPA-?/KBC.1606/' . date('Y'), // format auto number. '?' will be replaced with generated number
            ],
        ];
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->uuid = UuidHelper::uuid();
            $this->nilai_pabean = $this->cif * $this->kurs;
            $this->total_bm_pdri = $this->bm + $this->pph + $this->ppn + $this->ppnbm + $this->denda_adm;
            $this->nama_petugas = "Thoriq Rivaldi Novendra";
            $this->nip_petugas = "199411252015021003";
            $this->tanggal_rekam = date('Y-m-d');
        }
        $this->hashcode = hash('md5', serialize($this));

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pemilik_barang', 'alamat', 'no_passport', 'kebangsaan', 'flight_voyage', 'negara_asal', 'jumlah', 'uraian_barang', 'kurs', 'insurance', 'fob', 'freight', 'cif', 'nilai_pabean', 'bm', 'ppn', 'ppnbm', 'pph', 'denda_adm', 'total_bm_pdri'], 'required'],
            [['alamat', 'uraian_barang', 'keterangan'], 'string'],
            [['kurs', 'insurance', 'fob', 'freight', 'cif', 'nilai_pabean', 'bm', 'ppn', 'ppnbm', 'pph', 'denda_adm', 'total_bm_pdri', 'no'], 'integer'],
            [['tanggal_rekam'], 'safe'],
            [['uuid'], 'string', 'max' => 36],
            [['hashcode', 'kebangsaan', 'flight_voyage', 'negara_asal', 'jumlah', 'nama_petugas'], 'string', 'max' => 50],
            [['pemilik_barang'], 'string', 'max' => 100],
            [['no_passport'], 'string', 'max' => 15],
            [['nip_petugas'], 'string', 'max' => 18],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uuid' => 'UUID',
            'hashcode' => 'Hashcode',
            'pemilik_barang' => 'Pemilik Barang',
            'alamat' => 'Alamat',
            'no_passport' => 'No Passport',
            'kebangsaan' => 'Kebangsaan',
            'flight_voyage' => 'Flight Voyage',
            'negara_asal' => 'Negara Asal',
            'jumlah' => 'Jumlah',
            'uraian_barang' => 'Uraian Barang',
            'keterangan' => 'Keterangan',
            'kurs' => 'Kurs',
            'insurance' => 'Insurance',
            'fob' => 'FOB',
            'freight' => 'Freight',
            'cif' => 'CIF',
            'nilai_pabean' => 'Nilai Pabean',
            'bm' => 'BM',
            'ppn' => 'PPN',
            'ppnbm' => 'PPnBM',
            'pph' => 'PPh',
            'denda_adm' => 'Denda Adm',
            'total_bm_pdri' => 'Total BM PDRI',
            'nama_petugas' => 'Nama Petugas',
            'nip_petugas' => 'Nip Petugas',
            'tanggal_rekam' => 'Tanggal',
            'no' => 'No',
        ];
    }
}
