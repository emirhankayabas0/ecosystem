<?php require view('static/header') ?>
<main class="accountName">
    <div class="header">
        <div class="container">
            <span class="icon" onclick="back()"><?= backArrowLeft(24) ?></span>
            <h2>Telefon numarası</h2>
        </div>
    </div>
    <div class="content container">
        <h4 class="title">
            <?php if ($user["user_phone"] == "Belirtilmemiş") : ?>
                Hesap kurtarma işlemi için telefon numaranızı kullanın. Bu şekilde güvenlik uyarılarını alabilir, şifrenizi unutursanız sıfırlayabilirsiniz.
            <?php else : ?>
                Aşağıdaki telefon numarası Google Hesabınıza eklendi
            <?php endif; ?>
        </h4>
        <?php if ($user["user_phone"] == "Belirtilmemiş") : ?>
            <div class="changeName">
                <form action="" class="chanUserName" method="POST">
                    <p class="text">TELEFON NUMARASI EKLE</p>
                    <?php if (isset($error)) : ?>
                        <div class="error"><?= $error ?></div>
                    <?php endif; ?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="userPhone" name="userPhone" placeholder="<?= $user["user_phone"] ?>" value="<?= post("userPhone") ? post("userPhone") : $user["user_phone"] ?>">
                        <label for="userPhone">Telefon numarası</label>
                    </div>
                    <input type="hidden" name="submitChangePhone" value="1">
                    <div class="submit">
                        <button type="button" onclick="back()">İptal</button>
                        <button type="submit" class="btn button">Kaydet</button>
                    </div>
                </form>
            </div>
        <?php else : ?>
            <div class="changeName">
                <div class="phone">
                    <div class="flag"><img src="<?= public_url("images/turkey_flag.png") ?>" class="images" alt="flag_turkey"></div>
                    <div class="phone-number">
                        <p id="copyItem"><?= $user["user_phone"] ?></p>
                        <form action="" method="POST"><input type="hidden" name="removePhoneNumber" value="1"><button type="submit"><?= trash(24) ?></button></form>
                    </div>
                    <button type="button" class="confirmate-button">Doğrula</button>
                </div>
                <div class="info">
                    <div class="infoMore">
                        <div class="d-flex">
                            <div class="icon"><?= modalPeople(28) ?></div>
                            <p>Burada listelenmeyen telefon numaralarını eklemiş olabilirsiniz. Google hizmetlerinden birine eklediğiniz telefon numarası burada listelenmiyorsa, numaranın nasıl kullanıldığını kontrol etmek için ilgili hizmete gidin.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php require view('static/footer') ?>

<script>
    document.querySelector("header.header nav.nav .center").remove();
    document.querySelector("header.header nav.nav .end .searchToggleButton").remove();
    document.querySelector("header.header").style.border = "none";

    document.getElementById("userPhone").addEventListener("input", function(e) {
        var x = e.target.value
            .replace(/\D/g, "")
            .match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ?
            x[1] :
            x[1] + " " + x[2] + (x[3] ? " " + x[3] : "");
    });
</script>
<?php if (session("success")) : ?>
    <div class="alert-success">
        <span><?php echo session("success") ?></span>
        <button class="close" id="closeAlert"><?= close(24) ?></button>
    </div>
    <?php unset($_SESSION["success"]); ?>
<?php endif; ?>