<?php require view('static/header') ?>
<main class="accountName">
    <div class="header">
        <div class="container">
            <span class="icon" onclick="back()"><?= backArrowLeft(24) ?></span>
            <h2>E-posta</h2>
        </div>
    </div>
    <div class="content container">
        <h4 class="title">
            <?= Logo ?> Hesabınızla ilişkilendirilmiş e-posta adreslerini yönetin.
        </h4>
        <div class="changeEmail">
            <h3 class="title"><?= Logo ?> Hesabı e-posta adresi</h3>
            <p class="text"><?= Logo ?> Hesabınızı sizin ve diğer kullanıcıların tanıması için kullanılan adres. Bu adresi değiştiremezsiniz.</p>
            <div class="email"><?= $user["user_email"] ?></div>
        </div>
        <?php if (!session("sendRecoveryEmail")) : ?>
            <div class="changeName email">
                <form action="" class="chanUserName" method="POST">
                    <p class="text">KURTARMA E-POSTANIZ</p>
                    <?php if (isset($error)) : ?>
                        <div class="error"><?= $error ?></div>
                    <?php endif; ?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="userRecoveryEmail" name="userRecoveryEmail" placeholder="<?= $user["user_recovery_email"] ?>" value="<?= post("userRecoveryEmail") ? post("userRecoveryEmail") : $user["user_recovery_email"] ?>">
                        <label for="user_recovery_email">Kurtarma e-postası</label>
                    </div>
                    <input type="hidden" name="submitRecoveryEmail" value="1">
                    <div class="submit">
                        <button type="button" onclick="back()">İptal</button>
                        <button type="submit" class="btn button">Kaydet</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
        <?php if (session("sendRecoveryEmail")) : ?>
            <div class="changeName email mt-3">
                <form action="" class="chanUserName" method="POST">
                    <p class="text">KURTARMA E-POSTASI DOĞRULAMA</p>
                    <?php if (isset($error)) : ?>
                        <div class="error"><?= $error ?></div>
                    <?php endif; ?>
                    <div class="form-floating mb-3">
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="6" class="form-control" id="userRecoveryEmailConfirmation" name="userRecoveryEmailConfirmation" placeholder="1">
                        <label for="userRecoveryEmailConfirmation">Kurtarma e-postası kodu</label>
                    </div>
                    <input type="hidden" name="submitRecoveryEmailConfirmation" value="1">
                    <div class="submit">
                        <button type="submit" class="btn button">Kaydet</button>
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