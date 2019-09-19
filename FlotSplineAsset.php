<?php
namespace appzio\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package appzio\inspinia
 */
class FlotSplineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot-spline';
    public $js = [
        'js/jquery.flot.spline.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'appzio\inspinia\FlotAsset'
    ];
}