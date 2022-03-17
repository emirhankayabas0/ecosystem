<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--styles-->
    <link rel="stylesheet" href="<?php echo admin_public_url('styles/main.css') ?>">

    <!--scripts-->
    <script src="<?php echo admin_public_url('scripts/jquery-1.12.2.min.js') ?>"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="<?php echo admin_public_url('scripts/admin.js') ?>"></script>
    <style>
        .menu-container .handle {
            width: 25px;
            height: 25px;
            background-color: #ccc;
            position: absolute;
            top: 15px;
            right: -25px;
            cursor: move;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .menu-container form>ul li {
            background-color: #f5f5f5;
            overflow: inherit !important;
        }

        .ui-sortable-placeholder {
            background-color: #f7ffd8 !important;
            visibility: visible !important;
        }
    </style>
</head>

<?php if (session('user_rank') && session('user_rank') != 3) : ?>

    <body>
        <!--navbar-->
        <div class="navbar">
            <ul dropdown>
                <li>
                    <a href="#">
                        <span class="fa fa-home"></span>
                        <span class="title">
                            Emirhan Kayabaş
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/phpmyadmin/" target="_blank">
                        Veritabanına Git
                    </a>
                </li>
                <li>
                    <a href="<?=admin_url('log-out')?>">
                        Çıkış Yap
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <span class="fa fa-comment"></span>
                        1
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-plus"></span>
                        <span class="title">New</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                New Post
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                New Page
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                New Category
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>

        <!--sidebar-->
        <div class="sidebar">
            <ul>
                <?php foreach ($menus as $mainUrl => $menu) : ?>
                    <li class="<?= (route(1) == $mainUrl) || (isset($menu['submenu'][route(1)])) ? 'active' : null ?>">
                        <a href="<?= admin_url($mainUrl) ?>">
                            <span class="fa fa-<?= $menu['icon'] ?>"></span>
                            <span class="title">
                                <?= $menu['title'] ?>
                            </span>
                        </a>
                        <?php if (isset($menu['submenu'])) : ?>
                            <ul class="sub-menu">
                                <?php foreach ($menu['submenu'] as $url => $title) : ?>
                                    <li>
                                        <a href="<?= admin_url($url) ?>">
                                            <?= $title ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
                <li class="line">
                    <span></span>
                </li>
            </ul>
            <a href="#" class="collapse-menu">
                <span class="fa fa-arrow-circle-left"></span>
                <span class="title">
                    Collapse menu
                </span>
            </a>
        </div>

        <!--content-->
        <div class="content">

            <?php if (isset($error)) : ?>
                <div class="message error box-">
                    <?= $error; ?>
                </div>
            <?php endif; ?>

        <?php endif; ?>