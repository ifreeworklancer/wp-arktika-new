<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/includes/partials/svgs.php'); ?>

<?php
$page_id = 13;
$sidebar_subtitle = get_field('sidebar_subtitle', $page_id);
$phone1 = get_theme_mod('phone1');
$phone2 = get_theme_mod('phone2');
$phone3 = get_theme_mod('phone3');
?>

<!-- App-header -->
<header id="app-header">
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
                <a href="#" class="btn btn-primary d-inline-flex open-sidebar d-lg-none">
                    Заказать воду
                </a>
            </div>
        </div>
    </div>
</header>

<aside id="app-sidebar">
    <div class="close-sidebar d-lg-none">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="sidebar-item">
        <h3 class="sidebar-item__title">
            <?= get_the_title($page_id); ?>
        </h3>
        <h4 class="sidebar-item__subtitle">
            <?= $sidebar_subtitle; ?>
        </h4>
        <?= do_shortcode('[contact-form-7 id="50" title="Оформить заказ"]'); ?>
    </div>
</aside>

<!-- Main -->
<main>
