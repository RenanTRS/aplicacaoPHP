<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SerialnumberData */

$this->title = 'Create Serialnumber Data';
$this->params['breadcrumbs'][] = ['label' => 'Serialnumber Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serialnumber-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
