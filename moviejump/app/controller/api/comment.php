<?php

if ($data = form_control()) {
    $query = $db->insert("comments")
        ->set([
            'comment_name' => $data['commentName'],
            'comment_email' => $data['commentEmail'],
            'comment_message' => $data['commentMessage'],
            'comment_movie' => $data['comment_movie_name']
        ]);

    if ($query) {
        $json['success'] = "Yorum başarıyla paylaşıldı.";
    } else {
        $json['error'] = "Bir sorun oluştur yorumunuz paylaşılmadı.";
    }
} else {
    $json["error"] = "Lütfen tüm alanları doldurun.";
}
