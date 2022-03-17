<?php require view('static/header') ?>

<main class="auth">
    <div class="authArea">
        <div class="authContainer container">
            <div class="row">
                <div class="col-md-6">
                    <div class="authHeader">
                        <div class="d-flex align-items-center">
                            <div id="logo" title="<?= Logo ?>">
                                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_n5icqxkw.json" class="avatarAnimation" speed="0.45" autoplay></lottie-player>
                            </div>
                            <div class="d-flex flex-column">
                                <div id="headingText">Hesabınızı oluşturun</div>
                                <div id="headingSubtext"><?php echo appInformation(get("service")) ?> devam et</div>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST" class="authForm" id="authRegisterForm" name="authRegisterForm" autocomplete="off">
                        <div class="authContent">
                            <div class="error" id="error"></div>
                            <?php if (isset($error)) : ?><div class="error" style="display: block;"><?= $error ?></div><?php endif; ?>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="registerFirstName" name="registerFirstName" placeholder="First Name" value="<?php echo post("registerFirstName") ? post("registerFirstName") : "" ?>">
                                        <label for="registerName">Ad</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="registerLastName" name="registerLastName" placeholder="Last Name" value="<?php echo post("registerLastName") ? post("registerLastName") : "" ?>">
                                        <label for="registerLastName">Soyad</label>
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="registerUsername" name="registerUsername" placeholder="name@example.com" value="<?php echo post("registerUsername") ? post("registerUsername") : "" ?>">
                                    <label for="registerUsername">Kullanıcı adı</label>
                                    <?php if (isset($proposalUsurname)) : ?>
                                        <div class="proposalUsurname">
                                            <span class='proposalUsurname'>Kullanılabilir: </span>
                                            <?php
                                            foreach ($proposalUsurname as $proposal) {
                                                echo "<span id='proposalUsurname'>" . $proposal . "</span>";
                                            }
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                    <small id="proposal">Harf, rakam ve nokta işaretini kullanabilirsiniz.</small>
                                    <small id="domainSuffix">emirhankayabas.com</small>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Password">
                                        <label for="registerPassword">Şifre</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="registerConfirmPassword" name="registerConfirmPassword" placeholder="Password Confirm">
                                        <label for="registerConfirmPassword">Onayla</label>
                                    </div>
                                </div>
                                <small id="proposal">8 veya daha fazla harf, rakam ve sembolü karışık olarak kullanın</small>
                            </div>
                        </div>
                        <div class="authFooter">
                            <div class="form-check">
                                <span><input type="checkbox" value="" id="showHidePassword"></span>
                                <label class="form-check-label" for="showHidePassword">
                                    Şifreyi göster
                                </label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="orLogin hide-425px">
                                    <a href="<?= site_url("signin?service=" . get("service") . "&continue=" . get("continue") . "&hl=" . get("hl")) ?>">
                                        Bunun yerine oturum aç
                                    </a>
                                </div>
                                <div class="formSubmit">
                                    <input type="hidden" value="1" name="submit">
                                    <button type="submit" id="formSubmitButton" class="btn button">Hesap oluştur</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 hide-768px">
                    <div class="accountImage">
                        <figure>
                            <img src="<?= public_url("images/registerImage.svg")?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require view('static/footer') ?>