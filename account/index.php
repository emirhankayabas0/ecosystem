<?php

require __DIR__ . '/app/init.php';

$service = "accountsettings";
$continue = site_url();
$hl = "tr";

if (!session("login")) {
    header("Location: " . AUTH . "/signin?service=" . $service . "&continue=" . $continue . "&hl=" . $hl);
    die();
}

$routeExplode = explode('?', $_SERVER['REQUEST_URI']);
$route = array_filter(explode('/', $routeExplode[0]));
if (SUBFOLDER === true) {
    array_shift($route);
}

if (!route(0)) {
    $route[0] = 'index';
}

if (!file_exists(controller(route(0)))) {
    $route[0] = '404';
}

if (setting('maintenance_mode') == 1 && route(0) != 'admin') {
    $route[0] = 'maintenance-mode';
}

$user = [
    'user_name' => session("array")[session("user_id")]["user_name"],
    'user_surname' => session("array")[session("user_id")]["user_surname"],
    'user_email' => session("array")[session("user_id")]["user_email"],
    'user_recovery_email' => session("array")[session("user_id")]["user_recovery_email"],
    'user_image' => session("array")[session("user_id")]["user_image"],
    'user_url' => session("array")[session("user_id")]["user_url"],
    'user_birthday' => session("array")[session("user_id")]["user_birthday"],
    'user_gender' => session("array")[session("user_id")]["user_gender"],
    'user_phone' => session("array")[session("user_id")]["user_phone"],
    'user_token' => session("array")[session("user_id")]["user_token"],
    'user_recovery_code' => session("array")[session("user_id")]["user_recovery_code"],
    'user_verification' => session("array")[session("user_id")]["user_verification"],
    'user_recovery_verification' => session("array")[session("user_id")]["user_recovery_verification"],
    'user_date' => session("array")[session("user_id")]["user_date"]
];

require controller(route(0));
