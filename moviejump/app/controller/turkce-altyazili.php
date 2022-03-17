<?php

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

foreach ($query as $row) {
}

$q = $db->from("comments")
    ->orderby('comment_id ', 'DESC')
    ->all();

require view('turkce-altyazili');
