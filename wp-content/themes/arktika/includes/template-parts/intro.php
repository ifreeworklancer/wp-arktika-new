<?php
$page_id = 8;
?>

<!-- Intro -->
<section id="intro" style="background-image: url('<?= get_the_post_thumbnail_url($page_id); ?>');">
    <div class="video-container" data-src="<?= get_theme_file_uri('video/video.mp4') ?>"></div>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-sm-10">
                <div class="intro-item">
                    <div class="intro-item__logo">
                        <img src="<?= get_theme_file_uri('images/icons/logo.png') ?>" alt="logo">
                    </div>
                    <h1 class="intro-item__title">
                        <?= get_the_title($page_id); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>