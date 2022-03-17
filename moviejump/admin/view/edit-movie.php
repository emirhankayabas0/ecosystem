<?php require admin_view('static/header'); ?>

<div class="box-">
    <h1>
        Film Düzenle (#<?= $id ?>)
        <!-- <a href="#">Add New</a> -->
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
        <form action="" method="POST" class="form label">
            <div class="box" id="div-3">
                <h3>
                    Film Düzenle
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label for="title">Film Adı</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_name" value="<?= post('movie_edit_name') ? post('movie_edit_name') : $row['movie_name'] ?>">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Poster</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_poster" value="<?= post('movie_edit_poster') ? post('movie_edit_poster') : $row['movie_poster'] ?>">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box" id="div-3">
                <h3>
                    Film URL Ayarları Düzenle
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label for="title">Film Dublaj Link</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_dubbing" value="<?= post('movie_edit_dubbing') ? post('movie_edit_dubbing') : $row['movie_dubbing'] ?>">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Altyazı Link</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_subtitle" value="<?= post('movie_edit_subtitle') ? post('movie_edit_subtitle') : $row['movie_subtitle'] ?>">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box" id="div-3">
                <h3>
                    Film Açıklama Ayarları
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label for="title">Film Yönetmen</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_director" value="<?= post('movie_edit_director') ? post('movie_edit_director') : $row['movie_director'] ?>">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Senaryo</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_scenario" value="<?= post('movie_edit_scenario') ? post('movie_edit_scenario') : $row['movie_scenario'] ?>">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Oyuncuları</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_players" value="<?= post('movie_edit_players') ? post('movie_edit_players') : $row['movie_players'] ?>">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Açıklama</label>
                            <div class="form-content">
                                <textarea name="movie_edit_description" cols="30" rows="10"><?= post('movie_edit_description') ? post('movie_edit_description') : $row['movie_description'] ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Vizyon Yılı</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_vision_date" value="<?= post('movie_edit_vision_date') ? post('movie_edit_vision_date') : $row['movie_vision_date'] ?>">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Süresi</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_duration" value="<?= post('movie_edit_duration') ? post('movie_edit_duration') : $row['movie_duration'] ?>">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film IMDB Puanı</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_edit_imdb" value="<?= post('movie_edit_imdb') ? post('movie_edit_imdb') : $row['movie_imdb'] ?>">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Bilgileri</label>
                            <div class="form-content">
                                <input type="checkbox" <?php if ($row['movie_4k_option'] == 1) {
                                                            echo "checked";
                                                        } ?> name="movie_edit_4k_option" value="<?= post('movie_edit_4k_option') ? post('movie_edit_4k_option') : $row['movie_4k_option'] ?>"> 4K <br>
                                <input type="checkbox" <?php if ($row['movie_dubbing_option'] == 1) {
                                                            echo "checked";
                                                        } ?> name="movie_edit_dubbing_option" value="<?= post('movie_edit_dubbing_option') ? post('movie_edit_dubbing_option') : $row['movie_dubbing_option'] ?>"> Dublaj <br>
                                <input type="checkbox" <?php if ($row['movie_subtitle_option'] == 1) {
                                                            echo "checked";
                                                        } ?> name="movie_edit_subtitle_option" value="<?= post('movie_edit_subtitle_option') ? post('movie_edit_subtitle_option') : $row['movie_subtitle_option'] ?>"> Altyazılı <br>
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

<?php require admin_view('static/footer'); ?>

<script>
    document.title = "Film Düzenle | Movie Jump Admin";
</script>