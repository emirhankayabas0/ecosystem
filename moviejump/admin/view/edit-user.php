<?php require admin_view('static/header'); ?>

<div class="box-">
    <h1>
        Üye Düzenle (#<?= $id ?>)
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-">
    <form action="" method="POST" class="form label">
        <ul>
            <li>
                <label for="title">Kullanıcı Adı</label>
                <div class="form-content">
                    <input type="text" id="title" name="user_name" value="<?= post('user_name') ? post('user_name') : $row['user_name'] ?>">
                </div>
            </li>
            <li>
                <label for="title">Kullanıcı Soyadı</label>
                <div class="form-content">
                    <input type="text" id="title" name="user_surname" value="<?= post('user_surname') ? post('user_surname') : $row['user_surname'] ?>">
                </div>
            </li>
            <li>
                <label for="title">Kullanıcı E-posta</label>
                <div class="form-content">
                    <input type="text" id="title" name="user_email" value="<?= post('user_email') ? post('user_email') : $row['user_email'] ?>">
                </div>
            </li>
            <li>
                <label for="title">Rütbe</label>
                <div class="form-content">
                    <select name="user_rank">
                        <option disabled>Rütbe Seçiniz</option>
                        <?php foreach (user_ranks() as $id => $rank) : ?>
                            <option <?= (post('user_rank') ? post('user_rank') : $row['user_rank'])  == $id ? 'selected' : null ?> value="<?= $id ?>"><?= $rank ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </li>
            <li class="submit">
                <button name="submit" value="submit" type="submit">Kaydet</button>
            </li>
        </ul>
    </form>
</div>

<?php require admin_view('static/footer'); ?>

<script>
    document.title = "Üye Düzenle | Movie Jump Admin";
</script>