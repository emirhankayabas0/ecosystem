<?php

$movie = explode("/", $_SERVER['REQUEST_URI']);
$movie_name = end($movie);

$query = $db->from("movie")
    ->where("movie_query", $movie_name)
    ->all();

foreach ($query as $row) {
}

if ($row['movie_name'] == "") {
    header("Location: " . site_url("404"));
}

$q = $db->from("comments")
    ->orderby('comment_id ', 'DESC')
    ->all();

require view('movie');
