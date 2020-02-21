<?php

return [
    'id' => 'crmapp',
    'basePath' => realpath(__DIR__ . '/../'),
    'components'  => [
        'request' => [
            'cookieValidationKey' => 'your secret key here',
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'view' => [
            'renderers' => [
                'md' => [
                    'class' => 'app\utilities\MarkdownRenderer',
                ],
            ],
            'theme' => [
                'class' => yii\base\Theme::class,
                'basePath' => '@app/themes/snowy'
            ],
        ],
        'response' => [
            'formatters' => [
                'yaml' => [
                    'class' => 'app\utilities\YamlResponseFormatter',
                ],
            ],
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
    //'extensions' => require(__DIR__. '/../vendor/yiisoft/extensions.php'),
];