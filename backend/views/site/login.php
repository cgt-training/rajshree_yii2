<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => [
                'class' => 'form-signin'
             ]]); ?>
                <h2 class="form-signin-heading">Please sign in</h2>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'input-block-level'])->input('username', ['placeholder' => "Email Address"])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['class'=>'input-block-level'])->input('password', ['placeholder' => "Password"])->label(false)   ?>

                <?php  //$form->field($model, 'rememberMe')->checkbox() ?>
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>