<?php

$id = get('id');
if (!$id) {
    header('Location:' . admin_url('movies'));
    exit();
}

$row = $db->from('movie')
    ->where('movie_id', $id)
    ->first();

if (!$row) {
    header('Location:' . admin_url('movies'));
    exit();
}

if (post("submit")) {
    $movie_edit_name = post("movie_edit_name");
    $movie_edit_poster = post("movie_edit_poster");
    $movie_edit_dubbing = post("movie_edit_dubbing");
    $movie_edit_subtitle = post("movie_edit_subtitle");
    $movie_edit_director = post("movie_edit_director");
    $movie_edit_scenario = post("movie_edit_scenario");
    $movie_edit_players = post("movie_edit_players");
    $movie_edit_description = post("movie_edit_description");
    $movie_edit_vision_date = post("movie_edit_vision_date");
    $movie_edit_duration = post("movie_edit_duration");
    $movie_edit_imdb = post("movie_edit_imdb");
    $movie_edit_4k_option = post("movie_edit_4k_option");
    $movie_edit_dubbing_option = post("movie_edit_dubbing_option");
    $movie_edit_subtitle_option = post("movie_edit_subtitle_option");

    if (!$movie_edit_name) {
        $error = "Film adı boş bırakılmaz.";
    } elseif (!$movie_edit_poster) {
        $error = "Film posteri boş bırakılmaz.";
    } elseif (!$movie_edit_director) {
        $error = "Film yönetmeni boş bırakılmaz.";
    } elseif (!$movie_edit_scenario) {
        $error = "Film senaryosu boş bırakılmaz.";
    } elseif (!$movie_edit_players) {
        $error = "Film oyuncuları boş bırakılmaz.";
    } elseif (!$movie_edit_description) {
        $error = "Film açıklaması boş bırakılmaz.";
    } elseif (!$movie_edit_vision_date) {
        $error = "Film vizyon yılı boş bırakılmaz.";
    } elseif (!$movie_edit_duration) {
        $error = "Film süresi boş bırakılmaz.";
    } elseif (!$movie_edit_imdb) {
        $error = "Film IMDB puanı boş bırakılmaz.";
    } else {
        $query = $db->update('movie')
            ->where('movie_id', $id)
            ->set([
                'movie_name' => $movie_edit_name,
                'movie_poster' => $movie_edit_poster,
                'movie_dubbing' => $movie_edit_dubbing,
                'movie_subtitle' => $movie_edit_subtitle,
                'movie_query' => seflink($movie_edit_name),
                'movie_director' => $movie_edit_director,
                'movie_scenario' => $movie_edit_scenario,
                'movie_players' => $movie_edit_players,
                'movie_description' => $movie_edit_description,
                'movie_vision_date' => $movie_edit_vision_date,
                'movie_duration' => $movie_edit_duration,
                'movie_imdb' => $movie_edit_imdb,
                'movie_4k_option' => $movie_edit_4k_option,
                'movie_dubbing_option' => $movie_edit_dubbing_option,
                'movie_subtitle_option' => $movie_edit_subtitle_option
            ]);
        if ($query) {
            $success = "Film başarıyla güncellendi";
        } else {
            $error = "Film güncellenirken bir hata oldu.";
        }
    }
}
require admin_view('edit-movie');
