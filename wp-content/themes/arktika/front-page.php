<?php

get_header();

$sections = [
    'intro',
    'services',
    'stock',
    'about',
];

foreach ($sections as $section) {
    include(__DIR__ . '/includes/template-parts/' . $section . '.php');
}

get_footer();