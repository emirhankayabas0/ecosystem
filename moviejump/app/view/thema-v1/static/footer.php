<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 start">
                <a href="<?= site_url() ?>" class="logo">
                    <lottie-player class="animate" src="https://assets3.lottiefiles.com/packages/lf20_hfsax4wl.json" speed=".75" autoplay></lottie-player>
                    <h1 class="title"><?= setting('site_title') ?></h1>
                </a>
                <p class="mt-3">© 2022 <strong><?= site_url() ?></strong> Tüm hakları saklıdır.</p>
            </div>
            <div class="col-md-2 center">
                <h1>Hızlı Erişim</h1>
                <ul>
                    <?php foreach (menu(2) as $key => $menu) : ?>
                        <li><a href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-2 center">
                <h1>Katagori</h1>
                <ul>
                    <?php foreach (menu(2) as $key => $menu) : ?>
                        <li><a href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <h1 class="mt-4 pt-1">Film Dili</h1>
                <ul class="mb-3">
                    <?php foreach (menu(2) as $key => $menu) : ?>
                        <li><a href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-4 end">
                <h1>Geçmişten Bugüne Sinema - Yeni Filmler</h1>
                <p><?= setting('footer_description') ?></p>
            </div>
        </div>
    </div>
</footer>
<script src="<?= public_url('js/bootstrap/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= public_url('js/bootstrap/popper.min.js') ?>"></script>
<script src="<?= public_url('js/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?= public_url('js/index.js') ?>"></script>
</body>

</html>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    $(() => {
        $("input[name=search]").keyup(function() {
            let value = $(this).val();
            let subject = "value=" + value;
            $.ajax({
                type: "POST",
                url: "<?= public_url('php/ajax.php') ?>",
                data: subject,
                success: function(data) {
                    $('.result').html(data)
                }
            })
        })
    })
</script>