<?php


namespace dsergey\assets;


use yii\web\AssetBundle;

class JuiSliderPipsAsset extends AssetBundle
{
    public $sourcePath = './jQuery-ui-Slider-Pips/dist/';
    public $js = [
         'jquery-ui-slider-pips.min.js',
    ];
    public $css = [
        'jquery-ui-slider-pips.min.css',
    ];
    public $depends = [
        'yii\web\JuiAsset',
    ];
}