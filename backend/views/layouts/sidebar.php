<?php
use yii\helpers\Html;
?>
<div class="span3 customSideBar" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
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