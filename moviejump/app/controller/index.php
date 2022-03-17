<?php

$carousel = $db->from("carousel")
    ->orderby('carousel_id', 'DESC')
    ->all();
    

/*
$query = $db->from("movie")
    ->orderby('movie_id', 'DESC')
    ->all();

*/

$totalRecord = $db->from('movie')
    ->select('count(movie_id) as total')
    ->total();

$pageLimit = 24;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('movie')
    ->orderby('movie_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();

$meta = [
    'title' => setting('title'),
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

require view('index');
