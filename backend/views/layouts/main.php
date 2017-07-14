<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="AdminHeader">
    
    <?= $this->render('@app/views/layouts/header', $_params_); 
    ?>
    

   
</div>


<div class="container-fluid">
            <div class="row-fluid">
                <?= $this->render('@app/views/layouts/sidebar', $_params_); 
    ?>
                
                <!--/span-->
                <div class="span9" id="content">
                <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
                </div>
            </div>
            <hr>
            <footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy; CG TechnoSoft <?= date('Y') ?></p>

                   
                </div>
            </footer>
        </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
