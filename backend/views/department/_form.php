<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Company;
use backend\models\Branch;


/* @var $this yii\web\View */
/* @var $model backend\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_fk_id')->dropDownList(
    ArrayHelper::map(company::find()->all(),'company_id','company_name'),
    ['prompt'=>'Select company',

        'onchange'=>'
            $.post( "'.Yii::$app->urlManager->createUrl('department/branchlist?id=').'"+$(this).val(), function( data ) {
              $("select#department-branch_fk_id" ).html( data );
            });
        ']

    ) ?>
   
    <?= $form->field($model, 'branch_fk_id')->dropDownList(
    ArrayHelper::map(branch::find()->all(),'branch_id','branch_name'),
    ['prompt'=>'Select Branch']
    ) ?>

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

    <?php 

    echo $form->field($model, 'department_created')->widget(DatePicker::classname(), [
    //'options' => ['placeholder' => 'Enter birth date ...'],

    'pluginOptions' => [
        'autoclose'=>true,  
        'format' =>'yyyy-mm-dd', 
    ]
]);
?>

    <?= $form->field($model, 'department_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
