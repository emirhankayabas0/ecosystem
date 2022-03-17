<?php

define('PATH', realpath('.'));
define('SUBFOLDER', true);
define('URL', 'http://localhost/account');
define("staticUrl", "http://localhost/kayabas/static");
define("AUTH", "http://localhost/auth");
define("ACCOUNT", "http://localhost/account");
define("Logo", "Kayabaş");

return [
    'db' => [
        'name' => 'kayabas',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => ''
    ]
];
