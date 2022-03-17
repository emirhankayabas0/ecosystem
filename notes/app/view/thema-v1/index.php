<?php require view('static/header') ?>

<main class="notes">
    <div class="side-bar show"><?php require view("static/side-menu") ?></div>
    <div class="content">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade note show active" id="v-pills-note" role="tabpanel" aria-labelledby="v-pills-note-tab">
                <div class="new-note">
                    <div class="field">
                        <label class="new-todo-label">
                            <input type="text" id="new-note-button">
                            <span>Not alın..</span>
                        </label>
                        <div class="new-note-box">
                            <form action="<?= site_url("ajax") ?>" id="new-note-form">
                                <div class="header">
                                    <input type="text" name="note-title" placeholder="Başlık">
                                    <label class="pin-field" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sabitle">
                                        <input type="checkbox" name="pin" id="pinCheckboxInput" value="1">
                                        <span class="icon"><?= pin(24) ?></span>
                                    </label>
                                </div>
                                <div class="content">
                                    <textarea name="note-content" id="note-content" placeholder="Not alın.."></textarea>
                                    <input type="hidden" name="new-note-submit" value="1">
                                </div>
                                <div class="footer">
                                    <div class="group">
                                        <button type="button" id="close-new-note">Kapat</button>
                                        <button type="submit">Kaydet</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="notes">
                    <div class="info hide-375px">
                        <div class="box not"><?= sticky(32) ?></div>
                        <div>
                            <h5>Notlar</h5>
                            <p>Eklediğiniz notlar burada görünür</p>
                        </div>
                    </div>
                    <?php foreach ($query as $row) : ?>
                        <?php if ($row["note_archive"] == 0) : ?>
                            <?php if ($row["note_delete"] == 0) : ?>
                                <div class="note">
                                    <div class="note-header">
                                        <h1 class="title"><?= $row["note_title"] ?></h1>
                                        <div class="pin" data-pin="<?= $row["note_pin"] ?>" data-id="<?= encrypt($row["note_id"]) ?>">
                                            <span class="icon">
                                                <?php if ($row["note_pin"] == 1) {
                                                    echo pinFill(24);
                                                } else {
                                                    echo pin(24);
                                                } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="note-content">
                                        <p><?= $row["note_content"] ?></p>
                                    </div>
                                    <div class="note-footer">
                                        <span class="time-ago"><?= timeConvert($row["note_date"]) ?></span>
                                        <div class="group">
                                            <button class="archiveNote" data-archive="<?= $row["note_archive"] ?>" data-id="<?= encrypt($row["note_id"]) ?>">
                                                <span class="icon">
                                                    <?php if ($row["note_archive"] == 1) {
                                                        echo archiveFill(24);
                                                    } else {
                                                        echo archive(24);
                                                    } ?>
                                                </span>
                                            </button>
                                            <button class="removeNote" onclick="return confirm('Silme işlemine devam ediyorsunuz.')" data-id="<?= encrypt($row["note_id"]) ?>"><span class="icon"><?= trash(24) ?></span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="tab-pane fade archive" id="v-pills-archive" role="tabpanel" aria-labelledby="v-pills-archive-tab">
                <div class="notes" id="noteContent">
                    <div class="info hide-375px">
                        <div class="box archive"><?= archive(32) ?></div>
                        <div>
                            <h5>Arşiv</h5>
                            <p>Arşivlenen notlarınız burada görünür</p>
                        </div>
                    </div>
                    <?php foreach ($query as $row) : ?>
                        <?php if ($row["note_archive"] == 1) : ?>
                            <?php if ($row["note_delete"] == 0) : ?>
                                <div class="note">
                                    <div class="note-header">
                                        <h1 class="title"><?= $row["note_title"] ?></h1>
                                        <div class="pin" data-pin="<?= $row["note_pin"] ?>" data-id="<?= encrypt($row["note_id"]) ?>">
                                            <span class="icon">
                                                <?php if ($row["note_pin"] == 1) {
                                                    echo pinFill(24);
                                                } else {
                                                    echo pin(24);
                                                } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="note-content">
                                        <p><?= $row["note_content"] ?></p>
                                    </div>
                                    <div class="note-footer">
                                        <span class="time-ago"><?= timeConvert($row["note_date"]) ?></span>
                                        <div class="group">
                                            <button class="archiveNote" data-archive="<?= $row["note_archive"] ?>" data-id="<?= encrypt($row["note_id"]) ?>">
                                                <span class="icon">
                                                    <?php if ($row["note_archive"] == 1) {
                                                        echo archiveFill(24);
                                                    } else {
                                                        echo archive(24);
                                                    } ?>
                                                </span>
                                            </button>
                                            <button class="removeNote" onclick="return confirm('Silme işlemine devam ediyorsunuz.')" data-id="<?= encrypt($row["note_id"]) ?>"><span class="icon"><?= trash(24) ?></span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="tab-pane fade trash" id="v-pills-trash" role="tabpanel" aria-labelledby="v-pills-trash-tab">
                <div class="notes">
                    <div class="info hide-375px">
                        <div class="box trash"><?= trash(32) ?></div>
                        <div>
                            <h5>Çöp kutusu</h5>
                            <p>Çöp Kutusu'ndaki notlar 7 gün sonra silinir.</p>
                        </div>
                        <button type="button" class="delete-all">Çöp kutusunu boşalt</button>
                    </div>
                    <?php foreach ($query as $row) : ?>
                        <?php if ($row["note_archive"] == 0) : ?>
                            <?php if ($row["note_delete"] == 1) : ?>
                                <div class="note">
                                    <div class="note-header">
                                        <h1 class="title"><?= $row["note_title"] ?></h1>
                                        <div class="pin" data-pin="<?= $row["note_pin"] ?>" data-id="<?= encrypt($row["note_id"]) ?>">
                                            <span class="icon">
                                                <?php if ($row["note_pin"] == 1) {
                                                    echo pinFill(24);
                                                } else {
                                                    echo pin(24);
                                                } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="note-content">
                                        <p><?= $row["note_content"] ?></p>
                                    </div>
                                    <div class="note-footer">
                                        <span class="time-ago"><?= timeConvert($row["note_date"]) ?></span>
                                        <div class="group">
                                            <button class="archiveNote" data-archive="<?= $row["note_archive"] ?>" data-id="<?= encrypt($row["note_id"]) ?>">
                                                <span class="icon">
                                                    <?php if ($row["note_archive"] == 1) {
                                                        echo archiveFill(24);
                                                    } else {
                                                        echo archive(24);
                                                    } ?>
                                                </span>
                                            </button>
                                            <button class="restoreNote" data-id="<?= encrypt($row["note_id"]) ?>"><span class="icon"><?= restoreTrash(24) ?></span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require view('static/footer') ?>