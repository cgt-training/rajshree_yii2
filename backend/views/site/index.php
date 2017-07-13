<?php
use yii\helpers\Html;
?>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Statistics</div>
                                <div class="pull-right"><span class="badge badge-warning">View More</span>

                                </div>
                            </div>
                            
                        </div>
                        <!-- /block -->
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <?= Html::a('<div class="muted pull-left">Users</div>', ['user/index']) ?>
                                    <div class="pull-right"><span class="badge badge-info"><?=count($allUser)?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Date Added</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i=1;
                                        foreach($allUser as $user){
                                        ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$user->username?></td>
                                            <td><?=$user->email?></td>
                                            <td><?=date('d-m-Y',strtotime($user->created_at))?></td>
                                        </tr>
                                        <?php
                                        $i++;    
                                        }
                                        ?>                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    
                                <?= Html::a('<div class="muted pull-left">Branches</div>', ['brnach/index']) ?>
                                    <div class="pull-right"><span class="badge badge-info"><?=count($allBranch)?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Branch Name</th>
                                                <th> Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $j=1;
                                            foreach($allBranch as $branch){
                                            ?>
                                            <tr>
                                                <td><?=$j?></td>
                                                <td><?=$branch->branch_name?></td>
                                                <td><?=date('d-m-Y',strtotime($branch->branch_created))?></td>
                                            </tr>
                                           <?php 
                                            $j++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    
                                <?= Html::a('<div class="muted pull-left">Company</div>', ['company/index']) ?>
                                    <div class="pull-right"><span class="badge badge-info"><?=count($allCompany)?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Company Name</th>
                                                <th>Date Added</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $k=1;
                                            foreach($allCompany as $company){
                                            ?>
                                            <tr>
                                                <td><?=$k;?></td>
                                                <td><?=$company->company_name?></td>
                                                <td><?=date('d-m-Y',strtotime($company->company_created))?></td>
                                            </tr>
                                            <?php
                                            $k++;
                                            }
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                   
                                <?= Html::a('<div class="muted pull-left">Department</div>', ['department/index']) ?>
                                    <div class="pull-right"><span class="badge badge-info"><?=count($allDepartment)?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Department Name</th>
                                                <th>Date Added</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $l=1;
                                            foreach($allDepartment as $department){
                                            ?>
                                            <tr>
                                                <td><?=$l?></td>
                                                <td><?=$department->department_name?></td>
                                                <td><?=date('d-m-Y',strtotime($department->department_created))?></td>
                                            </tr>
                                            <?php
                                                $l++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    
                                <?= Html::a('<div class="muted pull-left">Roles</div>', ['permission/index']) ?>
                                    <div class="pull-right"><span class="badge badge-info"><?=count($allRoles)?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $m=1;
                                            foreach($allRoles as $role){
                                            ?>
                                            <tr>
                                                <td><?=$m;?></td>
                                                <td><?=$role->name?></td>
                                            </tr>
                                            <?php
                                            $m++;
                                            }
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    
                                    <?= Html::a('<div class="muted pull-left">Permissions</div>', ['permission/index']) ?>
                                    <div class="pull-right"><span class="badge badge-info"><?=count($allpermission)?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Permissions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $n=1;
                                            foreach($allpermission as $permissions){
                                            ?>
                                            <tr>
                                                <td><?=$n?></td>
                                                <td><?=$permissions->name?></td>
                                            </tr>
                                            <?php
                                                $n++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                   