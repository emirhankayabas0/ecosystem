<?php

if ($id = @get("authuser")) {
    $_SESSION["user_id"] = $id;
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
}

if (post("submitChangeName")) {
    $firstNameChange = post("firstNameChange");
    $lastNameChange = post("lastNameChange");
    $date = date('d.m.Y / H:i:s');

    if (!$firstNameChange) {
        $error = "Ad girin.";
    } elseif (!$lastNameChange) {
        $error = "Soyad girin.";
    } else {
        $query = $db->update('users')
            ->where('user_id', session("user_id"))
            ->set([
                'user_name' => $firstNameChange,
                'user_surname' => $lastNameChange,
                'user_update' => $date
            ]);

        if ($query) {
            //$success = "Başarıyla güncellendi.";
            $_SESSION["array"][session("user_id")]["user_name"] = $firstNameChange;
            $_SESSION["array"][session("user_id")]["user_surname"] = $lastNameChange;
            $_SESSION["success"] = "Başarıyla güncellendi.";
        } else {
            $error = "Bir hata oldu!";
        }
    }
}


$meta = [
    'title' => "Ad" . " - " . session("array")[session("user_id")]["user_email"],
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('name');
