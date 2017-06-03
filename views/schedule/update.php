<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Schedule */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Schedule',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Schedules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
