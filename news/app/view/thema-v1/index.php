<?php require view('static/header') ?>
<main class="main">
    <div class="news">
        <div class="side-bar">
            <?php require view('static/side-bar') ?>
        </div>
        <div class="container d-flex">
            <div class="content">
                <h1>
                    <div class="general"><img src="<?= public_url("images/general.webp") ?>" alt=""></div>
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Headlines")
                        } else {
                            document.write("Başlıklar")
                        }
                    </script>
                </h1>
            </div>
            <?php require view('static/weather') ?>
        </div>
    </div>
</main>
<?php require view('static/footer') ?>

<script>
    document.title = "Habeler";
    if (typeof localStorage.getItem("key") == 'undefined' || localStorage.getItem("key") == null) {
        news("", coun);
    } else {
        news("", localStorage.getItem("key"));
    }
</script>