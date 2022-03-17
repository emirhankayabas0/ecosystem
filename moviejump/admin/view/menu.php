<?php require admin_view('static/header'); ?>

<div class="content">
    <div class="box-">
        <h1>
            Menü Yönetimi
            <a href="<?= admin_url('add-menu') ?>">Yeni Ekle</a>
        </h1>
    </div>
    <div class="clear" style="height: 10px;"></div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Menü Başlığı</th>
                    <th class="hide">Ekleme Tarihi</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td>
                            <?= $row['menu_title'] ?>
                        </td>

                        <td>
                            <span class="date"><?= $row['menu_date'] ?></span>
                        </td>
                        <td>
                            <a href="<?= admin_url('edit-menu?id=' . $row['menu_id']) ?>" class="btn">Düzenle</a>
                            <a href="<?= admin_url('delete?table=menu&column=menu_id&id=' . $row['menu_id']) ?>" class="btn">Sil</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require admin_view('static/footer'); ?>

<script>
    document.title = "Menü | Movie Jump Admin";
</script>