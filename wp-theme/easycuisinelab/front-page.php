<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();

if (function_exists('ecl_home_page_admin_content')) {
    echo apply_filters('the_content', ecl_home_page_admin_content());
    get_footer();
    return;
}

$home_page_id = (int) get_option('page_on_front');

if ($home_page_id <= 0) {
    $home_page = get_page_by_path('accueil');
    $home_page_id = $home_page instanceof WP_Post ? (int) $home_page->ID : 0;
}

if ($home_page_id > 0) {
    $home_page = get_post($home_page_id);

    if ($home_page instanceof WP_Post && $home_page->post_status === 'publish') {
        echo apply_filters('the_content', $home_page->post_content);
    }
} elseif (function_exists('ecl_home_page_content')) {
    echo apply_filters('the_content', ecl_home_page_content());
}

get_footer();
