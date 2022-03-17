<?php

define('PATH', realpath('.'));
define('SUBFOLDER', true);
define('URL', 'http://localhost/notes');
define("staticUrl", "http://localhost/kayabas/static");
define("AUTH", "http://localhost/auth");
define("ACCOUNT", "http://localhost/account");
define("CIPHER", "AES-128-ECB");
define("KEY", "emirhanemre123");
define("Logo", "Kayabaş");

return [
    'db' => [
        'name' => 'kayabas',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => ''
    ]
];
