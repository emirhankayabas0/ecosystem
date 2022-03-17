<?php require view('static/header') ?>

<main class="movie_list">
    <div class="container d-flex">
        <div class="sidebar">
            <?php require_once view("static/side-bar-menu") ?>
        </div>
        <div class="content">
            <?php //require view('static/swiper') 
            ?>
            <h1 class="title">Dil: Türkçe Altyazılı Filmleri izle</h1>
            <?php foreach ($query as $row) : ?>
                <?php if (isset($row['movie_id'])) : ?>
                    <?php if (!$row["movie_subtitle"] == "") : ?>

                        <div class="movie">
                            <a href="<?= site_url("movie/" . seflink($row['movie_name'])) ?>">
                                <div class="play_button"><?= play(75) ?></div>
                                <div class="movie_poster">
                                    <img src="<?= $row['movie_poster'] ?>" alt="">
                                    <div class="movie_info">
                                        <?php if ($row['movie_dubbing_option'] == 1) : ?>
                                            <div class="dubbing"><?= flagTurkey(100) ?></div>
                                        <?php endif; ?>
                                        <?php if ($row['movie_subtitle_option'] == 1) : ?>
                                            <div class="subtitle"><?= flagUsa() ?></div>
                                        <?php endif; ?>
                                        <?php if ($row['movie_4k_option'] == 1) : ?>
                                            <div class="_4k"><?= _4K() ?></div>
                                        <?php else : ?>
                                            <div class="_4k"><?= hd(16) ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="movie_detail">
                                    <div class="name">
                                        <span><?= $row['movie_name'] ?></span>
                                    </div>
                                    <div class="vision">
                                        <span><?= $row['movie_vision_date'] ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php if ($totalRecord > $pageLimit) : ?>
                <div class="pagination w-100">
                    <ul>
                        <?= $db->showPagination(site_url(route(0) . "?" . $pageParam . '=[page]')); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<script>
    document.title = "Aksiyon Filmi İzle | Movie Jump"
</script>

<?php require view('static/footer') ?>