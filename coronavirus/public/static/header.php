<?php require "./app/init.php" ?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koronavirüs | Emirhan Turizm</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?r=<?= mt_rand() ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL . "public/thema/css/index.css?r" . mt_rand() ?>">
    <!-- META -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="//www.emirhanturizm.online/coronavirus">
    <meta property="og:title" content="Emirhan Turizm - Koronavirüs">
    <meta name="twitter:site" content="@emirhanturizm">
    <meta name="twitter:title" content="Emirhan Turizm - Koronavirüs">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= URL . "public/thema/image/coronavirus.png" ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL . "public/thema/image/coronavirus.png" ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= URL . "public/thema/image/coronavirus.png" ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= URL . "public/thema/image/coronavirus.png" ?>">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="container-fluid">
                <div class="start">
                    <a href="./" class="brand" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Emirhan">
                        <img class="mask" src="<?= URL . "public/thema/image/mask.png" ?>" alt="">
                        <div class="logo">Koronavirüs</div>
                    </a>
                </div>
                <div class="end ">
                    <div class="app">
                        <button class="dropdown-toggle" type="button" id="appDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <span class="icon"><?= grid(24) ?></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="appDropdown">
                            <li>
                                <a href="https://mail.emirhanturizm.online/accounts/sign-in" target="_blank">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/avatar.svg" alt="Hesap">
                                    </div>
                                    <span class="title">Hesap</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="https://mail.emirhanturizm.online/" target="_blank">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/outbox.png" alt="Outbox">
                                    </div>
                                    <span class="title">Outbox</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="https://chat.emirhanturizm.online/" target="_blank">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/talk.png" alt="Talk">
                                    </div>
                                    <span class="title" style="margin-left: -3px;">Talk</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="https://emirhanturizm.online/weather/" target="_blank">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/cloudy.png" alt="Hava Durumu">
                                    </div>
                                    <span class="title">Hava Durumu</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="https://emirhanturizm.online/weather/" target="_blank">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/picture.svg" alt="Resim Yükle">
                                    </div>
                                    <span class="title">Resim Yükle</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="https://emirhanturizm.online/weather/" target="_blank">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/currencies.png" alt="Finans">
                                    </div>
                                    <span class="title">Finans</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="https://emirhankayabas.tr.ht/moviejump/" target="_blank">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/movie-jump.png" alt="Movie Jump">
                                    </div>
                                    <span class="title">Movie Jump</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="https://emirhanturizm.online/translate/" target="_blank">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/translate-icon.png" alt="Çeviri">
                                    </div>
                                    <span class="title">Çeviri</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="https://emirhanturizm.online/coronavirus/" target="_blank">
                                    <div class="image">
                                        <img src="<?= URL . "public/thema/image/coronavirus.png" ?>" alt="Koronavirüs">
                                    </div>
                                    <span class="title">Koronavirüs</span>
                                </a>
                            </li>
                            <li class="set">
                                <a href="javascript:void(0);">
                                    <div class="image">
                                        <img src="https://emirhanturizm.online/home/public/image/whomyipaddres.png" alt="IP Adresim Ne?">
                                    </div>
                                    <span class="title">IP Adresim</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sign-up hide-768" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hesap oluştur">
                        <a href="https://mail.emirhanturizm.online/accounts/sign-up?SignUp?service=accounts" class="button">Hesap oluştur</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>