<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model tahayldz\Sikayet\models\SikayetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sikayet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'isim') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'sikayetTuru') ?>

    <?= $form->field($model, 'sikayet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
