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
        <?= Yii::t('app', 'Lista del Viernes') ?>
        <small>
                        <?= $model->name.' '.$model->lastName ?>
        </small>
    </h1>
    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
