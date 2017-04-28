<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/plugins/bootstrap/css/bootstrap.css',
        'css/css/main.css',
        'css/css/theme.css',
        'css/css/MoneAdmin.css',
        'css/plugins/Font-Awesome/css/font-awesome.css',
        'css/plugins/flot/examples/examples.css',
        'css/css/layout2.css',
        'css/plugins/timeline/timeline.css',
        'css/css/dashboard.css',
        'css/css/wizardjs.css',
    ];
    public $js = [
        'js/js/dashboard.js',
        'js/js/wizardjs.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
