<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="header">
	<div class="container">
		<nav class="navbar ">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand" href="<?=Url::to(['site/index']);?>">
		      <?=Html::img('@web/img/logoBlog.png', ['class'=>'img-responsive'])?>
		      </a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="<?= Url::to(['department/index']);?>">Department</a></li> 
		        <li><a href="<?= Url::to(['branch/index']);?>">Branch</a></li> 
		        <li><a href="<?= Url::to(['company/index']);?>">Company</a></li> 
		        <li class="active"><a href="#">Blog</a></li> 
		        
		        <?php		       
		        	if (Yii::$app->user->isGuest) {
		        ?>
		        	<li><a href="<?= Url::to(['site/login']);?>">Log in</a></li> 
		        	<li><a href="<?= Url::to(['site/signup']);?>">Sign Up</a></li> 
		        <?php
		        }else{ ?>
 					<li><a href="<?= Url::to(['site/logout']);?>">Logout (<?=Yii::$app->user->identity->username;?>)</a></li> 
		        <?php
		        }
		        ?>
		       
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>