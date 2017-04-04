<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\User $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('app', 'User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud user-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Yii::t('app', 'Usuario').': '.$model->username.' ('.$model->userData0->fullName.')' ?>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
            '<span class="glyphicon glyphicon-pencil"></span> ' . 'Editar',
            [ 'update', 'id' => $model->id],
            ['class' => 'btn btn-info']) ?>
        </div>

    </div>

    <hr />


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'email',
            [
                'attribute'=>'status',
                'value'=> $model->getStatus()
            ],
        ],
    ]); ?>

    <?= DetailView::widget([
        'model' => $model->userData0,
        'attributes' => [
            'fullName',
            'listName',
            'instagram',
            'phone'
        ],
    ]); ?>

    
    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Borrar ', ['delete', 'id' => $model->id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]); ?>

</div>
