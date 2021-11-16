<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Serial */

$this->title = 'Create Serial';
$this->params['breadcrumbs'][] = ['label' => 'Serials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
