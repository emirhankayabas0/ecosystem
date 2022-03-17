<?php require view('static/header') ?>

<main class="auth">
    <div class="authArea">
        <div class="authContainer container login">
            <div class="row">
                <div class="col-md-6">
                    <div class="authHeader">
                        <div class="d-flex align-items-center">
                            <div id="logo" title="<?= Logo ?>">
                                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_n5icqxkw.json" class="avatarAnimation" speed="0.45" autoplay></lottie-player>
                            </div>
                            <div class="d-flex flex-column">
                                <div id="headingText">Oturum aç</div>
                                <div id="headingSubtext"><?php echo appInformation(get("service")) ?> devam et</div>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST" class="authForm" id="authLoginForm" name="authLoginForm" autocomplete="off">
                        <div class="authContent">
                            <div class="error" id="error"></div>
                            <?php if (isset($error)) : ?><div class="error" style="display: block;"><?= $error ?></div><?php endif; ?>
                            <div class="row g-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="loginUsername" name="loginUsername" placeholder="name@example.com" value="<?php echo post("loginUsername") ? post("loginUsername") : "" ?>">
                                    <label for="loginUsername">E-posta</label>
                                    <small id="domainSuffix">emirhankayabas.com</small>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
                                        <label for="loginPassword">Şifre</label>
                                    </div>
                                </div>
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
                                    <a href="<?= site_url("signup?service=" . get("service") . "&continue=" . get("continue") . "&hl=" . get("hl")) ?>">
                                        Hesap oluşturun
                                    </a>
                                </div>
                                <div class="formSubmit">
                                    <input type="hidden" value="1" name="submit">
                                    <button type="submit" id="formSubmitButton" class="btn button">Oturum açın</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 hide-768px">
                    <div class="accountImage">
                        <figure style="padding: 1rem;">
                            <img src="<?= public_url("images/loginImage.svg") ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require view('static/footer') ?>