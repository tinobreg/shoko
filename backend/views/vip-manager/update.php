<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\VipManager $model
*/
    
$this->title = Yii::t('app', 'Vip Manager') . " " . $model->idVipManager . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vip Manager'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->idVipManager, 'url' => ['view', 'idVipManager' => $model->idVipManager]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud vip-manager-update">

    <h1>
        <?= Yii::t('app', 'Vip Manager') ?>
        <small>
                        <?= $model->idVipManager ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'idVipManager' => $model->idVipManager], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
