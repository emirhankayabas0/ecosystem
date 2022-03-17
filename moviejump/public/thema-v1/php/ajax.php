<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=moviejump;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

$value = htmlspecialchars(trim($_POST['value']));
?>
<style>
    nav .center .result {
        display: none;
    }
</style>
<?php
if (!$value) {
} else {
    $row = $db->prepare("SELECT * FROM movie WHERE movie_name LIKE ?");
    $row->execute(array("%" . $value . "%"));
    $goster = $row->fetchAll(PDO::FETCH_ASSOC);
    $x = $row->rowCount();

    if (isset($x)) {
        foreach ($goster as $list) {
            echo "<li><a href=" . "movie/" . $list['movie_query'] . ">" . '<svg fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M0 1a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H1a1 1 0 01-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/></svg>' . $list['movie_name'] . "</a></li>";
        }
    } else {
?>
        <style>
            nav .center .result {
                display: none;
            }
        </style>
<?php
    }
}
