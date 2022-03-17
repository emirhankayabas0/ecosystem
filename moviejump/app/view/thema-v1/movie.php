<?php require view('static/header'); ?>
<main class="movie">
    <div class="container">
        <div class="main">
            <?php if ($row['movie_subtitle'] == $row['movie_dubbing']) : ?>
                <h1 class="language-title">Dil seçeneği için filmin sol altında bulunan <?= cc(18) ?> kullanabilirsiniz.</h1>
                <iframe src="<?= $row['movie_subtitle'] ?>" class="movie-source" allowfullscreen frameborder="0"></iframe>
            <?php else : ?>
                <div class="language">
                    <h1 class="noti">Film yok ise lütfen seçiniz.</h1>
                    <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                        <?php if (isset($row['movie_subtitle']) && !$row['movie_subtitle'] == "") : ?>
                            <li class="nav-item" role="presentation" data-bs-toggle='tooltip' data-bs-placement='bottom' title='Altyazılı'>
                                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Altyazılı</button>
                            </li>
                        <?php endif; ?>
                        <?php if (isset($row['movie_dubbing']) && !$row['movie_dubbing'] == "") : ?>
                            <li class="nav-item" role="presentation" data-bs-toggle='tooltip' data-bs-placement='bottom' title='Dublaj'>
                                <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dublaj</button>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><iframe src="<?= $row['movie_subtitle'] ?>" class="movie-source" allowfullscreen frameborder="0"></iframe></div>
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><iframe src="<?= $row['movie_dubbing'] ?>" class="movie-source" allowfullscreen frameborder="0"></iframe></div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="header">
                <div class="col-md-3 hide">
                    <div class="poster">
                        <img src="<?= $row['movie_poster'] ?>" alt="">
                        <div class="share">
                            <a href="<?= "https://www.facebook.com/sharer.php?u=" . site_url("movie/" . $movie_name) ?>" target="_blank" class="facebook">
                                <?= facebook(16) . "Facebook ile paylaş" ?>
                            </a>
                            <a href="<?= "https://twitter.com/intent/tweet?url=" . site_url("movie/" . $movie_name) ?>" target="_blank" class=" twitter">
                                <?= twitter(16) . "Twitter ile paylaş" ?>
                            </a>
                            <a href="<?= "whatsapp://send?text=" . site_url("movie/" . $movie_name) ?>" target="_blank" class=" whatsapp">
                                <?= whatsapp(16) . "Whatsapp ile paylaş" ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="start">
                        <div class="imdb">
                            <span><?= $row['movie_imdb'] ?></span>
                            <span>IMDB Puanı</span>
                        </div>
                        <div class="detail">
                            <div class="name">
                                <div class="vision-date"><?= $row['movie_name'] ?></div>
                            </div>
                            <div>
                                <div class="vision-date">Yapım Yılı : <?= $row['movie_vision_date'] ?></div>
                                <div class="duration">Süre : <?= $row['movie_duration'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <div class="director">
                            <div class="key">Yönetmen</div>
                            <div class="value"><?= $row['movie_director'] ?></div>
                        </div>
                        <div class="scenario">
                            <div class="key">Senaryo</div>
                            <div class="value"><?= $row['movie_scenario'] ?></div>
                        </div>
                        <div class="players">
                            <div class="key">Oyuncular</div>
                            <div class="value"><?= $row['movie_players'] ?></div>
                        </div>
                        <div class="type">
                            <div class="key">Tür</div>
                            <div class="value">
                                <?php
                                if ($row["movie_action"] == 1) {
                                    echo "<a href=" . site_url("aksiyon-filmleri-izle") . " data-bs-toggle='tooltip' data-bs-placement='bottom' title='Aksiyon'>" . "Aksiyon" . "</a>";
                                }
                                if ($row["movie_science_fiction"] == 1) {
                                    echo "<a href=" . site_url("bilim-kurgu-filmleri-izle") . " data-bs-toggle='tooltip' data-bs-placement='bottom' title='Bilim Kurgu'>" . "Bilim Kurgu" . "</a>";
                                }
                                if ($row["movie_adventure"] == 1) {
                                    echo "<a href=" . site_url("macera-filmleri-izle") . " data-bs-toggle='tooltip' data-bs-placement='bottom' title='Macera'>" . "Macera" . "</a>";
                                }
                                if ($row["movie_animation"] == 1) {
                                    echo "<a href=" . site_url("animasyon-filmleri-izle") . " data-bs-toggle='tooltip' data-bs-placement='bottom' title='Animasyon'>" . "Animasyon" . "</a>";
                                }
                                if ($row["movie_fantastic"] == 1) {
                                    echo "<a href=" . site_url("fantastik-filmleri-izle") . " data-bs-toggle='tooltip' data-bs-placement='bottom' title='Fantastik'>" . "Fantastik" . "</a>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="language">
                            <div class="key">
                                Dil
                            </div>
                            <div class="value">
                                <?php
                                if (!$row["movie_subtitle"] == "") {
                                    echo "<a href=" . site_url("turkce-altyazili") . " data-bs-toggle='tooltip' data-bs-placement='bottom' title='Türkçe Altyazılı'>" . "Türkçe Altyazılı" . "</a>";
                                }
                                if (!$row["movie_dubbing"] == "") {
                                    echo "<a href=" . site_url("turkce-dublaj") . " data-bs-toggle='tooltip' data-bs-placement='bottom' title='Türkçe Dublaj'>" . "Türkçe Dublaj" . "</a>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="description">
                            <div class="value">
                                <?= $row['movie_description'] ?>
                            </div>
                        </div>
                        <div class="comments">
                            <h1>Yeni Yorum</h1>
                            <div class="error" style="display: none;" id="comment-error-message"></div>
                            <div class="success" style="display: none;" id="comment-success-message"></div>
                            <div class="new-comment">
                                <form action="" id="comment-form" onsubmit="return false">
                                    <div class="start">
                                        <div class="form-floating">
                                            <input type="text" <?php if (session('user_name')) {
                                                                    echo "disabled";
                                                                } ?> class="form-control" value="<?= session('user_name') ? session('user_name') : null ?>" name="commentName" id="commentName" placeholder="name">
                                            <label for="commentName">Ad</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" <?php if (session('user_email')) {
                                                                    echo "disabled";
                                                                } ?> class="form-control" value="<?= session('user_email') ? session('user_email') : null ?>" name="commentEmail" id="commentEmail" placeholder="name@example.com">
                                            <label for="commentEmail">E-posta</label>
                                        </div>
                                        <input type="hidden" name="comment_movie_name" value="<?= $movie_name ?>">
                                    </div>
                                    <div class="end">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="commentMessage" placeholder="Çok güzel bir filmdi." id="commentMessage"></textarea>
                                            <label for="commentMessage">Yorumun</label>
                                        </div>
                                        <button value="1" name="submit" onclick="comments('#comment-form')" type="submit">Yorum Yap</button>
                                    </div>
                                </form>
                            </div>
                            <div class="comment mt-4">
                                <h1>Yorumlar</h1>
                                <?php foreach ($q as $result) : ?>
                                    <?php if ($result['comment_movie'] == $movie_name) : ?>
                                        <div class="com">
                                            <div class="start">
                                                <?= user(24) ?>
                                            </div>
                                            <div class="end">
                                                <div class="name"><?= $result["comment_name"] ?></div>
                                                <div class="message"><?= $result["comment_message"] ?></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="full-screen-movie-poster">
    <div class="con">
        <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Paylaş" class="share"><?= share(20) ?></div>
        <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kapat" class="close"><?= close(38) ?></div>
    </div>
    <div>
        <h1><?= $row['movie_name'] ?></h1>
        <img src="<?= $row['movie_poster'] ?>" alt="">
    </div>
</div>

<?php require view('static/footer') ?>
<script>
    document.title = `<?= $row['movie_name'] ?> - Movie Jump`;
    fetch(`https://imdb8.p.rapidapi.com/auto-complete?q=<?= $movie_name ?>`, {
            method: "GET",
            headers: {
                "x-rapidapi-host": "imdb8.p.rapidapi.com",
                "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
            },
        })
        .then((response) => response.json())
        .then((data) => {
            const list = data.d;
            list.map((item) => {
                const name = item.l;
                const poster = item.i.imageUrl;
            });
        })
        .catch((err) => {
            console.log(err);
        });

    const fullScreenMoviePoster = document.querySelector(".full-screen-movie-poster");
    const fullScreenMoviePosterClose = document.querySelector(".full-screen-movie-poster .close");
    const fullScreenMoviePosterShare = document.querySelector(".full-screen-movie-poster .share");
    const moviePoster = document.querySelector("main.movie .container .row .header .col-md-3 .poster img");

    moviePoster.style.cursor = "zoom-in";

    fullScreenMoviePosterShare.addEventListener("click", function() {
        if (navigator.share) {
            const shareData = {
                'title': '<?= $row['movie_name'] ?> - Movie Jump',
                'text': 'Filmi çok beğendim. Senide seveceğinden emimim.',
                'url': window.location.href
            };
            navigator.share(shareData)
                .then(() => {
                    // İşlem yapabilirsin.
                })
                .catch(e => {
                    // İşlem yapabilirsin.
                })
        }
    })

    moviePoster.addEventListener("click", function() {
        fullScreenMoviePoster.classList.add("active");
        document.querySelector("body").style.overflow = "hidden";
    })
    fullScreenMoviePosterClose.addEventListener("click", function() {
        fullScreenMoviePoster.classList.remove("active");
        document.querySelector("body").style.overflow = "auto";
    })

    const notiLangue = document.querySelector("main.movie .main .language .noti");

    setTimeout(() => {
        notiLangue.style.display = "none";
    }, 5000);
</script>