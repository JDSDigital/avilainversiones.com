<?php
return [
    'id' => 'app-common-tests',
    'basePath' => dirname(__DIR__),
    'components' => [
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'common\models\User',
        ],
        'db' => [
            'dsn' => 'mysql:host=127.0.0.1;dbname=db_avila_test',
        ],
    ],
];
