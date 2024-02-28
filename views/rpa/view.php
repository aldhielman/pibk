<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\RPA $model */

$this->title = $model->uuid;
$this->params['breadcrumbs'][] = ['label' => 'RPA', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rpa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->uuid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->uuid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'uuid',
            'hashcode',
            'pemilik_barang',
            'alamat:ntext',
            'no_passport',
            'kebangsaan',
            'flight_voyage',
            'negara_asal',
            'jumlah',
            'uraian_barang:ntext',
            'keterangan:ntext',
            'kurs',
            'insurance',
            'fob',
            'freight',
            'cif',
            'nilai_pabean',
            'bm',
            'ppn',
            'ppnbm',
            'pph',
            'denda_adm',
            'total_bm_pdri',
            'nama_petugas',
            'nip_petugas',
            'tanggal_rekam',
            'no',
        ],
    ]) ?>

</div>