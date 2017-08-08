<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbKabupatenKota */

$this->title = $model->kab_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Kabupaten Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kabupaten-kota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kab_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kab_id], [
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
            'kab_id',
            'nama',
            'propinsi_id',
            'kab_kodya',
        ],
    ]) ?>

</div>
