<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbKabupatenKota */

$this->title = 'Update Tb Kabupaten Kota: ' . $model->kab_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Kabupaten Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kab_id, 'url' => ['view', 'id' => $model->kab_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-kabupaten-kota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
