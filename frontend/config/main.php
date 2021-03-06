<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

return [
    'id' => 'app-frontend',
    'name' => 'Ávila Inversiones',
    'language' => 'es-ES',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => $baseUrl,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'baseUrl' => $baseUrl,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'empresa' => 'site/about',
                'contacto' => 'site/contact',
                'blog' => 'blog/index',
                'blog/<id:\d+>' => 'blog/view',
                'blog/<title>' => 'blog/view',
                'propiedades' => 'properties/index',
                'propiedades/<id:\d+>' => 'properties/view',
                'eventos' => 'events/index',
                'eventos/<id:\d+>' => 'events/view',
                'cursos' => 'courses/index',
                'cursos/<id:\d+>' => 'courses/view',
                'asesorias' => 'consulting/index',
                'asesorias/contacto' => 'site/consulting',
                'alianzas' => 'site/alliances',
            ],
        ],
    ],
    'params' => $params,
];
