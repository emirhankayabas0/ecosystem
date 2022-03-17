<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($meta['description'])) : ?><meta name="description" content="<?= $meta['description'] ?>"><?php endif; ?>   
    <?php if (isset($meta['keywords'])) : ?><meta name="keywords" content="<?= $meta['keywords'] ?>"><?php endif; ?> 
    <!-- CSS -->
    <link rel="stylesheet" href="<?= staticFile("css", "bootstrap/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= staticFile("css", "static.min.css") ?>">
    <link rel="stylesheet" href="<?= public_url("css/index.css") ?>">
    <title><?= $meta['title'] ?></title>
    <!-- Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= public_url("images/xing.png") ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= public_url("images/xing.png") ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= public_url("images/xing.png") ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= public_url("images/xing.png") ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= public_url("images/xing.png") ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= public_url("images/xing.png") ?>">
    <!-- Script -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>let ajaxUrl = "<?= URL . "/public/thema-v1/php/ajax.php" ?>";</script>
</head>

<body>