<?php require view('static/header') ?>

<main class="verification">
    <div class="verificationArea">
        <div class="verificationContainer container verification">
            <div class="spinner-border text-dark" id="verificationSpinner" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="row" id="verificationRow" style="min-height: 414px;">
                <div class="col-md-6">
                    <div class="authContent d-flex flex-column justify-content-center" style="height: 100%;">
                        <h1 id="verificationTitle">Hesabınızı doğrulamak için tıklayın</h1>
                        <a href="#" class="btn button mt-3" id="verify">Doğrula</a>
                    </div>
                </div>
                <div class="col-md-6 hide-768px">
                    <div class="accountImage">
                        <figure>
                            <img src="<?= public_url("images/confirmation.svg") ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require view('static/footer') ?>