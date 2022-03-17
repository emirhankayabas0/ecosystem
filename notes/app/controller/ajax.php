<?php

$response = [];

// Yeni not
if (post("new-note-submit")) {

    $note_title = post("note-title");
    $note_content = post("note-content");
    $note_pin = post("pin") ?? 0;

    if (!$note_title) {
        $response["error"] = "Başlık girin.";
    } elseif (!$note_content) {
        $response["error"] = "İçerik girin.";
    } else {
        $query = $db->insert('notes')
            ->set(array(
                'note_title' => $note_title,
                'note_content' => $note_content,
                'note_pin' => $note_pin,
                'note_query' => $user["user_url"]
            ));

        if ($query) {
            //$response["title"] = "$note_title";
            //$response["content"] = "$note_content";
            $_SESSION["success"] = "Notunuzu kaydettik.";
        } else {
            $response["error"] = "Bir hata oldu.";
        }
    }
}

// Arama kutusu
if (post("searchSubmit")) {
    $value = post("value");

    if ($value) {
        $row = $db->prepare("SELECT * FROM notes WHERE note_title LIKE ?");
        $row->execute(array("%" . $value . "%"));
        $goster = $row->fetchAll(PDO::FETCH_ASSOC);
        $x = $row->rowCount();

        if (isset($x)) {
            foreach ($goster as $list) {
                if ($list["note_query"] == $user["user_url"]) {
                    echo "<a href=" . encrypt($list["note_id"]) . ">" .  "<span class='icon'>" . sticky(24) . "</span>" . $list['note_title'] . "</a>";
                }
            }
        }
    }
}

// Note pin
if (post("pinSubmit")) {
    $id = desrypt(post("id"));
    $pin = post("pin");

    if (!$id) {
        $response["error"] = "Geçersiz değer.";
    } else {
        if ($pin == 0) {
            $query = $db->update('notes')
                ->where('note_query', $user["user_url"])
                ->where('note_id', $id)
                ->set([
                    'note_pin' => 1
                ]);

            if ($query) {
                $response["success"] = true;
            }
        } elseif ($pin == 1) {
            $query = $db->update('notes')
                ->where('note_query', $user["user_url"])
                ->where('note_id', $id)
                ->set([
                    'note_pin' => 0
                ]);

            if ($query) {
                $response["success"] = true;
            }
        } else {
            $response["error"] = "Geçersiz değer.";
        }
    }
}

// Not arşiv
if (post("archiveSubmit")) {
    $id = desrypt(post("id"));
    $archive = post("archive");

    if (!$id) {
        $response["error"] = "Geçersiz değer.";
    } else {
        if ($archive == 0) {
            $query = $db->update('notes')
                ->where('note_query', $user["user_url"])
                ->where('note_id', $id)
                ->set([
                    'note_archive' => 1
                ]);

            if ($query) {
                $response["success"] = true;
            }
        } elseif ($archive == 1) {
            $query = $db->update('notes')
                ->where('note_query', $user["user_url"])
                ->where('note_id', $id)
                ->set([
                    'note_archive' => 0
                ]);

            if ($query) {
                $_SESSION["success"] = "Not arşivlendi.";
            }
        } else {
            $response["error"] = "Geçersiz değer.";
        }
    }
}

// Not sil ve arşivi kaldır.
if (post("removeSubmit")) {
    $id = desrypt(post("id"));

    if (!$id) {
        $response["error"] = "Geçersiz değer.";
    } else {
        $query = $db->update('notes')
            ->where('note_query', $user["user_url"])
            ->where('note_id', $id)
            ->set([
                'note_delete' => 1,
                'note_archive' => 0
            ]);

        if ($query) {
            $response["success"] = true;
        }
    }
}

// Not geri yükle
if (post("restoreSubmit")) {
    $id = desrypt(post("id"));

    if (!$id) {
        $response["error"] = "Geçersiz değer.";
    } else {
        $query = $db->update('notes')
            ->where('note_query', $user["user_url"])
            ->where('note_id', $id)
            ->set([
                'note_delete' => 0,
            ]);

        if ($query) {
            $response["success"] = true;
        }
    }
}

if (!post("searchSubmit")) {
    echo json_encode($response);
}
