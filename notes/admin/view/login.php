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
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 24px;
        padding-left: 8px;
        position: relative;
        vertical-align: middle;
        margin-bottom: 0;
        -webkit-transition: 275ms all;
        transition: 275ms all;
    }

    .login-logo a {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
    }

    .login-logo .animate {
        background-color: #000;
        width: 100px;
        height: 50px;
    }
</style>
<?php require admin_view('static/header'); ?>
<!--login screen-->
<div class="login-screen">
    <div class="area">
        <!--login logo-->
        <div class="login-logo">
            <a href="#">
                <h1>Kayabaş Admin Giriş</h1>
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
    document.title = "Giriş Yap | Emirhan Kayabaş Admin";
</script>