<?php require admin_view('static/header'); ?>

<div class="box-">
    <h1>
        Carousel Ayarları
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-">
    <div class="box-container container-50">
        <?php if (isset($success)) : ?>
            <div class="message success box-" style="display: inline-block; margin-bottom: 1rem;">
                <?= $success; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <div class="message error box-" style="display: inline-block; margin-bottom: 1rem;">
                <?= $error; ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST" class="form label">
            <div class="box" id="div-3">
                <h3>
                    Carousel Ekle
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label for="title">Carousel Adı</label>
                            <div class="form-content">
                                <input type="text" id="title" name="carousel_name">
                            </div>
                        </li>
                        <li>
                            <label for="title">Carousel Poster</label>
                            <div class="form-content">
                                <input type="text" id="title" name="carousel_poster">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Bilgileri</label>
                            <div class="form-content">
                                <input type="checkbox" name="movie_4k_option" value="1"> 4K <br>
                                <input type="checkbox" name="movie_dubbing_option" value="1"> Dublaj <br>
                                <input type="checkbox" name="movie_subtitle_option" value="1"> Altyazılı <br>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <ul>
                <li class="submit">
                    <button name="submit" value="submit" type="submit">Kaydet</button>
                </li>
            </ul>
        </form>
    </div>
</div>

<?php require admin_view('static/footer') ?>

<script>
    document.title = "Carousel | Movie Jump Admin";
</script>