<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\ListFriday $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="list-friday-form">

    <?php $form = ActiveForm::begin([
    'id' => 'ListFriday',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-error'
    ]
    );
    ?>

    <div class="">
        <p>
<!-- attribute name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!-- attribute lastName -->
			<?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

<!-- attribute phone -->
			<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

<!-- attribute birthday -->
            <?= $form->field($model, 'birthday')->widget(\kartik\date\DatePicker::classname(), [
                'readonly'=>true,
                'removeButton' => false,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format'=>'mm/dd/yyyy'
                ]
            ]);?>

<!-- attribute instagram -->
			<?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>
        </p>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save')),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

