<?php

if (post("search")) {
    $search_name = post("search_name");
}

if (post("submit")) {
    $movie_name = post("movie_name");
    $movie_poster = post("movie_poster");
    $movie_dubbing = post("movie_dubbing");
    $movie_subtitle = post("movie_subtitle");
    $movie_director = post("movie_director");
    $movie_scenario = post("movie_scenario");
    $movie_players = post("movie_players");
    $movie_description = post("movie_description");
    $movie_vision_date = post("movie_vision_date");
    $movie_duration = post("movie_duration");
    $movie_imdb = post("movie_imdb");
    $movie_4k_option = post("movie_4k_option") ? post('movie_4k_option') : 0;
    $movie_dubbing_option = post("movie_dubbing_option") ? post('movie_dubbing_option') : 0;
    $movie_subtitle_option = post("movie_subtitle_option") ? post('movie_subtitle_option') : 0;
    $movie_action = post("movie_action");
    $movie_science_fiction = post("movie_science_fiction");
    $movie_adventure = post("movie_adventure");
    $movie_animation = post("movie_animation");
    $movie_fantastic = post("movie_fantastic");
    $movie_add_user = post("movie_add_user");

    if (!$movie_name) {
        $error = "Film adı boş bırakılmaz.";
    } elseif (!$movie_poster) {
        $error = "Film afişi boş bırakılmaz.";
    } elseif (!$movie_director) {
        $error = "Yönetmin boş bırakılmaz";
    } elseif (!$movie_scenario) {
        $error = "Senaryo boş bırakılmaz";
    } else if (!$movie_players) {
        $error = "Oyuncular boş bırakılmaz";
    } elseif (!$movie_description) {
        $error = "Açıklama boş bırakılamaz.";
    } elseif (!$movie_vision_date) {
        $error = "Vizyon tarihi boş bırakılmaz.";
    } elseif (!$movie_imdb) {
        $error = "IMDB puanı boş bırakılmaz.";
    } else if (!$movie_add_user) {
        $error = "Yükleyen kişi boş bırakılmaz.";
    } else {
        $query = $db->insert('movie')
            ->set(array(
                'movie_name' => $movie_name,
                'movie_poster' => $movie_poster,
                'movie_dubbing' => $movie_dubbing,
                'movie_subtitle' => $movie_subtitle,
                'movie_query' => seflink($movie_name),
                'movie_director' => $movie_director,
                'movie_scenario' => $movie_scenario,
                'movie_players' => $movie_players,
                'movie_description' => $movie_description,
                'movie_vision_date' => $movie_vision_date,
                'movie_duration' => $movie_duration,
                'movie_imdb' => $movie_imdb,
                'movie_add_user' => $movie_add_user,
                'movie_4k_option' => $movie_4k_option,
                'movie_dubbing_option' => $movie_dubbing_option,
                'movie_subtitle_option' => $movie_subtitle_option,
                'movie_action' => $movie_action ? $movie_action : 0,
                'movie_science_fiction' => $movie_science_fiction ? $movie_science_fiction : 0,
                'movie_adventure' => $movie_adventure ? $movie_adventure : 0,
                'movie_animation' => $movie_animation ? $movie_animation : 0,
                'movie_fantastic' => $movie_fantastic ? $movie_fantastic : 0
            ));

        if ($query) {
            $success = "Film başarıyla yüklenmiştir.";
        } else {
            $error = "Film yüklenirken bir hata oldu.";
        }
    }
}

require admin_view('add-movie');
