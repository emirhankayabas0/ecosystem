<?php require view('static/header') ?>
<main class="accountName">
    <div class="header">
        <div class="container">
            <span class="icon" onclick="back()"><?= backArrowLeft(24) ?></span>
            <h2>Doğum günü</h2>
        </div>
    </div>
    <div class="content container">
        <h4 class="title">
            Doğum gününüz <?= Logo ?> hizmetlerinde hesap güvenliği ve kişiselleştirme için kullanılabilir. Bu <?= Logo ?> Hesabı bir işletme veya kuruluş içinse hesabı yöneten kişinin doğum tarihini kullanın.
        </h4>
        <div class="changeName">
            <form action="" class="chanUserName" method="POST">
                <p class="text">DOĞUM GÜNÜ DEĞİŞTİR</p>
                <?php if (isset($error)) : ?>
                    <div class="error"><?= $error ?></div>
                <?php endif; ?>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="birthdayDay" name="birthdayDay" aria-label="day">
                                <?= numbers(1, 31) ?>
                            </select>
                            <label for="birthdayDay">Gün</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="birthdayMoon" name="birthdayMoon" aria-label="moon">
                                <option value="Ocak">Ocak</option>
                                <option value="Şubat">Şubat</option>
                                <option value="Mart">Mart</option>
                                <option value="Nisan">Nisan</option>
                                <option value="Mayıs">Mayıs</option>
                                <option value="Haziran">Haziran</option>
                                <option value="Temmuz">Temmuz</option>
                                <option value="Ağustos">Ağustos</option>
                                <option value="Eylül">Eylül</option>
                                <option value="Ekim">Ekim</option>
                                <option value="Kasım">Kasım</option>
                                <option value="Aralık">Aralık</option>
                            </select>
                            <label for="birthdayMoon">Ay</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="birthdayYear" name="birthdayYear" aria-label="year">
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                            </select>
                            <label for="birthdayYear">Yıl</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="submitChangeName" value="1">
                <div class="info">
                    <h6 class="title">Doğum tarihinizi kimlerin görebileceğini seçin</h6>
                    <div class="infoMore">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link secret active" id="pills-secret-tab" data-bs-toggle="pill" data-bs-target="#pills-secret" type="button" role="tab" aria-controls="pills-secret" aria-selected="true"><span><?= lock(20) ?></span>Yalnızca siz</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="false"><span><?= modalPeople(28) ?></span>Herkes</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-secret" role="tabpanel" aria-labelledby="pills-secret-tab">
                                <div class="d-flex">
                                    <div class="icon"><?= modalPeople(28) ?></div>
                                    <p>Bu bilgi gizlidir. Yalnızca siz görebilirsiniz.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                <div class="d-flex">
                                    <div class="icon"><?= modalPeople(28) ?></div>
                                    <p>Sizinle iletişim kuran herkes bu bilgileri görebilir veya Google hizmetlerinde oluşturduğunuz içeriği görüntüleyebilir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit">
                    <button type="button" onclick="back()">İptal</button>
                    <button type="submit" class="btn button">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php require view('static/footer') ?>

<script>
    document.querySelector("header.header nav.nav .center").remove();
    document.querySelector("header.header nav.nav .end .searchToggleButton").remove();
    document.querySelector("header.header").style.border = "none";
</script>
<?php if (session("success")) : ?>
    <div class="alert-success">
        <span><?php echo session("success") ?></span>
        <button class="close" id="closeAlert"><?= close(24) ?></button>
    </div>
    <?php unset($_SESSION["success"]); ?>
<?php endif; ?>