<?php

$continue = get("continue") ? get("continue") : "http://localhost/account/";
$service = get("service") ? get("service") : "accountsettings";
$hl = get("hl") ? get("hl") : "tr";

if (!session("login")) {
    header("Location: " . site_url("signin?service=" . $service . "&continue=" . $continue . "&hl=" . $hl));
    die();
}

if(session("login")){
    header("Location: " . $continue);
}

$meta = [
    'title' => setting('title'),
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('index');