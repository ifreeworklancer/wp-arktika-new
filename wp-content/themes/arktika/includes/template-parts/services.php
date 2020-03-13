<?php
$page_id = 18;
$services = get_field('services', $page_id);
?>

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-start">
            <div class="col-sm-8 col-lg-7 col-xl-6 order-2 order-xl-1">
                <div class="services-item">
                    <h2 class="section-title">
                        <?= get_the_title($page_id); ?>
                    </h2>
                    <div class="services-images d-xl-none">
                        <?php
                        $count = 0;
                        foreach ($services as $tab) :
                            $count++; ?>
                            <figure style="background-image: url(<?= $tab['services_image']['url']; ?>);"
                                    class="services-images__item <?php if ($count === 1) echo 'active'; ?>"></figure>
                        <?php endforeach; ?>
                    </div>
                    <div class="custom-tabs">
                        <ul class="custom-tabs-nav">
                            <?php
                            $count = 0;
                            foreach ($services as $tab) :
                                $count++;
                                ?>
                                <li class="<?php if ($count === 1) echo 'active'; ?>">
                                    <?= $tab['services_nav_title']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="custom-tabs-body">
                            <?php
                            $count = 0;
                            foreach ($services as $tab) :
                                $count++;
                                ?>
                                <div class="custom-tabs-body-item <?php if ($count === 1) echo 'active'; ?>">
                                    <h3 class="custom-tabs__title">
                                        <?= $tab['services_title']; ?>
                                    </h3>
                                    <div class="custom-tabs__description">
                                        <?= $tab['services_description']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 order-1 order-xl-2 position-static">
                <div class="services-images d-none d-xl-block">
                    <?php
                    $count = 0;
                    foreach ($services as $tab) :
                        $count++; ?>
                        <figure style="background-image: url(<?= $tab['services_image']['url']; ?>);"
                                class="services-images__item <?php if ($count === 1) echo 'active'; ?>"></figure>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>