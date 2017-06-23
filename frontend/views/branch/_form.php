<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Company;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Branch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="branch-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_fk_id')->dropDownList(
	ArrayHelper::map(company::find()->all(),'company_id','company_name'),
	['prompt'=>'Select company']
    ) ?>

    <?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

    
    <?php 

    echo $form->field($model, 'branch_created')->widget(DatePicker::classname(), [
    'pluginOptions' => [
        'autoclose'=>true,
        'format' =>'yyyy-mm-dd',
    ]
]);
?>

    <?= $form->field($model, 'branch_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
