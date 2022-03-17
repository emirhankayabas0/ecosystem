<?php

if ($id = @get("authuser")) {
    $_SESSION["user_id"] = $id;
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
}

if (post("submitChangePassword")) {
    $newPassword = post("newPassword");
    $newPasswordConfirm = post("newPasswordConfirm");
    $date = date('d.m.Y / H:i:s');

    if (!$newPassword) {
        $error = "Şifre girin.";
    } elseif (!$newPasswordConfirm) {
        $error = "Şifreler eşleşmiyor.";
    } elseif (strlen($newPassword) < 8) {
        $error = "Şifreniz en az 8 karakter olmalıdır.";
    } elseif ($newPassword != $newPasswordConfirm) {
        $error = "Şifreler eşleşmiyor.";
    } else {
        $query = $db->update('users')
            ->where('user_id', session("user_id"))
            ->set([
                'user_password' => password_hash($newPassword, PASSWORD_DEFAULT),
                'user_update' => $date
            ]);

        if ($query) {
            sendEmail($user["user_email"], $user["user_name"] . " " .  $user["user_name"], "Güvenlik uyarısı", "Şifreniz değiştirilmiştir. <br> Bu işlem size aitse herhangi bir şey yapmanız gerekmez. İşlem size ait değilse hesabınızı güven altına almanıza yardımcı oluruz.");
            $_SESSION["success"] = "Başarıyla güncellendi.";
        } else {
            $error = "Bir hata oldu!";
        }
    }
}

if (post("submitPasswordConfirm")) {
    $passwordConfirm = post("passwordConfirm");

    if (!$passwordConfirm) {
        $error = "Şifre girin.";
    } else {
        $query = $db->from('users')
            ->where('user_id', session("user_id"))
            ->all();

        if ($query) {
            foreach ($query as $row);
            sendEmail($user["user_email"], $user["user_name"] . " " .  $user["user_name"], "Güvenlik uyarısı", "Şifre değilikliği talebi ile hesabınıza giriş sağlanmıştır. <br> Bu işlem size aitse herhangi bir şey yapmanız gerekmez. İşlem size ait değilse hesabınızı güven altına almanıza yardımcı oluruz.");
            $verify = password_verify($passwordConfirm, $row['user_password']);
            if ($verify) {
                $_SESSION["passwordVerification"] = true;
            } else {
                $error = "Şifre yanlış. Tekrar deneyin.";
            }
        }
    }
}

$meta = [
    'title' => "Ad" . " - " . session("array")[session("user_id")]["user_email"],
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('password');
