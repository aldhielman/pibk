<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\search\RPASearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rpa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'uuid') ?>

    <?= $form->field($model, 'hashcode') ?>

    <?= $form->field($model, 'pemilik_barang') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'no_passport') ?>

    <?php // echo $form->field($model, 'kebangsaan') ?>

    <?php // echo $form->field($model, 'flight_voyage') ?>

    <?php // echo $form->field($model, 'negara_asal') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'uraian_barang') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'kurs') ?>

    <?php // echo $form->field($model, 'insurance') ?>

    <?php // echo $form->field($model, 'fob') ?>

    <?php // echo $form->field($model, 'freight') ?>

    <?php // echo $form->field($model, 'cif') ?>

    <?php // echo $form->field($model, 'nilai_pabean') ?>

    <?php // echo $form->field($model, 'bm') ?>

    <?php // echo $form->field($model, 'ppn') ?>

    <?php // echo $form->field($model, 'ppnbm') ?>

    <?php // echo $form->field($model, 'pph') ?>

    <?php // echo $form->field($model, 'denda_adm') ?>

    <?php // echo $form->field($model, 'total_bm_pdri') ?>

    <?php // echo $form->field($model, 'nama_petugas') ?>

    <?php // echo $form->field($model, 'nip_petugas') ?>

    <?php // echo $form->field($model, 'tanggal_rekam') ?>

    <?php // echo $form->field($model, 'no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
