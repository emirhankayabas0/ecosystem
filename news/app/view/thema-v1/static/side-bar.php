<?php


$item = explode("/", $_SERVER["REQUEST_URI"]);
$active = end($item);

?>
<script>
    let page = "<?= $active ?>"
</script>
<div class="menu-content">
    <div class="offcanvas offcanvas-start show" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <button type="button" id="offcanvasClose" class="btn-close text-reset btn-close-white show-1024" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="offcanvas-body">
            <ul class="list">
                <li class="list-item general <?php if ("" == $active) {
                                                    echo "active";
                                                } ?>"><a data-language="general" href="<?= site_url() ?>"><?= general(30) ?></a></li>
                <li class="list-item business <?php if ("business" == $active) {
                                                    echo "active";
                                                } ?>"><a data-language="business" href="<?= site_url("business") ?>"><?= business(28) ?></a></li>
                <li class="list-item science <?php if ("science" == $active) {
                                                    echo "active";
                                                } ?>"><a data-language="science" href="<?= site_url("science") ?>"><?= science(24) ?></a></li>
                <li class="list-item health <?php if ("health" == $active) {
                                                echo "active";
                                            } ?>"><a data-language="health" href="health"><?= health(28) ?></a></li>
                <li class="list-item sports <?php if ("sports" == $active) {
                                                echo "active";
                                            } ?>"><a data-language="sports" href="sports"><?= sports(28) ?></a></li>
                <li class="list-item entertainment <?php if ("entertainment" == $active) {
                                                        echo "active";
                                                    } ?>"><a data-language="entertainment" href="entertainment"><?= entertainment(28) ?></a></li>
                <div style="margin-left: 5%; width: 90%;" class="dropdown-divider"></div>
                <li class="list-item modal-list" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-language="region"></li><span data-language="language" class="area"></span>
                <li class="list-item modal-list" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Settings")
                        } else {
                            document.write("Ayarlar")
                        }
                    </script>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade show" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel" data-language="modal-title"></h5>
                <button type="button" class="btn-close me-2 btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <select class="select-search" id="select-lan">
                    <option value="tr" data-language="">Türkçe (Turkish)</option>
                    <option value="us" data-language="">İngilizce (English)</option>
                    <option value="de" data-language="">Almanca (German)</option>
                    <option value="fr" data-language="">Fransızca (French)</option>
                    <option value="ru" data-language="">Rusça (Russian)</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Cancel")
                        } else {
                            document.write("İptal")
                        }
                    </script>
                </button>
                <button type="button" class="btn" id="update">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Update")
                        } else {
                            document.write("Güncelle")
                        }
                    </script>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="height: 30px; padding-top: 0;">
                <button type="button" class="btn-close me-2 mt-3 btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="images">
                    <img src="<?= public_url("images/setting.webp") ?>" alt="">
                </div>
                <h1 class="title">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Get the most out of News <br> by signing in")
                        } else {
                            document.write("Oturum açarak Haberler'den en iyi şekilde <br> yararlanın")
                        }
                    </script>
                </h1>
                <ul class="list">
                    <li class="list-item">
                        <script>
                            if (localStorage.getItem("key") == "us") {
                                document.write("Follow sources and topics to see more news")
                            } else {
                                document.write("Daha fazla haber görmek için kaynakları ve konuları takip edin")
                            }
                        </script>
                    </li>
                    <li class="list-item">
                        <script>
                            if (localStorage.getItem("key") == "us") {
                                document.write("See news related to your interests in the For You section")
                            } else {
                                document.write("Sizin İçin bölümünde ilgi alanlarınızla alakalı haberleri görün")
                            }
                        </script>
                    </li>
                    <li class="list-item">
                        <script>
                            if (localStorage.getItem("key") == "us") {
                                document.write("Get local news about the places you care about")
                            } else {
                                document.write("Önem verdiğiniz yerlerle ilgili yerel haberleri alın")
                            }
                        </script>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("No, thanks")
                        } else {
                            document.write("Hayır, teşekkürler")
                        }
                    </script>
                </button>
                <button type="button" class="btn" id="update">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("<a href='https://mail.emirhanturizm.online/accounts/sign-in'>Sign in</a>")
                        } else {
                            document.write("<a href='https://mail.emirhanturizm.online/accounts/sign-in'>Oturum aç</a>")
                        }
                    </script>
                </button>
            </div>
        </div>
    </div>
</div>