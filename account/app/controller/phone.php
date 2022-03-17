<?php

if ($id = @get("authuser")) {
    $_SESSION["user_id"] = $id;
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
}
$date = date('d.m.Y / H:i:s');

if (post("submitChangePhone")) {
    $userPhone = 0 . post("userPhone");

    if (!$userPhone) {
        $error = "Telefon numarası girin.";
    } else {
        $query = $db->update('users')
            ->where('user_id', session("user_id"))
            ->set([
                'user_phone' => $userPhone,
                'user_update' => $date
            ]);

        if ($query) {
            //$success = "Başarıyla güncellendi.";
            $_SESSION["array"][session("user_id")]["user_phone"] = $userPhone;
            $_SESSION["success"] = "Başarıyla güncellendi.";
            header("Refresh:2");
        } else {
            $error = "Bir hata oldu!";
        }
    }
}

if (post("removePhoneNumber")) {
    $query = $db->update('users')
        ->where('user_id', session("user_id"))
        ->set([
            'user_phone' => "Belirtilmemiş",
            'user_update' => $date
        ]);

    if ($query) {
        //$success = "Başarıyla güncellendi.";
        $_SESSION["array"][session("user_id")]["user_phone"] = "Belirtilmemiş";
        $_SESSION["success"] = "Başarıyla güncellendi.";
        header("Refresh:2");
    } else {
        $error = "Bir hata oldu!";
    }
}


$meta = [
    'title' => "Telefon" . " - " . session("array")[session("user_id")]["user_email"],
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('phone');
