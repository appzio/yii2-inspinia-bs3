<?php
namespace appzio\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package appzio\inspinia
 */
class SparklineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-sparkline';
    public $js = [
        'dist/jquery.sparkline.min.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}