<?php require view('static/header') ?>
<main>
    <div class="container mt-5 mb-3">
        <div class="row contact">
            <div class="col-md-6">
                <h1 class="title mb-4">Hukuksal</h1>
                <div class="legal"><?= site_url() ?> <?= setting('legel_description') ?></div>
                <h1 class="title mb-4">İlgili Yasa:</h1>
                <div class="legal"><?= setting('legel_description_more') ?></div>
                <h1 class="title mb-4">English translation:</h1>
                <div class="legal english"><?= setting('legel_description_english') ?></div>
            </div>
            <div class="col-md-6">
                <div class="contact-content">
                    <h1 class="title mb-4">İletişim Formu (Contact Form):</h1>
                    <div class="error" id="contact-error-message" style="display: none;"></div>
                    <div class="success" id="contact-success-message" style="display: none;"></div>
                    <form action="" method="" id="contact-form" onsubmit="return false" autocomplete="off">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="contact_name" placeholder="name@example.com">
                            <label for="name">Ad (Name)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="contact_email" placeholder="name@example.com">
                            <label for="email">E-posta adresi (Email address)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="contact_subject" placeholder="name@example.com">
                            <label for="name">Konu (Subject)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="contact_message" style="height: 200px; max-height: 250px;"></textarea>
                            <label for="message">Mesaj (Message)</label>
                        </div>
                        <div class="submit">
                            <button name="submit" onclick="contact('#contact-form')" value="1" type="submit">Gönder (Send)</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require view('static/footer') ?>