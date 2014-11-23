<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace devleaks\introjs;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class IntroJSAsset extends AssetBundle
{
    public $sourcePath = '@vendor/usablica/intro.js/minified';

    public $css = [
        'introjs.min.css',
    ];
		
    public $js = [
        'intro.min.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
