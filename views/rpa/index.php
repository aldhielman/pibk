<?php

use app\models\RPA;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\RPASearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Release Postponement Approval';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rpa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Rekam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no',
            'tanggal_rekam:date',
            // 'id',
            // 'uuid',
            // 'hashcode',
            'pemilik_barang',
            // 'alamat:ntext',
            'no_passport',
            //'kebangsaan',
            //'flight_voyage',
            //'negara_asal',
            //'jumlah',
            //'uraian_barang:ntext',
            //'keterangan:ntext',
            //'kurs',
            //'insurance',
            //'fob',
            //'freight',
            //'cif',
            'nilai_pabean:decimal',
            //'bm',
            //'ppn',
            //'ppnbm',
            //'pph',
            //'denda_adm',
            'total_bm_pdri',
            //'nama_petugas',
            //'nip_petugas',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, RPA $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'uuid' => $model->uuid]);
                }
            ],
        ],
    ]); ?>


</div>