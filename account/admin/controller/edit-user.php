<?php

$id = get('id');
if (!$id) {
    header('Location:' . admin_url('users'));
    exit();
}

$row = $db->from('users')
    ->where('user_id', $id)
    ->first();

if (!$row) {
    header('Location:' . admin_url('users'));
    exit();
}

if (post('submit')) {
    if ($data = form_control()) {
        $data['user_url'] = strtolower($user_name . "-" . $user_surname);
        $query = $db->update('users')
            ->where('user_id', $id)
            ->set($data);
        if ($query) {
            header("Location: " . admin_url('users'));
        } else {
            $error = "Düzenleme sırasında bir hata oldu.";
        }
    } else {
        $error = "Gerekli yerler boş bırakılmaz.";
    }
}

require admin_view('edit-user');
