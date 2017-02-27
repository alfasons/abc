<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class WelcomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.min.css',
        'css/prettyPhoto.css',
        'css/main.css',
        'css/responsive.css',
        'css/jsor.css',
        
        'css/pnotify.css',
        'css/pnotify.buttons.css',
        'css/pnotify.nonblock.css',
      
  
           ];
    public $js = [
          //  'js/jquery.js',
            'js/bootstrap.min.js',
            'js/jquery.prettyPhoto.js',
            'js/jquery.isotope.min.js',
            'js/main.js',
            'js/wow.min.js',
        
           // 'js/jpnotify.js',
           // 'js/pnotify.buttons.js',
          //  'js/pnotify.nonblock.js',
        
       
       
         
    
    ];
    public $depends = [
   // 'yii\web\YiiAsset',
    //  'yii\bootstrap\BootstrapAsset',
    ];
}

