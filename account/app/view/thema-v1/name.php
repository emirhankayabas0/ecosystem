<?php require view('static/header') ?>
<main class="accountName">
    <div class="header">
        <div class="container">
            <span class="icon" onclick="back()"><?= backArrowLeft(24) ?></span>
            <h2>Ad</h2>
        </div>
    </div>
    <div class="content container">
        <h4 class="title">
            Adınızda yapacağınız değişiklikler <?= Logo ?> Hesabınız genelinde geçerli olacaktır.
        </h4>
        <div class="changeName">
            <form action="" class="chanUserName" method="POST">
                <p class="text">ADI DEĞİŞTİR</p>
                <?php if (isset($error)) : ?>
                    <div class="error"><?= $error ?></div>
                <?php endif; ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="firstNameChange" name="firstNameChange" placeholder="<?= $user["user_name"] ?>" value="<?= post("firstNameChange") ? post("firstNameChange") : $user["user_name"] ?>">
                    <label for="firstNameChange">Ad</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="lastNameChange" name="lastNameChange" placeholder="<?= $user["user_surname"] ?>" value="<?= post("lastNameChange") ? post("lastNameChange") : $user["user_surname"] ?>">
                    <label for="lastNameChange">Soyad</label>
                </div>
                <input type="hidden" name="submitChangeName" value="1">
                <div class="info">
                    <h6 class="title">Adınızı kimler görebilir?</h6>
                    <div class="infoMore">
                        <div class="icon"><?= modalPeople(28) ?></div>
                        Sizinle iletişim kuran herkes bu bilgileri görebilir veya <?= Logo ?> hizmetlerinde oluşturduğunuz içeriği görüntüleyebilir.
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