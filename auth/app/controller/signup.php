<?php

if (post("submit")) {
    $registerFirstName = post("registerFirstName");
    $registerLastName = post("registerLastName");
    $registerUsername = post("registerUsername");
    $registerPassword = post("registerPassword");
    $registerConfirmPassword = post("registerConfirmPassword");
    $registerToken = random_string();

    if (!$registerFirstName) {
        $error = "Ad ve soyadı girin.";
    } elseif (!$registerLastName) {
        $error = "Ad ve soyadı girin.";
    } elseif (!$registerUsername) {
        $error = "Kullanıcı adı girin.";
    } elseif (!$registerPassword) {
        $error = "Bir şifre girin.";
    } elseif (!$registerConfirmPassword) {
        $error = "Bir şifre girin.";
    } elseif (strlen($registerPassword) < 8) {
        $error = "Şifreniz en az 8 karakter olmalıdır.";
    } elseif ($registerPassword != $registerConfirmPassword) {
        $error = "Girdiğiniz şifreler eşleşmedi. Tekrar deneyin.";
    } else {
        $control = $db->prepare("SELECT * FROM users WHERE user_email = ?");
        $control->execute(array($registerUsername));
        if ($control->rowCount()) {
            $error = "Bu kullanıcı adı alınmış.";
            $proposalUsurname = [
                $registerUsername . rand(10, 100)
            ];
        } else {
            $query = $db->insert('users')
                ->set(array(
                    'user_name' => ucfirst($registerFirstName),
                    'user_surname' => ucfirst($registerLastName),
                    'user_url' => seflink($registerFirstName . "-" . "$registerLastName" . mt_rand()),
                    'user_token' => $registerToken,
                    'user_email' => $registerUsername, // Buraya domain gelecek,
                    'user_password' => password_hash($registerPassword, PASSWORD_DEFAULT)
                ));

            if ($query) {
                $from = $db->from('users')
                    ->where("user_id", $db->lastId())
                    ->all();
                if ($from) {
                    /*
                    foreach ($from as $row);
                    $_SESSION["user"] = $row;
                    $_SESSION["login"] = true;
                    sendEmail($registerUsername, $registerFirstName . $registerLastName, "Eposta adresinizi doğrulayın", "Sayın <strong>" . $registerFirstName . " " .  $registerLastName . "</strong> <br> Kayıt olduğunuz için teşekkürler. Lütfen hesabınızı doğrulayın. <br> <br> <a target='_blank' style='background-color: rgb(26, 115, 232);min-height: 45px;border-radius: 4px;color: rgb(255, 255, 255);display: inline-flex;cursor: pointer;text-decoration: none;align-items: center;justify-content: center;padding: 0 2rem;' href=" . site_url("verification/" . $registerToken) . ">Doğrula</a>");
                    header("Location:" . get("continue"));
                    */
                    sendEmail($registerUsername, $registerFirstName . $registerLastName, "Eposta adresinizi doğrulayın", "Sayın <strong>" . $registerFirstName . " " .  $registerLastName . "</strong> <br> Kayıt olduğunuz için teşekkürler. Lütfen hesabınızı doğrulayın. <br> <br> <a target='_blank' style='background-color: rgb(26, 115, 232);min-height: 45px;border-radius: 4px;color: rgb(255, 255, 255);display: inline-flex;cursor: pointer;text-decoration: none;align-items: center;justify-content: center;padding: 0 2rem;' href=" . site_url("verification/" . $registerToken) . ">Doğrula</a>");
                    header("Location: " . site_url("signin?service=" . get("service") . "&continue=" . get("continue") . "&hl=" . get("hl")));
                }
            }
        }
    }
}

$meta = [
    'title' => "Hesap oluştur | " . ucfirst(appInformation(get("service"))),
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('signup');
