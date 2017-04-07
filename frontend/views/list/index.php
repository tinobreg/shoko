<?php

/* @var $this yii\web\View */
/* @var $model \frontend\models\ListForm */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \kartik\date\DatePicker;
use common\widgets\Alert;
use rmrevin\yii\fontawesome\FA;
use \yii\helpers\Url;

$this->title = '.: Shôko Bs | Listas :.';
?>
<div class="site-index text-center row">
    <h1>Bienvenido a la revolución</h1>
    <p class="lead">Completa tus datos para anotarte a la lista de <b><?=$model->listOwner?></b>.</p>

    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="bg-danger" style="color: black; font-weight: 600; text-align: center; padding: 15px">
            <h2>Este Viernes abrimos en Palermo</h2>
            <p>Av. Casares 4015 y Sarmiento (Brooklyn)</p>
            <h4> TE ESPERAMOS!! </h4>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-md-offset-3 text-left">
        <?= Alert::widget() ?>
        <?php $form = ActiveForm::begin(['id' => 'list-form', 'options'=>['class'=>'form']]); ?>
        <div class="form-group">
            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'lastName')->textInput() ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'phone')->textInput(['type'=>'tel']) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'instagram')->textInput() ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
                'language'=>'es',
                'readonly'=>true,
                'removeButton' => false,
                'options'=>[
                    'value'=>'01/01/1999'
                ],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format'=>'mm/dd/yyyy'
                ]
            ]);?>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Enviar', ['class' => 'btn btn-block btn-primary', 'name' => 'list-send-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <h2>Comparti esto con tus amigos</h2>
        <div class="row">
            <div class="col-xs-4 col-sm-6">
                <?= Html::a(FA::icon('facebook'), 'javascript:;', [
                    'target' => '_blank',
                    'class'=>'btn btn-facebook btn-success btn-block share-fb',
                    'data-share-url'=>Yii::$app->urlManager->createAbsoluteUrl(['list/index', 'idUser'=>$idUser, 'list'=>seoParam($model->listOwner)])
                ]); ?>
            </div>
            <div class="col-xs-4 col-sm-6">
                <?= Html::a(FA::icon('twitter'), 'https://twitter.com/intent/tweet?text=' . urlencode('#ShokoNoDescansa Anotate a la lista de '.$model->listOwner.' en '. Yii::$app->urlManager->createAbsoluteUrl(['list/index', 'idUser'=>$idUser, 'list'=>seoParam($model->listOwner)])),
                    ['class'=>'btn btn-twitter btn-success btn-block share-tw', 'target' => '_blank']); ?>
            </div>
            <div class="col-xs-4 visible-xs">
                <?= Html::a(FA::icon('whatsapp'), 'whatsapp://send?text='. urlencode('Anotate a la lista de '.$model->listOwner.' en '. Yii::$app->urlManager->createAbsoluteUrl(['list/index', 'idUser'=>$idUser, 'list'=>seoParam($model->listOwner)])), [
                    'data-action'=>'share/whatsapp/share',
                    'class'=>'btn btn-whatsapp btn-success btn-block',
                ]); ?>
            </div>
        </div>
    </div>
</div>
