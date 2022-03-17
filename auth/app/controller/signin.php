<?php

if (post("submit")) {
    $loginUsername = post("loginUsername");
    $loginPassword = post("loginPassword");
    $date = date('d F Y l');

    if (!filter_var($loginUsername, FILTER_VALIDATE_EMAIL)) {
        $error = "Bir e-posta adresi girin.";
    } elseif (!$loginPassword) {
        $error = "Bir şifre girin.";
    } else {
        $query = $db->prepare('SELECT * FROM users WHERE user_email = :user_email');
        $query->execute([
            'user_email' => $loginUsername
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $password_verify = password_verify($loginPassword, $row['user_password']);
            if ($password_verify) {
                User::Login($row);
                $from = $db->from('users')
                    ->where("user_email", $loginUsername)
                    ->all();
                if ($from) {
                    foreach ($from as $row);
                    //$_SESSION["user"] = $row;
                    //$_SESSION["login"] = true;
                    // Yapazsan yukarısı çalışıyor.

                    // Hesap bilgileri
                    $userArray = [
                        'user_id' => $row["user_id"],
                        'user_image' => $row["user_image"],
                        'user_name' => $row["user_name"],
                        'user_surname' => $row["user_surname"],
                        'user_url' => $row["user_url"],
                        'user_birthday' => $row["user_birthday"],
                        'user_gender' => $row["user_gender"],
                        'user_phone' => $row["user_phone"],
                        'user_token' => $row["user_token"],
                        'user_recovery_code' => $row["user_recovery_code"],
                        'user_email' => $row["user_email"],
                        'user_recovery_email' => $row["user_recovery_email"],
                        'user_verification' => $row["user_verification"],
                        'user_recovery_verification' => $row["user_recovery_verification"],
                        'user_update' => $row["user_update"],
                        'user_date' => $row["user_date"]
                    ];

                    // Tüm hesapların (Session) bilgilerinin tutulacağı hesap (session) dizisi.
                    $_SESSION["array"][$row["user_id"]] = $userArray;

                    // Tüm üye idlerinin tutulacağı session dizisi.
                    $_SESSION["id_array"][] = $row["user_id"];

                    // Aktif oturum id'si
                    $_SESSION["user_id"] = $row["user_id"];

                    // Giriş kontrol sessionu
                    $_SESSION["login"] = true;

                    header("Location: " . get("continue"));

                    sendEmail($loginUsername, $row["user_name"] . " " . $row["user_surname"], "Güvenlik Uyarısı", "<div style='font-family: 'Roboto';color: #222;'>Sayın <strong>" . $row["user_name"] . " " .  $row["user_surname"] . "</strong> <br> <br> Hesabınıza $date tarihinde yeni bir oturum açma işlemi tespit ettik. Bu işlem size aitse herhangi bir şey yapmanız gerekmez. İşlem size ait değilse hesabınızı güven altına almanıza yardımcı oluruz.<br> <br> <a target='_blank' style='background-color: rgb(26, 115, 232);min-height: 45px;border-radius: 4px;color: rgb(255, 255, 255);display: inline-flex;cursor: pointer;text-decoration: none;align-items: center;justify-content: center;padding: 0 1rem;line-height: 44px;' href=" . site_url() . ">Hesabını güvene al</a></div>");
                    //header("Location: " . get("continue"));
                }
            } else {
                $error = "Şifreniz hatalı. Lütfen tekrar deneyiniz.";
            }
        } else {
            $error = "Böyle bir kullanıcı bulunamadı.";
        }
    }
}


$meta = [
    'title' => "Oturum aç | " . ucfirst(appInformation(get("service"))),
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('signin');
