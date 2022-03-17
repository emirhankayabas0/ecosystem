<?php

if ($data = form_control()) {
    if (!filter_var($data['contact_email'], FILTER_VALIDATE_EMAIL)) {
        $json['error'] = "Lütfen geçerli bir e-posta adresi giriniz.";
    } else {
        $query = $db->insert('contact')
            ->set([
                'contact_name' => $data['contact_name'],
                'contact_email' => $data['contact_email'],
                'contact_subject' => $data['contact_subject'],
                'contact_message' => $data['contact_message']
            ]);

        if ($query) {
            $json['success'] = "Mesajınız bize ulaştı. Teşekkür ederiz.";
        } else {
            $json['error'] = "Bir sorun oluştur ve mesajınız gönderilemedi..";
        }
    }
} else {
    $json['error'] = "Lütfen tüm alanları doldurunuz.";
}
