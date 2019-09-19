<?php
namespace appzio\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package appzio\inspinia
 */
class FontawesomeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/fontawesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
}