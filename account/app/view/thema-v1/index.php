<?php require view('static/header') ?>

<main class="account mb-5">
    <div class="accountHeader">
        <div class="userImage">
            <div class="position-relative">
                <figure>
                    <img src="<?= $user["user_image"] ?>" class="image" alt="">
                </figure>
                <span class="changeAvatar" id="changeAvatar" data-bs-toggle="modal" data-bs-target="#changeUserImage"><?= changeAvatar(24) ?></span>
                <span class="zoomInAvatar" id="zoomInAvatar" onclick="zoomUserImage()"><?= zoomIn(26) ?></span>
            </div>
        </div>
        <div class="welcome">
            <h1 class="title">Hoş geldiniz <?= $user["user_name"] . " " .  $user["user_surname"] ?></h1>
        </div>
        <div class="accountMore">
            <p class="text"><?= Logo ?> en iyi şekilde yararlanmak için bilgi, gizlilik ve güvenliğinizi yönetin.</p>
        </div>
    </div>
    <div class="accountContent">
        <div class="accountContentHeader">
            <div class="explanation">
                <div class="start">
                    <h2 class="explanationTitle">
                        Kayabaş hizmetlerindeki profil bilgileriniz
                        <figure class="show-768px">
                            <img src="<?= public_url("images/profile_spot_visible_64x64.png") ?>" alt="">
                        </figure>
                    </h2>
                    <p class="explanationText">
                        Kişisel bilgileriniz ve bunları yönetme seçenekleri. İletişim ayrıntılarınız gibi bazı bilgilerinizi başkalarına görünür hale getirerek size ulaşmalarını kolaylaştırabilirsiniz. Ayrıca, profillerinizin bir özetini de görebilirsiniz.
                    </p>
                </div>
                <div class="end hide-768px">
                    <div class="images">
                        <img src="<?= public_url("images/profile_scene_visible.png") ?>" alt="" class="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="accountContentInfo">
            <div class="main">
                <div class="basic">
                    <div class="header">
                        <h2 class="title">Temel bilgiler</h2>
                        <p class="text">Bazı bilgiler, <?= Logo ?> hizmetlerini kullanan diğer kişiler tarafından görülebilir.</p>
                    </div>
                    <button type="button" class="user_image" data-bs-toggle="modal" data-bs-target="#changeUserImage">
                        <div class="d-flex align-items-center">
                            <div class="key">FOTOĞRAF</div>
                            <div class="value">Fotoğraf hesabınızı kişiselleştirmeye yardımcı olur</div>
                        </div>
                        <div class="image">
                            <figure>
                                <img src="<?= $user["user_image"] ?>" class="image" alt="">
                            </figure>
                            <span class="changeAvatar" id="changeAvatar"><?= changeAvatar(18) ?></span>
                        </div>
                    </button>
                    <a href="<?= site_url("name") ?>" class="user_name">
                        <div class="d-flex align-items-center">
                            <div class="key">AD</div>
                            <div class="value"><?= $user["user_name"] . " " . $user["user_surname"] ?></div>
                        </div>
                        <div class="icon"><?= arrowRight(24) ?></div>
                    </a>
                    <a href="<?= site_url("birthday") ?>" class="user_birthday">
                        <div class="d-flex align-items-center">
                            <div class="key">DOĞUM GÜNÜ</div>
                            <div class="value"><?= $user["user_birthday"] ?></div>
                        </div>
                        <div class="icon"><?= arrowRight(24) ?></div>
                    </a>
                    <a href="<?= site_url("gender") ?>" class="user_gender">
                        <div class="d-flex align-items-center">
                            <div class="key">CİNSİYET</div>
                            <div class="value"><?= $user["user_gender"] ?></div>
                        </div>
                        <div class="icon"><?= arrowRight(24) ?></div>
                    </a>
                </div>
                <div class="contact">
                    <div class="header mb-3">
                        <h2 class="title">İletişim bilgileri</h2>
                    </div>
                    <a href="<?= site_url("email") ?>" class="user_email">
                        <div class="d-flex align-items-center">
                            <div class="key">E-POSTA</div>
                            <div class="value"><?= $user["user_email"] ?></div>
                        </div>
                        <div class="icon"><?= arrowRight(24) ?></div>
                    </a>
                    <a href="<?= site_url("phone") ?>" class="user_phone">
                        <div class="d-flex align-items-center">
                            <div class="key">TELEFON</div>
                            <div class="value"><?= $user["user_phone"] ?></div>
                        </div>
                        <div class="icon"><?= arrowRight(24) ?></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="accountContentHeader">
            <div class="explanation">
                <div class="start">
                    <h2 class="explanationTitle">
                        Kayabaş hizmetleriyle ilgili diğer bilgileriniz ve tercihleriniz
                        <figure class="show-768px">
                            <img src="<?= public_url("images/profile_spot_preferences_64x64.png") ?>" alt="">
                        </figure>
                    </h2>
                    <p class="explanationText">
                        Kimliğinizi doğrulamak için kullanılan yöntemler ve internet ayarları.
                    </p>
                </div>
                <div class="end hide-768px">
                    <div class="images">
                        <img src="<?= public_url("images/profile_scene_preferences.png") ?>" alt="" class="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="accountContentInfo">
            <div class="main">
                <div class="contact">
                    <div class="header mb-3">
                        <h2 class="title">Şifre</h2>
                    </div>
                    <a href="<?= site_url("password") ?>" class="user_phone">
                        <div class="d-flex align-items-center">
                            <div class="key">ŞİFRE</div>
                            <div class="value">••••••••</div>
                        </div>
                        <div class="icon"><?= arrowRight(24) ?></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="w-full h-full p-4"></div>

<?php require view('static/footer') ?>

<script>
    document.onkeydown = function(e) {
        zoomUserImageClose();
    }
</script>