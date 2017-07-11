<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/bootstrap.min.css',
        'css/site.css',
        'css/styles.css',
        'css/bootstrap-responsive.css',
        'css/plugin/bootstrap.min.css',
        'assets/easypiechart/jquery.easy-pie-chart.css',
        'css/uniform.default.css',
        
    ];
    public $js = [
        'assets/easypiechart/jquery.easy-pie-chart.js',
        'js/scripts.js',
        'js/jquery.uniform.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
         'yii\bootstrap\BootstrapPluginAsset',
    ];
}
