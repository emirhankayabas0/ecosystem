<?php

if (post("submit")) {
    $carousel_name = post("carousel_name");
    $carousel_poster = post("carousel_poster");
    $movie_4k_option = post("movie_4k_option");
    $movie_dubbing_option = post("movie_dubbing_option");
    $movie_subtitle_option = post("movie_subtitle_option");

    if (!$carousel_name) {
        $error = "Carousel adı boş bırakılmaz";
    } elseif (!$carousel_poster) {
        $error = "Carousel posteri boş bırakılmaz";
    } else {
        $query = $db->insert('carousel')
            ->set([
                'carousel_name' => $carousel_name,
                'carousel_poster' => $carousel_poster,
                'carousel_query' => seflink($carousel_name),
                'movie_4k_option' => $movie_4k_option ? $movie_4k_option : 0,
                'movie_dubbing_option' => $movie_dubbing_option ? $movie_dubbing_option : 0,
                'movie_subtitle_option' => $movie_subtitle_option ? $movie_subtitle_option : 0
            ]);

        if ($query) {
            $success = "Carousel başarıyla eklendi";
        } else {
            $error = "Carousel eklenirken hata oldu. Galiba sunucun patladı.";
        }
    }
}



require admin_view('carousel');
