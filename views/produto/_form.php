<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'box_cod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'is_gs')->textInput() ?>

    <?= $form->field($model, 'is_rma')->textInput() ?>

    <?= $form->field($model, 'started_at')->textInput() ?>

    <?= $form->field($model, 'packed_at')->textInput() ?>

    <?= $form->field($model, 'cycle_time')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
