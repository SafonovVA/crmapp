<?php


namespace app\assets;


use yii\web\AssetBundle;

class SnowAssetsBundle extends AssetBundle
{
    public string $sourcePath = '@app/assets/snow';
    public array $css = [
        'snow.css',
    ];
    public array $depends = [
        'app\\assets\\ApplicationUiAssetBundle',
    ];
}