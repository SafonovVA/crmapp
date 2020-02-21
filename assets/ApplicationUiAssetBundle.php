<?php


namespace app\assets;


use yii\web\AssetBundle;

class ApplicationUiAssetBundle extends AssetBundle
{
    public string $sourcePath = '@app/assets/ui';
    public array $css = [
        'css/main.css',
    ];
    public array $js = [
        'js/main.js',
    ];
    public array $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',
    ];
}