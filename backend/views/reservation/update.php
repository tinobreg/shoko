<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Reservation $model
*/
    
$this->title = Yii::t('app', 'Reservation') . " " . $model->idReservation . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reservation'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->idReservation, 'url' => ['view', 'idReservation' => $model->idReservation]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud reservation-update">

    <h1>
        <?= Yii::t('app', 'Reservation') ?>
        <small>
                        <?= $model->idReservation ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'idReservation' => $model->idReservation], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
