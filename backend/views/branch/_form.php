<?php

use yii\helpers\Html;

use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

use yii\helpers\ArrayHelper;
use backend\models\Company;

/* @var $this yii\web\View */
/* @var $model backend\models\Branch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="span12">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>
         <fieldset>

            <?=$form->field($model, 'company_fk_id',['options'=>['tag' => 'div','class' => 'form-group control-group'],'template' => '{label}<div class="controls">{input}{error}</div>'])->dropDownList(ArrayHelper::map(company::find()->all(),'company_id','company_name'),
            ['prompt'=>'Select company', 'class'=>'input-xlarge form-control']
            ); ?>

            <?=$form->field($model, 'branch_name',['options'=>['tag' => 'div','class' => 'form-group control-group'],'template' => '{label}<div class="controls">{input}{error}</div>'])->textInput(['maxlength' => true,'class'=>'input-xlarge form-control']) ;
            ?>      
            
             <?=$form->field($model, 'branch_created',['options'=>['tag' => 'div','class' => 'form-group control-group'],'template' => '{label}<div class="controls">{input}{error}</div>'])->widget(DatePicker::classname(),[
                'pluginOptions' => [
                    'autoclose'=>true,  
                    'format' =>'yyyy-mm-dd',                                
                ]
            ]);
            ?>

            

            <?=$form->field($model, 'branch_status',['options'=>['tag' => 'div','class' => 'form-group control-group'],'template' => '{label}<div class="controls">{input}{error}</div>'])->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive'],['prompt' => '', 'class'=>'input-xlarge form-control']); ?>        

            
            <div class="form-group form-actions">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? ' btn btn-primary' : 'btn btn-primary']) ?>
            </div>
         </fieldset> 

    <?php ActiveForm::end(); ?>

</div>



