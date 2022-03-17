<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= staticFile("css", "bootstrap/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= staticFile("css", "static.min.css") ?>">
    <link rel="stylesheet" href="<?= public_url("css/index.css") ?>">
    <title><?= $meta['title'] ?></title>
    <!-- Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= public_url("images/xing.png") ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= public_url("images/xing.png") ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= public_url("images/xing.png") ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= public_url("images/xing.png") ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= public_url("images/xing.png") ?>">
    <!-- Script -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        let api = "<?= site_url("app/view/thema-v1/api/ajax.php") ?>";
    </script>
</head>
<?php $products = ['account' => ['title' => 'Hesabım', 'image' => session("array")[session("user_id")]["user_image"], 'url' => "http://localhost/account/"], 'outbox' => ['title' => 'Outbox', 'image' => public_url("images/productsImage/outbox.png"), 'url' => "http://localhost/outbox/"], 'talk' => ['title' => 'Talk', 'image' => public_url("images/productsImage/talk.png"), 'url' => "http://localhost/talk/"], 'weather' => ['title' => 'Hava Durumu', 'image' => public_url("images/productsImage/cloudy.png"), 'url' => "http://localhost/weather/"], 'picture' => ['title' => 'Resim Yükle', 'image' => public_url("images/productsImage/picture.svg"), 'url' => "http://localhost/picture/"], 'finance' => ['title' => 'Finans', 'image' => public_url("images/productsImage/currencies.png"), 'url' => "http://localhost/currencies/"], 'movie' => ['title' => 'Movie Jump', 'image' => public_url("images/productsImage/movie-jump.png"), 'url' => "http://localhost/moviejump/"], 'translation' => ['title' => 'Çeviri', 'image' => public_url("images/productsImage/translate-icon.png"), 'url' => "http://localhost/translate/"], 'coronavirus' => ['title' => 'Çeviri', 'image' => public_url("images/productsImage/coronavirus.png"), 'url' => "http://localhost/coronavirus/"], 'news' => ['title' => 'Haberler', 'image' => public_url("images/productsImage/news.png"), 'url' => "http://localhost/news/"], 'ip' => ['title' => 'IP Adresim', 'image' => public_url("images/productsImage/whomyipaddres.png"), 'url' => "#"]]; ?>

<body>
    <header class="header">
        <nav class="nav">
            <div class="start">
                <a href="<?= site_url() ?>" class="brand">
                    <img src="<?= public_url("images/xing.png") ?>" class="hide-768px" alt="">
                    <span>Hesap</span>
                </a>
            </div>
            <div class="center hide-768px">
                <div class="field">
                    <span class="icon"><?= search(24) ?></span>
                    <input type="text" id="searchInput" class="search" placeholder="Hesabında ara">
                    <span class="icon clear" id="clearSearchInput"><?= clear(24) ?></span>
                </div>
                <div id="result">
                    <ul class="list"></ul>
                </div>
            </div>
            <div class="end">
                <div class="searchToggleButton show-768px hide-425px" id="searchToggleButton"><span class="icon"><?= search(24) ?></span></div>
                <div class="help">
                    <button class="dropdown-toggle" type="button" id="helpDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <span class="icon"><?= help(24) ?></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="helpDropdown">
                        <li class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#helpBar" id="helpBarOpenButton" aria-controls="helpBar">Yardım</li>
                        <li class="dropdown-item" data-bs-toggle="modal" data-bs-target="#helpModal">Geri bildirim gönderin</li>
                    </ul>
                </div>
                <div class="application">
                    <button class="dropdown-toggle" type="button" id="applicationDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <span class="icon"><?= app(24) ?></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="applicationDropdown">
                        <div class="products">
                            <?php foreach ($products as $key => $product) : ?>
                                <li class="<?= $key ?> product">
                                    <a href="<?= $product["url"] ?>" class="<?= $key ?> url" target="_blank">
                                        <div class="productImage">
                                            <img src="<?= $product["image"] ?>" class="image" alt="<?= $key ?>">
                                        </div>
                                        <span class="productTitle"><?= $product["title"] ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </div>
                    </ul>
                </div>
                <div class="accounts">
                    <button class="dropdown-toggle" type="button" id="accountInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <div class="avatar">
                            <span class="icon"><img src="<?= session("array")[session("user_id")]["user_image"] ?>" alt=""></span>
                        </div>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="accountInside">
                        <div class="accountsHeader header">
                            <div class="userAvatar">
                                <img src="<?= session("array")[session("user_id")]["user_image"] ?>" alt="">
                                <span class="changeAvatar" id="changeAvatar" data-bs-toggle="modal" data-bs-target="#changeUserImage"><?= changeAvatar(20) ?></span>
                            </div>
                            <div class="userInformation">
                                <div class="userName"><?= session("array")[session("user_id")]["user_name"] . " " . session("array")[session("user_id")]["user_surname"] ?></div>
                                <div class="userEmail"><?= session("array")[session("user_id")]["user_email"] ?></div>
                            </div>
                            <div class="userAccountButton">
                                <a href="<?= site_url() . "?hl=tr&authuser=0" ?>" target="_blank" class="button-outline">Kayabaş Hesabınızı yönetin</a>
                            </div>
                        </div>
                        <div class="accountsContent content">
                            <?php foreach (session("id_array") as $id) : ?>
                                <?php $i = 0; ?>
                                <a href="<?= session("user_id") != $id ? site_url() . "?authuser=" . $id : "" ?>" class="<?= session("user_id") == $id ? "active" : "" ?>">
                                    <div class="userAvatar"><img src="<?= session("array")[$id]["user_image"] ?>" alt=""></div>
                                    <div class="userInformation">
                                        <div class="userName"><?= session("array")[$id]["user_name"] . " " . session("array")[$id]["user_surname"] ?></div>
                                        <div class="userEmail"><?= session("array")[$id]["user_email"] ?></div>
                                    </div>
                                </a>
                            <?php endforeach; ?>

                            <a href="http://localhost/auth/signin?service=accountsettings&continue=http://localhost/account/&hl=tr" target="_blank" class="addSession">
                                <span><?= addSession(20) ?></span>
                                <div class="text">Başka bir hesap ekle</div>
                            </a>
                        </div>
                        <div class="accountsFooter footer">
                            <a href="<?= AUTH . "/logout" ?>">Tüm hesapların oturumu kapat</a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
        helpBarOpenButton.addEventListener("click", () => {
            setTimeout(() => {
                document.querySelector("article.helpOffcanvas .offcanvas .offcanvas-content").classList.add("show")
                document.querySelector("article.helpOffcanvas .offcanvas .spinner-border").style.display = "none";
            }, 1000);

        })
    </script>