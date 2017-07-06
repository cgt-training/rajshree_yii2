<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="navbar navbar-fixed-top adminHeader">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?=Yii::$app->user->identity->username;?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php              
                                    if (Yii::$app->user->isGuest) {
                                    ?>
                                    <li>
                                        
                                        <?= Html::a('Log In', ['site/login', 'id' => ''],['tabindex'=>'-1']) ?>
                                    </li>
                                    <?php

                                     }else{
                                    ?>
                                    <li>
                                      
                                        <?= Html::a('Logout', ['site/logout', 'id' => ''],['tabindex'=>'-1','data-method'=>'post']) ?>
                                    </li>
                                    <?php
                                    }                                 

                                    ?>
                                </ul>


                

                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                            <?= Html::a('Dashboard', ['site/index', 'id' => '']) ?>
                            </li>
                            
                            <!-- <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>