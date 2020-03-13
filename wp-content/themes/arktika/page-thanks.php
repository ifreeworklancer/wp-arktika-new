<?php
/*
Template Name: Спасибо
Template Post Type: page
*/
get_header('secondary');
$thanks_subtitle = get_field('thanks_subtitle');
?>

    <!-- Thanks -->
    <section id="page-thanks" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="page-secondary-item">
                        <div class="page-secondary-item__logo">
                            <img src="<?= get_theme_file_uri('images/icons/logo.png') ?>" alt="logo">
                        </div>
                        <h1 class="page-secondary-item__title">
                            <?= get_the_title($page_id); ?>
                        </h1>
                        <div class="page-secondary-item__subtitle">
                            <?= $thanks_subtitle; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer('secondary'); ?>