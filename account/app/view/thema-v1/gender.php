<?php require view('static/header') ?>
<main class="accountName">
    <div class="header">
        <div class="container">
            <span class="icon" onclick="back()"><?= backArrowLeft(24) ?></span>
            <h2>Cinsiyet</h2>
        </div>
    </div>
    <div class="content container">
        <h4 class="title">
            Cinsiyetiniz, size nasıl hitap ettiğimiz de dahil olmak üzere <?= Logo ?> hizmetleri genelinde kişiselleştirme amaçlı kullanılabilir.
        </h4>
        <div class="changeName">
            <form action="" class="chanUserName" method="POST">
                <p class="text">CİNSİYET DEĞİŞTİR</p>
                <?php if (isset($error)) : ?>
                    <div class="error"><?= $error ?></div>
                <?php endif; ?>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="gender" name="gender" aria-label="gender">
                                <option <?php if ($user["user_gender"] == "Kadın") echo "selected" ?> value="Kadın">Kadın</option>
                                <option <?php if ($user["user_gender"] == "Erkek") echo "selected" ?> value="Erkek">Erkek</option>
                                <option <?php if ($user["user_gender"] == "Belirtmemeyi tercih ediyorum") echo "selected" ?> value="Belirtmemeyi tercih ediyorum">Belirtmemeyi tercih ediyorum</option>
                            </select>
                            <label for="birthdayDay">Cinsiyet</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="submitChangeName" value="1">
                <div class="info">
                    <h6 class="title">Cinsiyetinizi kimlerin görebileceğini seçin</h6>
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