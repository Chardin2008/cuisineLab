<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
</main>
<footer class="site-footer">
    <div class="site-footer__glow" aria-hidden="true"></div>
    <div class="section-wrap">
        <div class="footer-cta">
            <div class="footer-cta__content">
                <span class="footer-cta__kicker"><?php echo esc_html(ecl_option('footer_cta_kicker')); ?></span>
                <h2><?php echo esc_html(ecl_option('footer_cta_title')); ?></h2>
                <p><?php echo esc_html(ecl_option('footer_cta_text')); ?></p>
                <div class="footer-cta__actions">
                    <a class="btn btn--coral" href="<?php echo esc_url(ecl_option('footer_cta_button_url')); ?>"><?php echo esc_html(ecl_option('footer_cta_button_label')); ?></a>
                    <span><?php echo esc_html(ecl_option('footer_cta_note')); ?></span>
                </div>
            </div>
            <div class="footer-cta__visual" aria-hidden="true">
                <img src="<?php echo esc_url(ecl_option('footer_cta_image')); ?>" alt="" loading="lazy" decoding="async">
                <div>
                    <span><?php echo esc_html(ecl_option('footer_cta_image_label')); ?></span>
                    <strong><?php echo esc_html(ecl_option('footer_cta_image_title')); ?></strong>
                </div>
            </div>
        </div>
    </div>
    <div class="section-wrap site-footer__grid">
        <div class="site-footer__brand">
            <?php echo ecl_logo_markup('footer'); ?>
            <p><?php echo esc_html(ecl_option('footer_brand_text')); ?></p>
        </div>
        <nav aria-label="Navigation footer">
            <strong><?php echo esc_html(ecl_option('footer_nav_title')); ?></strong>
            <?php ecl_menu_markup('footer'); ?>
        </nav>
        <div>
            <strong><?php echo esc_html(ecl_option('footer_contact_title')); ?></strong>
            <a href="mailto:<?php echo esc_attr(ecl_option('footer_email')); ?>"><?php echo esc_html(ecl_option('footer_email')); ?></a>
            <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', ecl_option('footer_phone'))); ?>"><?php echo esc_html(ecl_option('footer_phone')); ?></a>
            <a class="footer-link-strong" href="<?php echo esc_url(ecl_option('footer_contact_link_url')); ?>"><?php echo esc_html(ecl_option('footer_contact_link_label')); ?></a>
        </div>
        <div class="site-footer__info">
            <strong><?php echo esc_html(ecl_option('footer_info_title')); ?></strong>
            <span><b><?php echo esc_html(ecl_option('footer_address_label')); ?></b> <?php echo esc_html(ecl_option('footer_address')); ?></span>
            <span><b><?php echo esc_html(ecl_option('footer_zone_label')); ?></b> <?php echo esc_html(ecl_option('footer_zone')); ?></span>
            <span><b><?php echo esc_html(ecl_option('footer_hours_label')); ?></b> <?php echo esc_html(ecl_option('footer_hours')); ?></span>
            <div class="footer-legal">
                <a href="<?php echo esc_url(ecl_option('footer_legal_1_url')); ?>"><?php echo esc_html(ecl_option('footer_legal_1_label')); ?></a>
                <a href="<?php echo esc_url(ecl_option('footer_legal_2_url')); ?>"><?php echo esc_html(ecl_option('footer_legal_2_label')); ?></a>
            </div>
        </div>
    </div>
    <div class="section-wrap footer-bottom">
        <strong><?php echo esc_html(ecl_option('footer_bottom_text')); ?></strong>
        <small>&copy; <?php echo esc_html(gmdate('Y')); ?> <?php echo esc_html(ecl_option('footer_copyright_text')); ?></small>
    </div>
</footer>
<a class="floating-cta" href="<?php echo esc_url(ecl_option('floating_cta_url')); ?>" aria-label="Aller au formulaire"><?php echo esc_html(ecl_option('floating_cta_label')); ?></a>
<?php wp_footer(); ?>
</body>
</html>
