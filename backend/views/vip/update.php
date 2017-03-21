<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Vip $model
*/
    
$this->title = Yii::t('app', 'Vip') . " " . $model->name . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vip'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'idVip' => $model->idVip]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud vip-update">

    <h1>
        <?= Yii::t('app', 'Vip') ?>
        <small>
                        <?= $model->name ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'idVip' => $model->idVip], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
