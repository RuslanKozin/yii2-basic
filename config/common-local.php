<?php  /*Недостающие личные параметры для соответствующих компонентов*/
return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=seokeys',
            'username' => 'root',
            'password' => '',
            'tablePrefix' => 'keys_',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];