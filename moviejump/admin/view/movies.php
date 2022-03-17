<?php require admin_view('static/header'); ?>

<div class="box-">
    <h1>
        Film Liste
        <!-- <a href="#">Add New</a> -->
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="table">
    <table>
        <thead>
            <tr>
                <th width="10">&nbsp;</th>
                <th>Film Adı</th>
                <th class=" hide">Ekleyen</th>
                <th class="hide">Ekleme Tarihi</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $row) :  ?>
                <tr>
                    <td>
                        <?= $row['movie_id'] ?>
                    </td>
                    <td>
                        <p><?= $row['movie_name'] ?></p>
                    </td>
                    <td class="hide">
                        <?= $row['movie_add_user'] ?>
                    </td>
                    <td class="hide">
                        <?= $row['movie_date'] ?> (<?= timeConvert($row['movie_date']) ?>)
                    </td>
                    <td>
                        <a href="<?= admin_url('edit-movie?id=' . $row['movie_id']) ?>" class="btn">Düzenle</a>
                        <a onclick="return confirm('Silme işlemine devam ediyorsunuz.')" href="<?= admin_url('delete?table=movie&column=movie_id&id=' . $row['movie_id']) ?>" class="btn">Sil</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php if ($totalRecord > $pageLimit) : ?>
    <div class="pagination">
        <ul>
            <?= $db->showPagination(admin_url(route(1) . "?" . $pageParam . '=[page]')); ?>
        </ul>
    </div>
<?php endif; ?>


<?php require admin_view('static/footer'); ?>

<script>
    document.title = "Film Düzenle | Movie Jump Admin";
</script>