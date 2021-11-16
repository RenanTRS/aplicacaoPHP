<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Serial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="serial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_data_id')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
