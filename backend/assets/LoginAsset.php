<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      //'css/site.css',
        'css/plugins/bootstrap/css/bootstrap.css',
        'css/css/login.css',
        'css/plugins/magic/magic.css',
        'css/plugins/bootstrap/css/bootstrap.css',
    ];
    public $js = [
        'js/plugins/jquery-2.0.3.min.js',
        'js/plugins/bootstrap/js/bootstrap.js',
        'js/js/login.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
