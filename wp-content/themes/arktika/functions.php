<?php
// Theme setup
function theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_setup');
// Cleanup header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter('the_generator', '__return_empty_string');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
show_admin_bar(false);
// Enqueue scripts
function theme_scripts()
{
//    wp_deregister_script('wp-embed');
//    wp_deregister_script('jquery');
//    wp_deregister_script('jquery-migrate');
    wp_enqueue_script('app', get_theme_file_uri('dist/app.js'), null, '', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');
// Enqueue styles
function theme_styles()
{
    wp_enqueue_style('theme-font', get_theme_file_uri('fonts/font.css'), null, null);
    wp_enqueue_style('theme-app', get_theme_file_uri('dist/app.css'), null, null);
}

add_action('wp_enqueue_scripts', 'theme_styles');

if (!function_exists('phone_filter')) {
    function phone_filter($phone)
    {
        return str_replace([' ', '(', ')', '-'], '', trim($phone));
    }
}
function theme_customize_register($wp_customize)
{
    $wp_customize->add_section('contacts', [
        'title' => 'Контактная информация',
        'priority' => 30,
    ]);
    $wp_customize->add_setting('phone1');
    $wp_customize->add_control('phone1', [
        'section' => 'contacts',
        'label' => 'Первый телефон',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('phone2');
    $wp_customize->add_control('phone2', [
        'section' => 'contacts',
        'label' => 'Второй телефон',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('phone3');
    $wp_customize->add_control('phone3', [
        'section' => 'contacts',
        'label' => 'Третий телефон',
        'type' => 'text',
    ]);
}

add_action('customize_register', 'theme_customize_register');

function phone_link($phone)
{
    return str_replace([' ', '(', ')', '-'], '', $phone);
}

// Debug
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

