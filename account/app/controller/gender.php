<?php

if ($id = @get("authuser")) {
    $_SESSION["user_id"] = $id;
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
}

if (post("submitChangeName")) {
    $gender = post("gender");
    $date = date('d.m.Y / H:i:s');

    if (!$gender) {
        $error = "Cinsiyet girin.";
    } else {
        $query = $db->update('users')
            ->where('user_id', session("user_id"))
            ->set([
                'user_gender' => $gender,
                'user_update' => $date
            ]);

        if ($query) {
            //$success = "Başarıyla güncellendi.";
            $_SESSION["array"][session("user_id")]["user_gender"] = $gender;
            $_SESSION["success"] = "Başarıyla güncellendi.";
            header("Refresh:2");
        } else {
            $error = "Bir hata oldu!";
        }
    }
}


$meta = [
    'title' => "Cinsiyet" . " - " . session("array")[session("user_id")]["user_email"],
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('gender');
