<?php

if (!route(1)) {
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))) {
    $route[1] = 'index';
}

if (!session('user_rank') || session('user_rank') == 3) {
    $route[1] = 'login';
}

$menus = [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'home',
        'permissions' => [
            'show' => 'Görüntüleme'
        ]
    ],

    'users' => [
        'title' => 'Üyeler',
        'icon' => 'user',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
        //'submenu' => [
        //    'users' => 'Üyeleri Listele'
        //]
    ],

    'menu' => [
        'title' => 'Menü Yönetimi',
        'icon' => 'bars',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],

    'contact' => [
        'title' => 'İletişim Mesajları',
        'icon' => 'envelope',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],

    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
        ]
    ],

    'movies' => [
        'title' => 'Film Ayarları',
        'icon' => 'film',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
        ],
        'submenu' => [
            //'edit-movie' => 'Film Düzenle',
            'add-movie' => 'Film Ekle'
        ]
    ],

    /*
    'carousel' => [
        'title' => 'Carousel Ayarları',
        'icon' => 'sliders-h',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
        ]
    ]
    */
];

require admin_controller(route(1));
