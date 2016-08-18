<?php
return [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'jshd3qjaxp',
        ],
        'assetManager' => [
            'linkAssets' => true, /*параметр linkAssets компонента assetManager в true, чтобы фреймворк
                    не копировал папки в web/assets, а делал символические ссылки. Это и экономит место,
                    и позволяет не удалять и перегенерировать папки при каждом обновлении вендоров*/
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'logFile' => '@app/runtime/logs/web-error.log'
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['warning'],
                    'logFile' => '@app/runtime/logs/web-warning.log'
                ],
            ],
        ],
    ],
];