</main>
<?php
$phone1 = get_theme_mod('phone1');
$phone2 = get_theme_mod('phone2');
$phone3 = get_theme_mod('phone3');
?>

<!-- App-footer -->
<footer id="app-footer" class="footer-secondary">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto mb-2 mb-md-0">
                    <div class="footer-copyright">
                        <?= date('Y'); ?> Все права защищены.
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="footer-copyright">
                        Дизайн и разработка сайта <a href="https://impressionbureau.pro/" target="_blank">Impression Bureau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<?php wp_footer(); ?>
</body>

</html>