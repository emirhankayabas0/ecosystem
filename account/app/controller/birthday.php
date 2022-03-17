<?php

if ($id = @get("authuser")) {
    $_SESSION["user_id"] = $id;
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
}

if (post("submitChangeName")) {
    $birthdayDay = post("birthdayDay");
    $birthdayMoon = post("birthdayMoon");
    $birthdayYear = post("birthdayYear");
    $date = date('d.m.Y / H:i:s');

    if (!$birthdayDay) {
        $error = "Doğum günü girin.";
    } elseif (!$birthdayMoon) {
        $error = "Doğum günü girin.";
    } elseif (!$birthdayYear) {
        $error = "Doğum günü girin.";
    } else {
        $birthday = $birthdayDay . " " . $birthdayMoon . " " . $birthdayYear;
        $query = $db->update('users')
            ->where('user_id', session("user_id"))
            ->set([
                'user_birthday' => $birthday,
                'user_update' => $date
            ]);

        if ($query) {
            //$success = "Başarıyla güncellendi.";
            $_SESSION["array"][session("user_id")]["user_birthday"] = $birthday;
            $_SESSION["success"] = "Başarıyla güncellendi.";
        } else {
            $error = "Bir hata oldu!";
        }
    }
}


$meta = [
    'title' => "Doğum günü" . " - " . session("array")[session("user_id")]["user_email"],
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('birthday');
