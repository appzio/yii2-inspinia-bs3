<?php
namespace appzio\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package appzio\inspinia
 */
class FlotTooltipAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot.tooltip';
    public $js = [
        'js/jquery.flot.tooltip.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'appzio\inspinia\FlotAsset'
    ];
}