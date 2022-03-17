<?php require view('static/header') ?>
<main class="accountName">
    <div class="header">
        <div class="container">
            <span class="icon" onclick="back()"><?= backArrowLeft(24) ?></span>
            <h2>Şifre</h2>
        </div>
    </div>
    <div class="content container">

        <?php if (session("passwordVerification")) : ?>
            <h4 class="title">
                Güçlü bir şifre seçin ve bunu diğer hesaplarda kullanmayın. <br> <br>
                Şifrenizi değiştirmek, bazı istisnalar dışında cihazlarınızda oturumunuzu kapatır.
            </h4>
            <div class="changeName">
                <form action="" class="chanUserName" method="POST">
                    <p class="text">ŞİFRE DEĞİŞTİR</p>
                    <?php if (isset($error)) : ?>
                        <div class="error"><?= $error ?></div>
                    <?php endif; ?>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="••••••••">
                        <label for="newPassword">Yeni şifre</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="newPasswordConfirm" name="newPasswordConfirm" placeholder="••••••••">
                        <label for="newPasswordConfirm">Yeni şifreyi doğrulayın</label>
                    </div>
                    <input type="hidden" name="submitChangePassword" value="1">
                    <div class="info">
                        <h6 class="title">Şifre güvenliği:</h6>
                        <div class="infoMore">
                            <div class="d-flex">
                                <div class="icon"><?= modalPeople(28) ?></div>
                                En az 8 karakter kullanın. Başka sitede kullandığınız bir şifreyi veya evcil hayvanınızın adı gibi çok bariz bir kelimeyi kullanmayın.
                            </div>
                        </div>
                    </div>
                    <div class="submit">
                        <button type="button" onclick="back()">İptal</button>
                        <button type="submit" class="btn button">Kaydet</button>
                    </div>
                </form>
            </div>
        <?php else : ?>
            <div class="changeName">
                <form action="" class="chanUserName" method="POST">
                    <p class="text">Devam etmek için öncelikle kimliğinizi doğrulayın</p>
                    <?php if (isset($error)) : ?>
                        <div class="error"><?= $error ?></div>
                    <?php endif; ?>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="••••••••">
                        <label for="passwordConfirm">Şifre</label>
                    </div>
                    <input type="hidden" name="submitPasswordConfirm" value="1">
                    <div class="submit">
                        <button type="button" onclick="back()">İptal</button>
                        <button type="submit" class="btn button">İleri</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
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