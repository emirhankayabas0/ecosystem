<!-- JS -->
<script src="<?= staticFile("js", "bootstrap/jquery-3.6.0.min.js") ?>"></script>
<script src="<?= staticFile("js", "bootstrap/popper.min.js") ?>"></script>
<script src="<?= staticFile("js", "bootstrap/bootstrap.min.js") ?>"></script>
<script src="<?= public_url('js/index.js') ?>"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')),
        tooltipList = tooltipTriggerList.map(function(t) {
            return new bootstrap.Tooltip(t)
        });
    const accountInput = document.getElementById("searchInput"),
        resultAccount = document.getElementById("result");
    accountInput.addEventListener("focus", () => {
        resultAccount.style.opacity = "1", resultAccount.style.visibility = "visible", accountInput.style.borderRadius = "8px 8px 0 0"
    }), accountInput.addEventListener("blur", () => {
        resultAccount.style.opacity = "0", resultAccount.style.visibility = "hidden", accountInput.style.borderRadius = "8px"
    });
    let option = ["Profil resmi değiştirme", "Ad", "Doğum günü", "Cinsiyet", "Şifre", "E-posta", "Telefon"];
    for (let t = 0; t < option.length; t++) {
        const e = option[t];
        document.querySelector("header.header nav.nav .center #result .list").innerHTML += `\n <li class='list-item'><div class="image"><img src="http://localhost/account/public/thema-v1/images/search_general.png" alt=""></div>${e}</li>`
    }
</script>
<script>
    const searchToggleButton = document.getElementById("searchToggleButton");
    let headerStart = document.querySelector("header.header nav.nav .start"),
        headerCenter = document.querySelector("header.header nav.nav .center"),
        headerEnd = document.querySelector("header.header nav.nav .end");

    searchToggleButton.addEventListener("click", () => {
        headerStart.classList.toggle("d-none")
        headerCenter.classList.toggle("hide-768px")
    })
</script>

<?php require view('static/modal');
require view('static/cookie') ?>

</body>

</html>