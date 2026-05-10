<?php

if (!defined('ABSPATH')) {
    exit;
}

function ecl_asset(string $path): string
{
    return esc_url(get_template_directory_uri() . '/assets/' . ltrim($path, '/'));
}

function ecl_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height' => 80,
        'width' => 260,
        'flex-height' => true,
        'flex-width' => true,
    ]);
    add_theme_support('editor-styles');
    add_editor_style('editor.css');
    register_nav_menus([
        'primary' => __('Navigation principale', 'easycuisinelab'),
        'footer' => __('Navigation footer', 'easycuisinelab'),
    ]);
}
add_action('after_setup_theme', 'ecl_setup');

function ecl_enqueue_assets(): void
{
    $theme = wp_get_theme();
    wp_enqueue_style('ecl-main', get_template_directory_uri() . '/assets/css/main.css', [], $theme->get('Version'));
    wp_enqueue_script('ecl-main', get_template_directory_uri() . '/assets/js/main.js', [], $theme->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'ecl_enqueue_assets');

function ecl_excerpt_length(): int
{
    return 20;
}
add_filter('excerpt_length', 'ecl_excerpt_length');

function ecl_excerpt_more(): string
{
    return '...';
}
add_filter('excerpt_more', 'ecl_excerpt_more');

function ecl_meta_tags(): void
{
    $og = ecl_asset('img/og-easycuisinelab.jpg');
    $yoast_active = defined('WPSEO_VERSION');
    ?>
    <meta name="theme-color" content="#DCEBDD">
    <?php if (!$yoast_active) : ?>
        <meta name="description" content="Easy Cuisine Lab imagine des cuisines plus belles, plus simples et plus inspirantes.">
        <meta property="og:title" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
        <meta property="og:description" content="Imaginer une cuisine plus belle, plus simple et plus inspirante.">
        <meta property="og:type" content="website">
        <meta property="og:image" content="<?php echo esc_url($og); ?>">
        <meta name="twitter:card" content="summary_large_image">
    <?php endif; ?>
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri() . '/site.webmanifest'); ?>">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/favicon.svg'); ?>" type="image/svg+xml">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/favicon-32x32.png'); ?>" sizes="32x32">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri() . '/apple-touch-icon.png'); ?>">
    <?php
}
add_action('wp_head', 'ecl_meta_tags', 1);

function ecl_handle_contact(): void
{
    $name = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $phone = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $project = sanitize_text_field(wp_unslash($_POST['project_type'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));

    if ($email && $message) {
        $body = "Nom: {$name}\nEmail: {$email}\nTéléphone: {$phone}\nProjet: {$project}\n\nMessage:\n{$message}";
        wp_mail('chardinpoutcheu@gmail.com', 'Nouvelle demande Easy Cuisine Lab', $body);
    }

    wp_safe_redirect(home_url('/#contact'));
    exit;
}
add_action('admin_post_ecl_contact', 'ecl_handle_contact');
add_action('admin_post_nopriv_ecl_contact', 'ecl_handle_contact');

function ecl_nav_items(): array
{
    return [
        ['Accueil', home_url('/#accueil')],
        ['Concept', home_url('/#concept')],
        ['Inspirations', home_url('/#inspirations')],
        ['Méthode', home_url('/#methode')],
        ['Blog', home_url('/#blog')],
        ['Avis', home_url('/#avis')],
        ['Contact', home_url('/#contact')],
    ];
}

function ecl_logo_markup(string $context = 'header'): string
{
    if (has_custom_logo() && $context === 'header') {
        return get_custom_logo();
    }

    return '<a class="brand brand--' . esc_attr($context) . '" href="' . esc_url(home_url('/')) . '" aria-label="Easy Cuisine Lab">' .
        '<span class="brand__mark" aria-hidden="true"><span>E</span><span>C</span><span>L</span></span>' .
        '<span class="brand__text"><strong>Easy Cuisine Lab</strong><small>Fresh Lab Editorial</small></span>' .
    '</a>';
}

function ecl_blog_preview_shortcode(): string
{
    $blog_cards = [
        ['blog-1.jpg', 'Inspiration', 'Comment créer une cuisine plus harmonieuse ?', 'Quelques choix simples peuvent transformer la sensation d’espace, de lumière et de confort.'],
        ['blog-2.jpg', 'Design', 'Les couleurs qui transforment l’espace cuisine', 'Les tons doux, les contrastes maîtrisés et les matières naturelles créent une ambiance plus forte.'],
        ['blog-3.jpg', 'Conseils', 'Les détails qui rendent une cuisine plus premium', 'Poignées, éclairage, circulation et finitions : les détails construisent l’élégance.'],
    ];

    ob_start();
    ?>
    <div class="post-grid">
        <?php
        $latest_posts = new WP_Query(['posts_per_page' => 3, 'post_status' => 'publish']);
        if ($latest_posts->post_count >= 3) :
            while ($latest_posts->have_posts()) :
                $latest_posts->the_post();
                get_template_part('template-parts/content', 'post-card');
            endwhile;
            wp_reset_postdata();
        else :
            foreach ($blog_cards as $card) : ?>
                <article class="post-card reveal">
                    <img src="<?php echo ecl_asset('img/' . $card[0]); ?>" alt="<?php echo esc_attr($card[2]); ?>">
                    <span><?php echo esc_html($card[1]); ?></span>
                    <h3><?php echo esc_html($card[2]); ?></h3>
                    <p><?php echo esc_html($card[3]); ?></p>
                    <a href="#contact">Lire l’article</a>
                </article>
            <?php endforeach;
        endif; ?>
    </div>
    <?php
    return trim(ob_get_clean());
}
add_shortcode('ecl_blog_preview', 'ecl_blog_preview_shortcode');

function ecl_contact_form_shortcode(): string
{
    ob_start();
    ?>
    <form class="lab-form reveal" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" data-form>
        <input type="hidden" name="action" value="ecl_contact">
        <div class="form-step is-active" data-step="1">
            <label>Nom<input name="name" type="text" autocomplete="name" required></label>
            <label>Email<input name="email" type="email" autocomplete="email" required></label>
            <button class="btn btn--coral" type="button" data-next>Continuer</button>
        </div>
        <div class="form-step" data-step="2">
            <label>Téléphone<input name="phone" type="tel" autocomplete="tel"></label>
            <label>Type de projet<select name="project_type"><option>Cuisine ouverte</option><option>Rénovation complète</option><option>Optimisation espace</option><option>Inspiration couleurs</option></select></label>
            <div class="form-actions"><button class="btn btn--ghost" type="button" data-prev>Retour</button><button class="btn btn--coral" type="button" data-next>Continuer</button></div>
        </div>
        <div class="form-step" data-step="3">
            <label>Message<textarea name="message" rows="5" required></textarea></label>
            <div class="form-actions"><button class="btn btn--ghost" type="button" data-prev>Retour</button><button class="btn btn--coral" type="submit">Envoyer la demande</button></div>
        </div>
        <div class="form-dots" aria-hidden="true"><span class="is-active"></span><span></span><span></span></div>
    </form>
    <?php
    return trim(ob_get_clean());
}
add_shortcode('ecl_contact_form', 'ecl_contact_form_shortcode');

function ecl_home_page_content(): string
{
    $hero = ecl_asset('img/hero-main.jpg');
    $concept = ecl_asset('img/concept-lab.jpg');
    $inspiration_soft = ecl_asset('img/inspiration-soft.jpg');
    $inspiration_coral = ecl_asset('img/inspiration-coral.jpg');
    $inspiration_green = ecl_asset('img/inspiration-green.jpg');
    $method = ecl_asset('img/method-lab.jpg');
    $before = ecl_asset('img/before-kitchen.jpg');
    $after = ecl_asset('img/after-kitchen.jpg');

    return <<<HTML
<!-- wp:html -->
<section class="hero" id="accueil">
    <div class="hero__media" aria-hidden="true">
        <img src="{$hero}" alt="">
    </div>
    <div class="section-wrap hero__content reveal">
        <p class="eyebrow">NEW ERA KITCHEN EXPERIENCE</p>
        <h1>Easy Cuisine Lab</h1>
        <p class="hero__lead">Des espaces cuisine pensés avec plus de style, plus de simplicité et plus d’inspiration.</p>
        <div class="hero__actions">
            <a class="btn btn--coral" href="#concept">Découvrir l’univers</a>
            <a class="btn btn--ghost" href="#contact">Demander un devis</a>
        </div>
        <div class="hero__badges" aria-label="Points forts">
            <span>Design premium</span>
            <span>Ambiance sur mesure</span>
            <span>Inspiration & fonctionnalité</span>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="concept section-pad" id="concept">
    <div class="section-wrap concept__grid">
        <div class="concept__copy reveal">
            <p class="section-kicker">Concept</p>
            <h2>La cuisine comme espace d’inspiration</h2>
            <p>La cuisine ne se limite plus à un lieu fonctionnel. Elle devient un espace central, vivant, esthétique et pensé pour accompagner le quotidien avec plus d’élégance.</p>
            <div class="concept__pillars">
                <article><span>01</span><strong>Design</strong><p>Une direction claire, éditoriale et facile à projeter.</p></article>
                <article><span>02</span><strong>Confort</strong><p>Des choix qui fluidifient les gestes et le quotidien.</p></article>
                <article><span>03</span><strong>Harmonie</strong><p>Couleurs, matières et volumes travaillés ensemble.</p></article>
            </div>
        </div>
        <div class="concept__image reveal">
            <img src="{$concept}" alt="Atelier créatif de conception cuisine avec échantillons de matières">
            <span class="image-note">Creative kitchen studio</span>
            <div class="concept__lab-note" aria-hidden="true"><span>Lab note</span> Matières, lumière et usages alignés.</div>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="benefits section-pad" aria-labelledby="benefits-title">
    <div class="section-wrap">
        <div class="section-head reveal">
            <p class="section-kicker">Bénéfices</p>
            <h2 id="benefits-title">Ce qui change vraiment dans votre cuisine</h2>
        </div>
        <div class="benefit-grid">
            <article class="benefit-card reveal"><span class="line-icon line-icon--spark" aria-hidden="true"></span><h3>Une esthétique plus forte</h3><p>Une cuisine qui affirme une vraie présence sans devenir ostentatoire.</p></article>
            <article class="benefit-card reveal"><span class="line-icon line-icon--flow" aria-hidden="true"></span><h3>Une circulation plus fluide</h3><p>Des zones pensées pour cuisiner, recevoir et vivre avec naturel.</p></article>
            <article class="benefit-card reveal"><span class="line-icon line-icon--choice" aria-hidden="true"></span><h3>Des choix plus simples</h3><p>Une direction visuelle claire pour décider plus vite et mieux.</p></article>
            <article class="benefit-card reveal"><span class="line-icon line-icon--warm" aria-hidden="true"></span><h3>Une ambiance plus chaleureuse</h3><p>Des détails doux et vivants qui changent la perception de l’espace.</p></article>
            <article class="benefit-card reveal"><span class="line-icon line-icon--grid" aria-hidden="true"></span><h3>Une meilleure cohérence visuelle</h3><p>Matières, couleurs et éclairage travaillent dans la même intention.</p></article>
            <article class="benefit-card reveal"><span class="line-icon line-icon--life" aria-hidden="true"></span><h3>Un espace plus agréable à vivre</h3><p>Une cuisine qui devient un vrai lieu d’envie et de partage.</p></article>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="inspirations section-pad" id="inspirations">
    <div class="section-wrap">
        <div class="section-head reveal">
            <p class="section-kicker">Inspirations</p>
            <h2>Inspirez votre futur espace</h2>
        </div>
        <div class="inspiration-grid">
            <article class="visual-card reveal"><img src="{$inspiration_soft}" alt="Cuisine lumineuse"><div><h3>Cuisine lumineuse</h3><p>Un espace clair, doux et ouvert pour une sensation de fraîcheur au quotidien.</p><a href="#contact">Explorer ce style</a></div></article>
            <article class="visual-card reveal"><img src="{$inspiration_coral}" alt="Ambiance chaleureuse"><div><h3>Ambiance chaleureuse</h3><p>Des couleurs enveloppantes et des détails élégants pour une cuisine plus vivante.</p><a href="#contact">Explorer ce style</a></div></article>
            <article class="visual-card reveal"><img src="{$inspiration_green}" alt="Élégance contemporaine"><div><h3>Élégance contemporaine</h3><p>Une cuisine moderne, équilibrée et pensée comme un véritable espace de vie.</p><a href="#contact">Explorer ce style</a></div></article>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="method section-pad" id="methode">
    <div class="section-wrap method__grid">
        <div class="method__image reveal">
            <img src="{$method}" alt="Consultation de design intérieur pour un projet cuisine">
        </div>
        <div class="method__content reveal">
            <p class="section-kicker">Méthode</p>
            <h2>Une approche simple, créative et pensée dans le détail</h2>
            <article class="method-step"><span>01</span><div><h3>Explorer</h3><p>Comprendre votre espace, vos envies et votre manière de vivre la cuisine.</p></div></article>
            <article class="method-step"><span>02</span><div><h3>Imaginer</h3><p>Créer une direction visuelle cohérente avec vos goûts, vos couleurs et vos usages.</p></div></article>
            <article class="method-step"><span>03</span><div><h3>Transformer</h3><p>Donner forme à une cuisine plus belle, plus fluide et plus inspirante.</p></div></article>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="before-after section-pad" aria-labelledby="before-after-title">
    <div class="section-wrap">
        <div class="section-head reveal">
            <p class="section-kicker">Transformation</p>
            <h2 id="before-after-title">Voyez la transformation</h2>
        </div>
        <div class="compare reveal" data-compare>
            <img class="compare__before" src="{$before}" alt="Cuisine avant rénovation">
            <div class="compare__after" style="width: 54%;">
                <img src="{$after}" alt="Cuisine après rénovation">
            </div>
            <span class="compare__label compare__label--before">Avant</span>
            <span class="compare__label compare__label--after">Après</span>
            <button class="compare__handle" type="button" aria-label="Déplacer le curseur avant après" style="left: 54%;"></button>
            <input class="compare__range" type="range" min="0" max="100" value="54" aria-label="Comparer avant et après">
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="blog-preview section-pad" id="blog">
    <div class="section-wrap">
        <div class="section-head reveal">
            <p class="section-kicker">Journal</p>
            <h2>Conseils & inspirations</h2>
            <p>Des idées, tendances et inspirations pour imaginer une cuisine encore plus belle.</p>
        </div>
        [ecl_blog_preview]
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="testimonials section-pad" id="avis">
    <div class="section-wrap">
        <div class="section-head reveal">
            <p class="section-kicker">Avis</p>
            <h2>Ils ont adoré la transformation</h2>
        </div>
        <div class="testimonial-grid">
            <article class="testimonial-card reveal"><div class="stars" aria-label="5 étoiles">★★★★★</div><p>“Le résultat est plus lumineux, plus simple et beaucoup plus agréable à vivre.”</p><strong>Clara M.</strong><span>Cuisine familiale</span></article>
            <article class="testimonial-card reveal"><div class="stars" aria-label="5 étoiles">★★★★★</div><p>“On avait besoin d’une vision claire. Easy Cuisine Lab nous a aidés à mieux imaginer l’espace.”</p><strong>Julien R.</strong><span>Cuisine ouverte</span></article>
            <article class="testimonial-card reveal"><div class="stars" aria-label="5 étoiles">★★★★★</div><p>“Les choix de couleurs et de matières ont complètement changé l’ambiance de la pièce.”</p><strong>Sarah L.</strong><span>Rénovation cuisine</span></article>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="contact section-pad" id="contact">
    <div class="section-wrap contact__grid">
        <div class="contact__copy reveal">
            <p class="section-kicker">Contact</p>
            <h2>Parlons de votre projet</h2>
            <p>Décrivez votre envie, votre style et votre espace. Easy Cuisine Lab vous aide à imaginer une solution plus belle, plus fluide et plus inspirante.</p>
        </div>
        [ecl_contact_form]
    </div>
</section>
<!-- /wp:html -->
HTML;
}

function ecl_ensure_home_page(): void
{
    $home_page = get_page_by_path('accueil');
    $home_content = ecl_home_page_content();
    $seo_title = 'Easy Cuisine Lab - Cuisine design, simple et inspirante';
    $seo_description = 'Easy Cuisine Lab vous aide à imaginer une cuisine plus belle, plus fluide et plus inspirante grâce à une approche design simple et personnalisée.';
    $seo_keyphrase = 'Easy Cuisine Lab';

    if ($home_page instanceof WP_Post) {
        if (!has_blocks($home_page->post_content)) {
            wp_update_post([
                'ID' => $home_page->ID,
                'post_content' => $home_content,
                'post_excerpt' => $seo_description,
            ]);
        } elseif ($home_page->post_excerpt === '') {
            wp_update_post([
                'ID' => $home_page->ID,
                'post_excerpt' => $seo_description,
            ]);
        }
        $home_page_id = (int) $home_page->ID;
    } else {
        $home_page_id = (int) wp_insert_post([
            'post_title' => 'Accueil',
            'post_name' => 'accueil',
            'post_type' => 'page',
            'post_status' => 'publish',
            'post_content' => $home_content,
            'post_excerpt' => $seo_description,
        ]);
    }

    if ($home_page_id > 0) {
        update_post_meta($home_page_id, '_yoast_wpseo_title', $seo_title);
        update_post_meta($home_page_id, '_yoast_wpseo_metadesc', $seo_description);
        update_post_meta($home_page_id, '_yoast_wpseo_focuskw', $seo_keyphrase);
        update_post_meta($home_page_id, '_yoast_wpseo_linkdex', '80');
        update_post_meta($home_page_id, '_yoast_wpseo_content_score', '90');
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_page_id);
    }
}
add_action('after_switch_theme', 'ecl_ensure_home_page');
add_action('admin_init', 'ecl_ensure_home_page');
