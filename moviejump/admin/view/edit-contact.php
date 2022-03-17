<?php require admin_view('static/header'); ?>

<div class="box-">
    <h1>
        İletişim Mesajları (#<?= $id ?>)
    </h1>
</div>

<div class="clear" style="height: 10px;">
    <div class="box-container container-50">
        <?php if ($row['contact_read'] == 1) : ?>
            <div class="message success box-">
                <?= timeConvert($row['contact_date']) ?> gönderildi.
                <br>
                <?= timeConvert($row['contact_read_date']) ?> <strong><?= $row['user_name'] ?> </strong>tarafından okundu.
            </div>
        <?php endif; ?>
        <div class="box-">
            <form action="" method="POST" class="form label">
                <ul>
                    <li>
                        <label for="title">Gönderen</label>
                        <div class="form-content" style="margin-top: 12px;">
                            <?= $row['contact_name'] ?>
                        </div>
                    </li>
                    <li>
                        <label for="title">E-posta</label>
                        <div class="form-content" style="margin-top: 12px;">
                            <?= $row['contact_email'] ?>
                        </div>
                    </li>
                    <li>
                        <label for="title">Konu</label>
                        <div class="form-content" style="margin-top: 11px;">
                            <?= $row['contact_subject'] ?>
                        </div>
                    </li>
                    <li>
                        <label for="title">Mesaj</label>
                        <div class="form-content" style="margin-top: 12px;">
                            <?= nl2br($row['contact_message']) ?>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <div class="box-container container-50">
        <div class="box" id="div-1">
            <h3>
                Yanıtla
            </h3>
            <div class="box-content">
                <div class="message success box-" style="display: none; margin-left: 0;" id="send-mail-success"></div>
                <div class="message error box-" style="display: none; margin-left: 0;" id="send-mail-error"></div>
                <form action="" id="email-form" onsubmit="return false" class="form">
                    <input type="hidden" name="name" value="<?= $row['contact_name'] ?>">
                    <ul>
                        <li>
                            <input type="text" id="input" name="subject" value="RE: <?= $row['contact_subject'] ?>" placeholder="Mesaj Konusu">
                        </li>
                        <li>
                            <input type="email" id="input" name="email" value="<?= $row['contact_email'] ?>" placeholder="Mesaj Konusu">
                        </li>
                        <li>
                            <textarea name="message" id="" cols="30" rows="5" placeholder="Mesaj İçeriği"></textarea>
                        </li>
                        <li>
                            <button onclick="send_email('#email-form')" type="submit">Gönder</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require admin_view('static/footer'); ?>

<script>
    document.title = "İletişim Mesajları | Movie Jump Admin";
</script>