<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\ListFriday $model
*/
    
$this->title = Yii::t('app', 'List Friday') . " " . $model->name . ', ' . Yii::t('app', 'Edit');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'List Friday'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'idListFriday' => $model->idListFriday]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Edit');
?>
<div class="giiant-crud list-friday-update">

    <h1>
        <?= Yii::t('app', 'List Friday') ?>
        <small>
                        <?= $model->name ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('app', 'View'), ['view', 'idListFriday' => $model->idListFriday], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
