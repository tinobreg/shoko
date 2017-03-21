<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Table $model
*/
    
$this->title = Yii::t('app', 'Table') . " " . $model->idTable . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Table'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->idTable, 'url' => ['view', 'idTable' => $model->idTable]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud table-update">

    <h1>
        <?= Yii::t('app', 'Table') ?>
        <small>
                        <?= $model->idTable ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'idTable' => $model->idTable], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
