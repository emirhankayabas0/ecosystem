<?php $u = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<h1 class="category-title">Kategoriler</h1>
<div class="category">
    <ul>
        <?php foreach (menu(6) as $key => $menu) : ?>
            <li><a data-value="<?= $menu['title'] ?>" href="<?= site_url() . $menu['url'] ?>"><?= film(16) ?> <?= $menu['title'] ?> filmi izle</a></li>
        <?php endforeach; ?>
    </ul>
</div>
<h1 class="category-title mt-3">Film Dili</h1>
<div class="category">
    <ul>
        <?php foreach (menu(5) as $key => $menu) : ?>
            <li><a data-value="<?= $menu['title'] ?>" href="<?= site_url() . $menu['url'] ?>" class="<?php if($u == site_url() . $menu['url']) {echo "active";} ?>" ><?= language(16) ?> <?= $menu['title'] ?> filmi izle</a></li>
        <?php endforeach; ?>
    </ul>
</div>