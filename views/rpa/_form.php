<?php

use kartik\money\MaskMoney;
use yii\helpers\Html;
use kartik\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\form\RPAForm $model */
/** @var ActiveForm $form */
?>
<div class="rpa-_form">
    <?= Html::errorSummary($model) ?>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL
    ]); ?>

    <?= $form->field($model, 'pemilik_barang') ?>
    <?= $form->field($model, 'alamat') ?>
    <?= $form->field($model, 'no_passport') ?>
    <?= $form->field($model, 'kebangsaan') ?>
    <?= $form->field($model, 'flight_voyage') ?>
    <?= $form->field($model, 'negara_asal') ?>
    <?= $form->field($model, 'jumlah') ?>
    <?= $form->field($model, 'uraian_barang')->textarea() ?>
    <?= $form->field($model, 'kurs')->widget(MaskMoney::class) ?>
    <?= $form->field($model, 'fob') ?>
    <?= $form->field($model, 'insurance') ?>
    <?= $form->field($model, 'freight') ?>
    <?= $form->field($model, 'cif') ?>
    <?= $form->field($model, 'bm') ?>
    <?= $form->field($model, 'ppn') ?>
    <?= $form->field($model, 'ppnbm') ?>
    <?= $form->field($model, 'pph') ?>
    <?= $form->field($model, 'denda_adm') ?>
    <?= $form->field($model, 'keterangan')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- rpa-_form -->