<?php
$page_id = 30;
$stock = get_field('stock', $page_id);
?>


<!-- Stock -->
<section id="stock">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7 col-xxl-4">
                <div class="stock-item">
                    <h2 class="section-title">
                        <?= get_the_title($page_id); ?>
                    </h2>
                    <img class="stock-image" src="<?= get_the_post_thumbnail_url($page_id); ?>" alt="stock image">
                </div>
            </div>
            <?php foreach ($stock as $item) : ?>
                <div class="col-sm-8 col-md-6 col-xxl-4">
                    <div class="stock-card">
                        <div class="stock-card-prev">
                            <figure style="background-image: url(<?= $item['stock_image']['url']; ?>);"
                                    class="stock-card__image"></figure>
                        </div>
                        <div class="stock-card-body">
                            <h3 class="stock-card__title">
                                <?= $item['stock_title']; ?>
                            </h3>
                            <div class="stock-card__description">
                                <?= $item['stock_description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>