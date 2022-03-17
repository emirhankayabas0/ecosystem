<?php

if ($data = form_control()) {
    $send = send_email($data['email'], $data['name'], $data['subject'], nl2br($data['message']));

    if($send) {
        $json['success'] = 'Yanıt Başarıyla Gönderildi.';
    }else {
        $json['error'] = 'Yanıt Gönderirken Bir Hata Oldu';
    }

} else {
    $json['error'] = 'Lütfen tüm bilgileri doldurun.';
}