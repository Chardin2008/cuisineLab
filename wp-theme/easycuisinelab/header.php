<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="scroll-progress" aria-hidden="true"></div>
<div class="lab-loader" data-loader aria-hidden="true">
    <div class="lab-loader__inner">
        <svg class="lab-loader__signature" viewBox="0 0 520 160" role="img" aria-label="<?php echo esc_attr(ecl_option('loader_name')); ?>">
            <path d="M24 104 C78 42 142 42 178 88 C207 124 255 128 282 84 C310 38 374 34 407 74 C430 102 468 106 498 66" />
            <path d="M102 104 L102 68 L174 68 L174 104 M292 102 C286 58 332 42 363 68 C384 86 383 119 354 128 C330 136 300 124 292 102 Z" />
        </svg>
        <div class="lab-loader__monogram"><?php echo esc_html(ecl_option('loader_monogram')); ?></div>
        <div class="lab-loader__name"><?php echo esc_html(ecl_option('loader_name')); ?></div>
        <p><?php echo esc_html(ecl_option('loader_tagline')); ?></p>
    </div>
</div>
<header class="site-header" data-header>
    <div class="site-header__inner">
        <?php echo ecl_logo_markup('header'); ?>
        <nav class="site-nav" aria-label="Navigation principale">
            <?php ecl_menu_markup('primary'); ?>
        </nav>
        <a class="btn btn--small btn--coral site-header__cta" href="<?php echo esc_url(ecl_option('header_cta_url')); ?>"><?php echo esc_html(ecl_option('header_cta_label')); ?></a>
        <button class="menu-toggle" type="button" data-menu-toggle aria-label="Ouvrir le menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
    <div class="mobile-panel" data-mobile-panel>
        <?php ecl_menu_markup('primary'); ?>
        <a class="btn btn--coral" href="<?php echo esc_url(ecl_option('header_cta_url')); ?>"><?php echo esc_html(ecl_option('header_cta_label')); ?></a>
    </div>
</header>
<main id="content" class="site-main">
