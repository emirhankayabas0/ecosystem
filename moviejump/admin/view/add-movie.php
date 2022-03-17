<?php require admin_view('static/header'); ?>

<style>
    .movies {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .movies li {
        width: 200px;
        height: auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        padding: 1rem 0;
    }

    .movies li h2 {
        margin-bottom: 7px;
        font-weight: 500;
        font-size: 18px;
        text-align: center;
    }

    .movies textarea {
        width: 190px;
        margin-left: 5px;
        margin-top: 10px;
        font-size: 14px;
    }
</style>

<div class="box-">
    <h1>
        Film Ekle
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
                    Film Ayarları
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label for="title">Film Adı</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_name">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Poster</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_poster">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box" id="div-3">
                <h3>
                    Film URL Ayarları
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label for="title">Film Dublaj Link</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_dubbing">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Altyazı Link</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_subtitle">
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
                                <input type="text" id="title" name="movie_director">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Senaryo</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_scenario">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Oyuncuları</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_players">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Açıklama</label>
                            <div class="form-content">
                                <textarea name="movie_description" cols="30" rows="10"></textarea>
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Vizyon Yılı</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_vision_date">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film Süresi</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_duration">
                            </div>
                        </li>
                        <li>
                            <label for="title">Film IMDB Puanı</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_imdb">
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
                        <li>
                            <label for="title">Film Tür</label>
                            <div class="form-content">
                                <input type="checkbox" name="movie_action" value="1"> Aksiyon <br>
                                <input type="checkbox" name="movie_science_fiction" value="1"> Bilim Kurgu <br>
                                <input type="checkbox" name="movie_adventure" value="1"> Macera <br>
                                <input type="checkbox" name="movie_animation" value="1"> Animasyon <br>
                                <input type="checkbox" name="movie_fantastic" value="1"> Fantastik <br>
                            </div>
                        </li>
                        <li>
                            <label for="title">Filmi Ekleyen</label>
                            <div class="form-content">
                                <input type="text" id="title" name="movie_add_user">
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
    <div class="box-container container-50">
        <div class="box" id="div-3">
            <h3>
                Film İçeriğini Bulma
            </h3>
            <div class="box-content">
                <form action="" method="POST" class="form label">
                    <ul>
                        <li>
                            <label for="title">Film Poster Url Ara</label>
                            <div class="form-content">
                                <input type="text" id="searchMovie" name="search_name" value="<?php if (isset($search_name)) echo $search_name ?>">
                            </div>
                        </li>
                        <li class="submit">
                            <button name="search" value="search" type="submit">Ara</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="message success" style="display: inline-block; margin-bottom: 1rem;">Aranan filmin sonuçları burada listelenecektir.</div>
    </div>
</div>

<div class="movies"></div>
<?php require admin_view('static/footer'); ?>

<?php if (isset($search_name)) : ?>
    <script>
        fetch(`https://imdb8.p.rapidapi.com/auto-complete?q=<?= $search_name ?>`, {
                method: "GET",
                headers: {
                    "x-rapidapi-host": "imdb8.p.rapidapi.com",
                    "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
                },
            })
            .then((response) => response.json())
            .then((data) => {
                const list = data.d;
                list.map((item) => {
                    const name = item.l;
                    const poster = item.i.imageUrl;
                    const movie = `<li><h2>${name}</h2><img width="150" src="${poster}"><textarea>${poster}</textarea></li>`;
                    document.querySelector(".movies").innerHTML += movie;
                });
            })
            .catch((err) => {
                console.log(err);
            });
    </script>
<?php endif; ?>

<script>
    document.title = "Film Ayarları | Movie Jump Admin";
</script>