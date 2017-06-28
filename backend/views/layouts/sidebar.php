<?php
use yii\helpers\Html;
?>
<div class="span3 customSideBar" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                        <?= Html::a('Dashboard', ['site/index', 'id' => '']) ?>
                        </li>
                        <li>
                            
                            <?= Html::a('Company', ['company/index', 'id' => '']) ?>
                        </li>
                        <li>
                            
                            <?= Html::a('Branches', ['branch/index', 'id' => '']) ?>
                        </li>
                        
                        <li>
                            
                            <?= Html::a('Departments', ['department/index', 'id' => '']) ?>
                        </li>
                       
                    </ul>
                </div>