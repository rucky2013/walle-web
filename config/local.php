<?php
// Uncomment to enable debug mode. Recommended for development.
defined('YII_DEBUG') or define('YII_DEBUG', false);

// Uncomment to enable dev environment. Recommended for development
defined('YII_ENV') or define('YII_ENV', 'prod');

// zh_CN.UTF-8 => 中文,  en_US.UTF-8 => English
setlocale(LC_ALL, 'zh_CN.UTF-8');
putenv('LC_ALL=zh_CN.UTF-8');

return [
    'components' => [
        'db' => [
            'dsn'       => 'mysql:host=127.0.0.1;dbname=walle',
            'username'  => 'root',
            'password'  => '',
        ],
        'mail' => [
            'transport' => [
                'host'       => 'smtp.exmail.qq.com',     # smtp 发件地址
                'username'   => 'service@huamanshu.com',  # smtp 发件用户名
                'password'   => 'K84erUuxg1bHqrfD',       # smtp 发件人的密码
                'port'       => 25,                       # smtp 端口
                'encryption' => 'tls',                    # smtp 协议
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from'    => ['service@huamanshu.com' => '花满树出品'],  # smtp 发件用户名(须与mail.transport.username一致)
            ],
        ],
        'request' => [
            'cookieValidationKey' => 'PdXWDAfV5-gPJJWRar5sEN71DN0JcDRV',
        ],
    ],
    'language'   => 'zh-CN', // zh-CN => 中文,  en => English
];

