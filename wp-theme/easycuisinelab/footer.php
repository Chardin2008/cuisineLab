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
                <span class="footer-cta__kicker">Projet cuisine</span>
                <h2>Prêt à imaginer votre future cuisine ?</h2>
                <p>Parlez-nous de votre espace, de vos envies et de votre style. Easy Cuisine Lab vous aide à poser une direction claire.</p>
                <div class="footer-cta__actions">
                    <a class="btn btn--coral" href="<?php echo esc_url(home_url('/#contact')); ?>">Demander un devis</a>
                    <span>Réponse sous 24h ouvrées</span>
                </div>
            </div>
            <div class="footer-cta__visual" aria-hidden="true">
                <img src="<?php echo ecl_asset('img/inspiration-soft.jpg'); ?>" alt="">
                <div>
                    <span>Inspiration cuisine</span>
                    <strong>Ambiance claire, douce et fonctionnelle</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="section-wrap site-footer__grid">
        <div class="site-footer__brand">
            <?php echo ecl_logo_markup('footer'); ?>
            <p>Des cuisines pensées avec plus de style, plus de simplicité et plus d’inspiration.</p>
        </div>
        <nav aria-label="Navigation footer">
            <strong>Explorer</strong>
            <?php foreach (ecl_nav_items() as $item) : ?>
                <a href="<?php echo esc_url($item[1]); ?>"><?php echo esc_html($item[0]); ?></a>
            <?php endforeach; ?>
        </nav>
        <div>
            <strong>Contact</strong>
            <a href="mailto:contact@cuisinelab.fr">contact@cuisinelab.fr</a>
            <a href="tel:+33789000000">+33 7 89 00 00 00</a>
            <a class="footer-link-strong" href="<?php echo esc_url(home_url('/#contact')); ?>">Envoyer une demande</a>
        </div>
        <div class="site-footer__info">
            <strong>Informations</strong>
            <span><b>Adresse</b> 18 rue des Ateliers, 75011 Paris</span>
            <span><b>Zone</b> France métropolitaine</span>
            <span><b>Horaires</b> Lun - Ven, 9h - 18h</span>
            <div class="footer-legal">
                <a href="<?php echo esc_url(home_url('/mentions-legales/')); ?>">Mentions légales</a>
                <a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>">Confidentialité</a>
            </div>
        </div>
    </div>
    <div class="section-wrap footer-bottom">
        <strong>Une cuisine plus claire, plus belle, plus simple à vivre.</strong>
        <small>&copy; <?php echo esc_html(gmdate('Y')); ?> Easy Cuisine Lab. Tous droits réservés.</small>
    </div>
</footer>
<a class="floating-cta" href="#contact" aria-label="Aller au formulaire">Projet cuisine</a>
<?php wp_footer(); ?>
</body>
</html>
