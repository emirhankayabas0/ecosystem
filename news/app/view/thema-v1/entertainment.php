<?php require view('static/header') ?>
<main class="main">
    <div class="news">
        <div class="side-bar">
            <?php require view('static/side-bar') ?>
        </div>
        <div class="container d-flex">
            <div class="content">
                <h1>
                    <div class="entertainment"><img src="<?= public_url("images/entertainment.webp") ?>" alt=""></div>
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Entertainment")
                        } else {
                            document.write("Eğlence")
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
    document.title = "Habeler - Eğlence - En yeni";
    if (typeof localStorage.getItem("key") == 'undefined' || localStorage.getItem("key") == null) {
        news("entertainment", coun);
    } else {
        news("entertainment", localStorage.getItem("key"));
    }
</script>