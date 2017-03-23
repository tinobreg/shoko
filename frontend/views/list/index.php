<?php

/* @var $this yii\web\View */
/* @var $model \frontend\models\ListForm */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \kartik\date\DatePicker;
$this->title = '.: Shôko Bs | Listas :.';
?>
<div class="site-index text-center">
    <h1>Bienvenido a la revolución</h1>
    <p class="lead">Completa tus datos para anotarte a la lista de <b><?=$model->listOwner?></b>.</p>

    <div class="col-xs-12 col-md-6 col-md-offset-3 text-left">
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
                'pluginOptions' => [
                    'autoclose'=>true
                ]
            ]);?>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Enviar', ['class' => 'btn btn-block btn-primary', 'name' => 'list-send-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
