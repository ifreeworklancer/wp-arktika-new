<?php
$page_id = 41;
$about_description = get_field('about_description', $page_id);
$about_subtitle = get_field('about_subtitle', $page_id);
$about_name = get_field('about_name', $page_id);
?>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-between">
            <div class="col-sm-8 col-xl-6 position-static">
                <figure style="background-image: url(<?= get_the_post_thumbnail_url($page_id); ?>);"
                        class="about-image">
                    <div class="about-name">
                        <?= $about_name; ?>
                    </div>
                </figure>
            </div>
            <div class="col-sm-8 col-xl-6 col-xxl-5">
                <div class="about-item">
                    <h2 class="section-title">
                        <?= get_the_title($page_id); ?>
                    </h2>
                    <div class="about-item__description">
                        <?= $about_description; ?>
                    </div>
                    <div class="about-item__subtitle">
                        <?= $about_subtitle; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>