<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\RPA $model */

$this->title = 'Update RPA: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'RPA', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uuid, 'url' => ['view', 'id' => $model->uuid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rpa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>