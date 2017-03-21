<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Date $model
*/
    
$this->title = Yii::t('app', 'Date') . " " . $model->idDate . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Date'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->idDate, 'url' => ['view', 'idDate' => $model->idDate]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud date-update">

    <h1>
        <?= Yii::t('app', 'Date') ?>
        <small>
                        <?= $model->idDate ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'idDate' => $model->idDate], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
