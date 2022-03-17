<?php require admin_view('static/header'); ?>

<div class="box-">
    <h1>
        Ayarlar
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-">
    <div class="box-container container-50">
        <form action="" method="POST" class="form label">
            <!-- Genel Ayarlar -->
            <div class="box" id="div-3">
                <h3>
                    Genel Ayarlar
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label>Site Title</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[title]" value="<?= setting('title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Description</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[description]" value="<?= setting('description') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Keywords</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[keywords]" value="<?= setting('keywords') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Theme</label>
                            <div class="form-content">
                                <select name="settings[theme]">
                                    <option disabled>Tema Seçiniz</option>
                                    <?php foreach ($themes as $theme) : ?>
                                        <option <?= setting('theme') == $theme ? 'selected' : null; ?> value="<?= $theme ?>"><?= $theme ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bakım Modu Ayarları -->
            <div class="box" id="div-3">
                <h3>
                    Bakım Modu Ayarları
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label>Site Maintenance Mode</label>
                            <div class="form-content">
                                <select name="settings[maintenance_mode]">
                                    <option value="" disabled>Mod Seçiniz</option>
                                    <option <?= setting('maintenance_mode') == 1 ? 'selected' : null ?> value="1">Open</option>
                                    <option <?= setting('maintenance_mode') == 2 ? 'selected' : null ?> value="2">Closed</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Maintenance Mode Title</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[maintenance_mode_title]" value="<?= setting('maintenance_mode_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Maintenance Mode Descrip..</label>
                            <div class="form-content">
                                <textarea id="title" name="settings[maintenance_mode_description]" cols="30" rows="5"><?= setting('maintenance_mode_description') ?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- SMTP Ayarları -->
            <div class="box" id="div-3">
                <h3>
                    SMTP Ayarları
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label>SMTP Host</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[smtp_host]" value="<?= setting('smtp_host') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP E-posta Adresi</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[smtp_email]" value="<?= setting('smtp_email') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Gönderen <br> E-posta Adresi</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[smtp_send_email]" value="<?= setting('smtp_send_email') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Gönderen Kişi</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[smtp_send_name]" value="<?= setting('smtp_send_name') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Şife</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[smtp_password]" value="<?= setting('smtp_password') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Secure</label>
                            <div class="form-content">
                                <select name="settings[smtp_secure]">
                                    <option <?= setting('smtp_secure') == '' ? 'selected' : null ?> disabled>Seçiniz</option>
                                    <option <?= setting('smtp_secure') == 'ssl' ? 'selected' : null ?> value="ssl">SSL</option>
                                    <option <?= setting('smtp_secure') == 'tls' ? 'selected' : null ?> value="tls">TLS</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>SMTP Port</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[smtp_port]" value="<?= setting('smtp_port') ?>">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tema Ayarlar -->
            <div class="box" id="div-3">
                <h3>
                    Tema Ayarları
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label>Site Adı</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[site_title]" value="<?= setting('site_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Font</label>
                            <div class="form-content">
                                <select name="settings[font]">
                                    <option disabled>Font Seçiniz</option>
                                    <?php foreach ($fonts as $font) : ?>
                                        <option <?= setting('font') == $font ? 'selected' : null; ?> value="<?= $font ?>"><?= $font ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Arama Kutsu Placeholder</label>
                            <div class="form-content">
                                <input type="text" id="title" name="settings[input_search_placeholder]" value="<?= setting('input_search_placeholder') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Footer Yazısı</label>
                            <div class="form-content">
                                <textarea id="title" name="settings[footer_description]" cols="30" rows="5"><?= setting('footer_description') ?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- İletişim Sayfası Ayarlar -->
            <div class="box" id="div-3">
                <h3>
                    İletişim Sayfası Ayarları
                </h3>
                <div class="box-content">
                    <ul>
                        <li>
                            <label>Hukuksal Yazı</label>
                            <div class="form-content">
                                <textarea id="title" name="settings[legel_description]" cols="30" rows="5"><?= setting('legel_description') ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Hukuksal Yazı İkinci</label>
                            <div class="form-content">
                                <textarea id="title" name="settings[legel_description_more]" cols="30" rows="5"><?= setting('legel_description_more') ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Hukuksal İngilizce</label>
                            <div class="form-content">
                                <textarea id="title" name="settings[legel_description_english]" cols="30" rows="5"><?= setting('legel_description_english') ?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <ul>
                <li class="submit">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit">Ayarları Kaydet</button>
                </li>
            </ul>
        </form>
    </div>
</div>

<?php require admin_view('static/footer'); ?>

<script>
    document.title = "Ayarlar | Emirhan Kayabaş Admin";
</script>