<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\ChangePassWordForm $model
 * @var yii\widgets\ActiveForm $form
 */

$this->title = Yii::t('app', 'Cambiar contraseña')
?>
<div class="giiant-crud user-update">

    <h1>
        <?= Yii::t('app', 'Cambiar contraseña') ?>
    </h1>

    <hr />

    <?php $form = ActiveForm::begin([
            'id' => 'User',
            'enableClientValidation' => true,
            'errorSummaryCssClass' => 'error-summary alert alert-error'
        ]
    ); ?>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <?= $form->errorSummary($model); ?>

            <?= $form->field($model, 'oldPassword')->textInput(['type'=>'password']) ?>

            <?= $form->field($model, 'newPassword')->textInput(['type'=>'password']) ?>

            <?= $form->field($model, 'newPasswordRepeat')->textInput(['type'=>'password']) ?>

            <?= Html::submitButton(
                '<span class="glyphicon glyphicon-check"></span> Cambiar Contraseña',
                [
                    'id' => 'save-' . $model->formName(),
                    'class' => 'btn btn-success pull-right'
                ]
            );
            ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
