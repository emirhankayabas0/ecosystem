<?php

$totalRecord = $db->from('movie')
    ->select('count(movie_id) as total')
    ->total();

$pageLimit = 15;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('movie')
    ->orderby('movie_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();

foreach ($query as $row);

require admin_view('movies');
