<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\Date $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="date-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Date',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-error'
    ]
    );
    ?>

    <div class="">
        <p>
			<?= $form->field($model, 'date')->textInput() ?>
        </p>

        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton('<span class="glyphicon glyphicon-check"></span> ' . ($model->isNewRecord ? 'Create' : 'Save'), ['id' => 'save-' . $model->formName(), 'class' => 'btn btn-success']); ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

