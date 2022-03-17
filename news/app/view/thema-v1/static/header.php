<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= public_url("images/news.png"); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= public_url("images/news.png"); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= public_url("images/news.png"); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= public_url("images/news.png"); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= public_url("images/news.png"); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= public_url("images/news.png"); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= public_url("images/news.png"); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= public_url("images/news.png"); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= public_url("images/news.png"); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= public_url("images/news.png"); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= public_url("images/news.png"); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= public_url("images/news.png"); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= public_url("images/news.png"); ?>">
    <link rel="stylesheet" href="<?= public_url('css/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= public_url('css/tail.select-light.min.css') ?>">
    <link rel="stylesheet" href="<?= public_url('css/index.css') ?>">
</head>

<body>
    <header class="header">
        <nav class="nav">
            <div class="start">
                <div class="menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><span class="icon"><?= menu(22) ?></span></div>
                <a href="<?= site_url() ?>" data-language="logo" class="brand"></a>
            </div>
            <div class="end">
                <div class="app">
                    <button class="dropdown-toggle" type="button" id="appDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <span class="icon"><?= app(24) ?></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="appDropdown">
                        <li>
                            <a href="https://mail.emirhanturizm.online/accounts/sign-in" target="_blank">
                                <div class="image">
                                    <img src="https://emirhanturizm.online/home/public/image/avatar.svg" alt="Hesap">
                                </div>
                                <span data-language="account" class="title mt-1"></span>
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
                                <span data-language="weather" class="title"></span>
                            </a>
                        </li>
                        <li class="set">
                            <a href="https://emirhanturizm.online/weather/" target="_blank">
                                <div class="image">
                                    <img src="https://emirhanturizm.online/home/public/image/picture.svg" alt="Resim Yükle">
                                </div>
                                <span data-language="picture" class="title"></span>
                            </a>
                        </li>
                        <li class="set">
                            <a href="https://emirhanturizm.online/currencies/" target="_blank">
                                <div class="image">
                                    <img src="https://emirhanturizm.online/home/public/image/currencies.png" alt="Finans">
                                </div>
                                <span data-language="finance" class="title"></span>
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
                                <span data-language="translation" class="title"></span>
                            </a>
                        </li>
                        <li class="set">
                            <a href="https://emirhanturizm.online/coronavirus/" target="_blank">
                                <div class="image">
                                    <img src="https://emirhanturizm.online/home/public/image/coronavirus.png" alt="Çeviri">
                                </div>
                                <span data-language="covid" class="title"></span>
                            </a>
                        </li>
                        <li class="set">
                            <a href="https://emirhanturizm.online/news/" target="_blank">
                                <div class="image">
                                    <img src="https://emirhanturizm.online/home/public/image/news.png" alt="Çeviri">
                                </div>
                                <span data-language="news" class="title"></span>
                            </a>
                        </li>
                        <li class="set">
                            <a href="javascript:void(0);">
                                <div class="image">
                                    <img src="https://emirhanturizm.online/home/public/image/whomyipaddres.png" alt="IP Adresim Ne?">
                                </div>
                                <span data-language="ip" class="title"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sign-up hide-768" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Oturum aç">
                    <a href="https://mail.emirhanturizm.online/accounts/sign-in?SignUp?service=accounts" data-language="sign-in" target="_blank" class="button"></a>
                </div>
            </div>
        </nav>
    </header>