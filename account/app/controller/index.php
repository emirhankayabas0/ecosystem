<?php

$id = @session("user_id");

if ($id = @get("authuser")) {
    $_SESSION["user_id"] = $id;
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
}

$meta = [
    'title' => setting('title') . " - " . session("array")[session("user_id")]["user_email"],
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('index');
