<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model tahayldz\Sikayet\models\Sikayet */

$this->title = 'Create Sikayet';
$this->params['breadcrumbs'][] = ['label' => 'Sikayets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sikayet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
