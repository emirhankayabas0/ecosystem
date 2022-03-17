<?php

if (post("changeImageSubmit")) {
    $image = new \Verot\Upload\Upload($_FILES['newUserImage']);
    $lastName = date("Y") .  "-" . random_string();
    if ($image->uploaded) {
        $image->file_new_name_body = '' . $lastName;
        //$image->file_max_size = '5120';
        $image->allowed = array('image/*');
        $image->Process("../Kayabas/static/images/userAvatar");
        if ($image->processed) {
            $path = "http://localhost/Kayabas/static/images/userAvatar/" . $image->file_dst_name;
            $query = $db->update('users')
                ->where('user_id', session("user_id"))
                ->set([
                    'user_image' => $path
                ]);
            if ($query) {
                $_SESSION["array"][session("user_id")]["user_image"] = $path;
                $_SESSION["success"] = "Resminiz güncellenmiştir.";
                header("Refresh:2");
            }
        } else {
            echo "Bir hata oluştu.";
        }
    }
}

if (post("feedbackSubmit")) {
    $feedback_name = $user["user_name"] . " " . $user["user_surname"];
    $feedback_email = $user["user_email"];
    $feedback_message = post("feedback_message");

    if (!$feedback_message) {
        $_SESSION["success"] = "Açıklama gereklidir.";
    } else {
        $query = $db->insert('feedbacks')
            ->set(array(
                'feedback_name' => $feedback_name,
                'feedback_email' => $feedback_email,
                'feedback_message' => $feedback_message
            ));
        if ($query) {
            $_SESSION["success"] = "Geri bildiriminizi aldık.";
        } else {
            $_SESSION["success"] = "Bir hata oldu!";
        }
    }
}
?>

<?php if (session("success")) : ?>
    <div class="alert-success">
        <span><?php echo session("success") ?></span>
        <button class="close" id="closeAlert"><?= close(24) ?></button>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<article class="modalContainer">
    <div class="modal fade changeUserImage" id="changeUserImage" tabindex="-1" aria-labelledby="changeUserImageLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h5>Profil resmi</h5>
                    </div>
                    <div class="modal-close">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="changeUserImage" enctype="multipart/form-data">
                        <div class="information">
                            <p class="informationText">
                                Resim kullanmanız diğer kişilerin sizi tanımalarına yardımcı olur ve hesabınızda oturum açtığınızı anlamanızı sağlar.
                            </p>
                            <div class="placeUse">
                                <span><?= modalPeople(30) ?></span>
                                <p><?= Logo ?> hizmetleri genelinde görünür.</p>
                            </div>
                        </div>
                        <div class="divrider"></div>
                        <div class="changeUserImage">
                            <input type="file" id="newUserImage" name="newUserImage">
                            <label class="userImage" for="newUserImage">
                                <img src="<?= session("array")[session("user_id")]["user_image"] ?>" alt="">
                                <span><?= changeAvatar(24) ?></span>
                            </label>
                        </div>
                        <div class="submit">
                            <input type="hidden" name="changeImageSubmit" value="1">
                            <button type="submit" class="btn"><?= pen(20) ?>Değiştir</button>
                            <button type="button" disabled class="btn"><?= trash(20) ?>Kaldır</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</article>

<article class="feedbackModal">
    <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="helpModalLabel">Geri bildirim gönder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <textarea name="feedback_message" placeholder="Geri bildiriminizi almayı çok isteriz ancak hassas bilgiler paylaşmamaya dikkat edin. Sorularınız veya hukuki endişeleriniz varsa yardım almayı veya destek ekibiyle iletişime geçmeyi deneyin." id="" cols="30" rows="10"></textarea>
                        <input type="hidden" value="1" name="feedbackSubmit">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" onclick="closeScreenShot()" id="ScreenShotLabel" checked>
                            <label class="form-check-label" for="ScreenShotLabel">
                                Ekran görüntüsü ekle
                            </label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn button-line" data-bs-dismiss="modal">İptal</button>
                            <button type="submit" class="btn button">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</article>

<?php
$articles = [
    'email_information' => [
        'title' => 'Hesabınıza ait e-posta adresini değiştirme',
        'link' => '#'
    ],
    'phone_information' => [
        'title' => 'Hesabınızdaki telefon numarasını ve kullanım biçimini değiştirme',
        'link' => '#'
    ],
    'basic_information' => [
        'title' => Logo . ' Hesabı resminizi, adınızı ve diğer bilgilerinizi değiştirme',
        'link' => '#'
    ],
    'account_recovery' => [
        'title' => Logo . " Hesabınızı kurtarma",
        'link' => '#'
    ],
];
?>
<article class="helpOffcanvas">
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="helpBar" aria-labelledby="helpBarLabel">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="offcanvas-content">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="helpBarLabel">Yardım</h5>
                <span class="icon" id="helpOffcanvasCloseButton"><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></span>
            </div>
            <div class="offcanvas-body">
                <div class="articles" id="article">
                    <div class="title">
                        <h5>Kişisel bilgi makaleleri</h5>
                    </div>
                    <?php foreach ($articles as $key => $article) : ?>
                        <a href="<?= $article["link"] ?>" class="article" id="article">
                            <div class="icon"><?= article(24) ?></div>
                            <div class="title <?= $key ?>"><?= $article["title"] ?></div>
                            <div class="link-icon"><?= openNew(24) ?></div>
                        </a>
                    <?php endforeach; ?>
                    <a href="support.***/accounts?hl=tr" class="goSupport">Yardım merkezini ziyaret edin</a>
                </div>
                <div class="feedback">
                    <div class="title">
                        <h5>Geri bildirim paylaşın</h5>
                    </div>
                    <div class="problem-statement field" data-bs-toggle="modal" data-bs-target="#helpModal">
                        <div class="images">
                            <figure>
                                <img class="image" src="<?= public_url("images/support_report_an_issue_48x48.png") ?>" alt="">
                            </figure>
                        </div>
                        <div class="d-flex">
                            <h5 class="title">Sorun bildir</h5>
                            <p class="explanation">Bir şeyler gerektiği gibi çalışmıyorsa bize bildirin</p>
                        </div>
                        <div class="icon"><?= openNew(24) ?></div>
                    </div>
                    <div class="proposal field" data-bs-toggle="modal" data-bs-target="#helpModal">
                        <div class="images">
                            <figure>
                                <img class="image" src="<?= public_url("images/support_make_a_suggestion_48x48.png") ?>" alt="">
                            </figure>
                        </div>
                        <div class="d-flex">
                            <h5 class="title">Öneride bulun</h5>
                            <p class="explanation"><?= Logo ?> hizmetlerini iyileştirmeye yardımcı olun</p>
                        </div>
                        <div class="icon"><?= openNew(24) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<script>
    const closeAlert = document.getElementById("closeAlert");
    const alertSuccess = document.querySelector(".alert-success");
    const alertError = document.querySelector(".alert-error");

    closeAlert.addEventListener("click", function() {
        alertSuccess.classList.add("remove");
    });

    function zoomUserImage() {
        document.querySelector(".modalZoomUserImage").classList.add("show");
        document.querySelector("body").style.overflow = "hidden";
    }

    function zoomUserImageClose() {
        document.querySelector(".modalZoomUserImage").classList.remove("show");
        document.querySelector("body").style.overflow = "auto";
    }

    function closeScreenShot() {
        document.getElementById("feedback_image").classList.toggle("hide");
    }
</script>