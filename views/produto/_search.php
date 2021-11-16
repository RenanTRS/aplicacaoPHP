<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'box_cod') ?>

    <?= $form->field($model, 'detail') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'is_gs') ?>

    <?php // echo $form->field($model, 'is_rma') ?>

    <?php // echo $form->field($model, 'started_at') ?>

    <?php // echo $form->field($model, 'packed_at') ?>

    <?php // echo $form->field($model, 'cycle_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
