<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Serial */

$this->title = 'Update Serial: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Serials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="serial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
