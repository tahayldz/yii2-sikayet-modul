<?php
use tahayldz\Sikayet\models\SikayetTurleri;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model tahayldz\Sikayet\models\Sikayet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sikayet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $turs=SikayetTurleri::find()->all();
	$listData=ArrayHelper::map($turs,'sikayetTur','sikayetTur');     ?>
    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sikayetTuru')->dropDownList($listData,['prompt'=>'Select...']); ?>

    <?= $form->field($model, 'sikayet')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
