<?php

if ($id = @get("authuser")) {
    $_SESSION["user_id"] = $id;
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
}

if (post("submitRecoveryEmail")) {
    $userRecoveryEmail = post("userRecoveryEmail");
    $confirmationCode = random_number();
    $date = date('d.m.Y / H:i:s');

    if (!$userRecoveryEmail) {
        $error = "Kurtarma e-postası girin.";
    } elseif ($userRecoveryEmail == $user["user_email"]) {
        $error = "Bu e-posta kullanılamaz.";
    } else {
        $query = $db->update('users')
            ->where('user_id', session("user_id"))
            ->set([
                'user_recovery_code' => $confirmationCode,
                'user_update' => $date
            ]);

        if ($query) {
            $_SESSION["temporary_email"] = $userRecoveryEmail;
            $_SESSION["array"][session("user_id")]["user_recovery_code"] =  $confirmationCode;
            sendEmail($userRecoveryEmail, $user["user_name"] . " " .  $user["user_name"], "Doğrulama kodunuz", "Doğrulama kodunuz: $confirmationCode");
            $_SESSION["sendRecoveryEmail"] = true;
        } else {
            $error = "Bir hata oldu!";
        }
    }
}

if (post("submitRecoveryEmailConfirmation")) {
    $userRecoveryEmailConfirmation = post("userRecoveryEmailConfirmation");
    $date = date('d.m.Y / H:i:s');

    if (!$userRecoveryEmailConfirmation) {
        $error = "Doğrulama kodunu girin.";
    } elseif (!is_numeric($userRecoveryEmailConfirmation)) {
        $error = "Doğrulama kodunu girin.";
    } elseif ($userRecoveryEmailConfirmation != $user["user_recovery_code"]) {
        $error = "Doğrulama kodu hatalı.";
    } else {
        $query = $db->update('users')
            ->where('user_id', session("user_id"))
            ->set([
                'user_recovery_email' => session("temporary_email"),
                'user_recovery_verification' => 1,
                'user_update' => $date
            ]);

        if ($query) {
            //$success = "Başarıyla güncellendi.";
            $_SESSION["array"][session("user_id")]["user_recovery_email"] = session("temporary_email");
            unset($_SESSION["sendRecoveryEmail"]);
            sendEmail($user["user_email"], $user["user_name"] . " " .  $user["user_name"], "Güvenlik uyarısı", "Kurtarma e-postanız kaydedilmiş. <br> Yeni kurtarma e-postanız: " . session("temporary_email"));
            $_SESSION["success"] = "Başarıyla güncellendi.";
            header("Refresh:2");
        } else {
            $error = "Bir hata oldu!";
        }
    }
}


$meta = [
    'title' => "E-posta" . " - " . session("array")[session("user_id")]["user_email"],
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('email');
