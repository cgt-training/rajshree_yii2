<?php

use yii\helpers\Html;
use backend\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row-fluid">                        
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left"><?= Html::encode($this->title) ?></div>
        </div>
        <div class="block-content collapse in">

        <p>
            <?= Html::a('Create Department', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?php Pjax::begin(); ?>    <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                   // 'department_id',
                    ['attribute'=>'company_fk_id',
                    'value' =>'companyFk.company_name',
                    'label' =>'Company Name',
                    ],  
                    ['attribute'=>'branch_fk_id',
                    'value' =>'branchFk.branch_name',
                    'label' =>'Branch Name',
                    ],  
                    'department_name',
                    'department_created',
                    // 'department_status',

                    ['class' => 'backend\grid\ActionColumn'],
                ],
            ]); ?>
        <?php Pjax::end(); ?>
        </div>
    </div>
</div>
