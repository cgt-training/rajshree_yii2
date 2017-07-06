<?php
use yii\helpers\Html;

$activeController= Yii::$app->controller->id;
$activeAction = Yii::$app->controller->action->id;

$DashboardClass=$departmentClass=$branchClass=$companyClass=$userClass='';

if($activeController=='site' && $activeAction=='index'){
    $DashboardClass='active';
}

if($activeController=='company'){
    $companyClass='active';
}

if($activeController=='branch'){
    $branchClass='active';
}

if($activeController=='department'){
    $departmentClass='active';
}
if($activeController=='user'){
    $userClass='active';
}
?>
<div class="span3 customSideBar" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="<?=$DashboardClass?>">
                        <?= Html::a('Dashboard', ['site/index', 'id' => '']) ?>
                        </li>
                        <li class="<?=$companyClass?>">
                            
                            <?= Html::a('Company', ['company/index', 'id' => '']) ?>
                        </li>
                        <li class="<?=$branchClass?>">
                            
                            <?= Html::a('Branches', ['branch/index', 'id' => '']) ?>
                        </li>
                        
                        <li class="<?=$departmentClass?>">
                            
                            <?= Html::a('Departments', ['department/index', 'id' => '']) ?>
                        </li>
                        <li class="<?=$userClass?>">
                            
                            <?= Html::a('Users', ['user/index', 'id' => '']) ?>
                        </li>
                       
                    </ul>
                </div>