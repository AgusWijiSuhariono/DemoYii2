<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbKabupatenKota */

$this->title = 'Create Tb Kabupaten Kota';
$this->params['breadcrumbs'][] = ['label' => 'Tb Kabupaten Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kabupaten-kota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
