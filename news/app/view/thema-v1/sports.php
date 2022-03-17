<?php require view('static/header') ?>
<main class="main">
    <div class="news">
        <div class="side-bar">
            <?php require view('static/side-bar') ?>
        </div>
        <div class="container d-flex">
            <div class="content">
                <h1>
                    <div class="sports"><img src="<?= public_url("images/science.webp") ?>" alt=""></div>
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Sports")
                        } else {
                            document.write("Spor")
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
    document.title = "Habeler - Spor - En yeni";
    if (typeof localStorage.getItem("key") == 'undefined' || localStorage.getItem("key") == null) {
        news("sports", coun);
    } else {
        news("sports", localStorage.getItem("key"));
    }
</script>