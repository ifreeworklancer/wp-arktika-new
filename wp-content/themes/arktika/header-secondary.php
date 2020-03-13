<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body class="page-secondary">

<!-- Svg -->
<?php include(__DIR__ . '/includes/partials/svgs.php'); ?>

<?php
$phone1 = get_theme_mod('phone1');
$phone2 = get_theme_mod('phone2');
$phone3 = get_theme_mod('phone3');
?>

<!-- App-header -->
<header id="app-header" class="header-secondary">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="<?= get_home_url(); ?>" class="logo">
                    <img src="<?= get_theme_file_uri('images/icons/logo.png') ?>" alt="logo">
                </a>
            </div>
            <div class="col-auto px-2 px-sm-3">
                <ul class="contacts-list d-none d-lg-flex">
                    <?php if ($phone1 !== '') : ?>
                        <li>
                            <a href="tel:<?= phone_link($phone1); ?>">
                                <?= $phone1; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($phone2 !== '') : ?>
                        <li>
                            <a href="tel:<?= phone_link($phone2); ?>">
                                <?= $phone2; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($phone3 !== '') : ?>
                        <li>
                            <a href="tel:<?= phone_link($phone3); ?>">
                                <?= $phone3; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <a href="<?= get_home_url(); ?>" class="btn btn-primary d-inline-flex d-lg-none">
                    На главную
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Main -->
<main>
