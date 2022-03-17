<?php

$uri = array_filter(explode("/", $_SERVER["REQUEST_URI"]));
$activationCode = end($uri);

if (strlen($activationCode) > 50) {
    $query = $db->from("users")
        ->where("user_token", $activationCode)
        ->all();

    if ($query) {
        foreach ($query as $row);
    } else {
        header("Location: " . site_url());
    }

    $update = $db->update("users")
        ->where("user_id", $row["user_id"])
        ->set([
            'user_token' => random_string(),
            'user_verification' => 1
        ]);
} else {
    header("Location: " . site_url());
}

$meta = [
    'title' => "Hesabını doğrula | ",
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('verification');
