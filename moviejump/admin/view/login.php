<style>
    .login-screen {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 0 !important;
    }

    .login-logo h1 {
        font-family: "Russo One", sans-serif;
        font-size: 24px;
        padding-left: 8px;
        position: relative;
        vertical-align: middle;
        margin-bottom: 0;
        font-weight: 900;
        -webkit-transition: 275ms all;
        transition: 275ms all;
    }

    .login-logo a {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-logo .animate {
        background-color: #000;
        width: 100px;
        height: 50px;
    }
</style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<?php require admin_view('static/header'); ?>
<!--login screen-->
<div class="login-screen">
    <div class="area">
        <!--login logo-->
        <div class="login-logo">
            <a href="#">
                <lottie-player class="animate" src="https://assets3.lottiefiles.com/packages/lf20_hfsax4wl.json" speed=".75" autoplay></lottie-player>
                <h1>Jump</h1>
            </a>
        </div>
        <?php if (isset($error)) : ?>
            <div class="message error box-">
                <?= $error; ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <ul>
                <li>
                    <label for="username">Kullanıcı adı</label>
                    <input type="text" id="username" name="user_name">
                </li>
                <li>
                    <label for="password">Şifre</label>
                    <input type="password" id="password" name="user_password">
                </li>
                <li>
                    <button name="submit" value="1" type="submit">Giriş Yap</button>
                </li>
            </ul>
        </form>
    </div>
</div>

<?php require admin_view('static/footer'); ?>

<script>
    document.title = "Giriş Yap | Movie Jump Admin";
</script>