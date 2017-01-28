<?php


namespace dsergey\assets;


use yii\web\AssetBundle;

/**
 * @author Sergey Drozd <serik.drozd@gmail.com>
 */
class JuiSliderPipsAsset extends AssetBundle
{
    public $js = [
        'jquery-ui-slider-pips.min.js',
    ];
    public $css = [
        'jquery-ui-slider-pips.min.css',
    ];
    public $depends = [
        'yii\jui\JuiAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/jQuery-ui-Slider-Pips/dist/';
        parent::init();
    }
}