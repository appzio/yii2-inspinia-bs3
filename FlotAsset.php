<?php
namespace appzio\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package appzio\inspinia
 */
class FlotAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot';
    public $js = [
        'jquery.flot.js',
        'jquery.flot.resize.js',
        'jquery.flot.pie.js',
        'jquery.flot.symbol.js',
        'jquery.flot.time.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}