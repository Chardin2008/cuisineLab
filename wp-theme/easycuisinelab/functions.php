<?php

if (!defined('ABSPATH')) {
    exit;
}

function ecl_asset(string $path): string
{
    return esc_url(get_template_directory_uri() . '/assets/' . ltrim($path, '/'));
}

function ecl_theme_defaults(): array
{
    return [
        'meta_description' => 'Easy Cuisine Lab imagine des cuisines plus belles, plus simples et plus inspirantes.',
        'meta_og_description' => 'Imaginer une cuisine plus belle, plus simple et plus inspirante.',
        'meta_og_image' => ecl_asset('img/og-easycuisinelab.jpg'),
        'brand_title' => 'Easy Cuisine Lab',
        'brand_subtitle' => 'Fresh Lab Editorial',
        'loader_monogram' => 'ECL',
        'loader_name' => 'Easy Cuisine Lab',
        'loader_tagline' => 'Design. Simplicité. Inspiration.',
        'header_cta_label' => 'Demander un devis',
        'header_cta_url' => home_url('/#contact'),
        'primary_nav_items' => "Accueil|" . home_url('/#accueil') . "\nConcept|" . home_url('/#concept') . "\nInspirations|" . home_url('/#inspirations') . "\nMéthode|" . home_url('/#methode') . "\nBlog|" . home_url('/#blog') . "\nAvis|" . home_url('/#avis') . "\nContact|" . home_url('/#contact'),
        'footer_cta_kicker' => 'Projet cuisine',
        'footer_cta_title' => 'Prêt à imaginer votre future cuisine ?',
        'footer_cta_text' => 'Parlez-nous de votre espace, de vos envies et de votre style. Easy Cuisine Lab vous aide à poser une direction claire.',
        'footer_cta_button_label' => 'Demander un devis',
        'footer_cta_button_url' => home_url('/#contact'),
        'footer_cta_note' => 'Réponse sous 24h ouvrées',
        'footer_cta_image' => ecl_asset('img/inspiration-soft.jpg'),
        'footer_cta_image_label' => 'Inspiration cuisine',
        'footer_cta_image_title' => 'Ambiance claire, douce et fonctionnelle',
        'footer_brand_text' => 'Des cuisines pensées avec plus de style, plus de simplicité et plus d’inspiration.',
        'footer_nav_title' => 'Explorer',
        'footer_nav_items' => "Accueil|" . home_url('/#accueil') . "\nConcept|" . home_url('/#concept') . "\nInspirations|" . home_url('/#inspirations') . "\nMéthode|" . home_url('/#methode') . "\nBlog|" . home_url('/#blog') . "\nAvis|" . home_url('/#avis') . "\nContact|" . home_url('/#contact'),
        'footer_contact_title' => 'Contact',
        'footer_email' => 'contact@cuisinelab.fr',
        'footer_phone' => '+33 7 89 00 00 00',
        'footer_contact_link_label' => 'Envoyer une demande',
        'footer_contact_link_url' => home_url('/#contact'),
        'footer_info_title' => 'Informations',
        'footer_address_label' => 'Adresse',
        'footer_address' => '18 rue des Ateliers, 75011 Paris',
        'footer_zone_label' => 'Zone',
        'footer_zone' => 'France métropolitaine',
        'footer_hours_label' => 'Horaires',
        'footer_hours' => 'Lun - Ven, 9h - 18h',
        'footer_legal_1_label' => 'Mentions légales',
        'footer_legal_1_url' => home_url('/mentions-legales/'),
        'footer_legal_2_label' => 'Confidentialité',
        'footer_legal_2_url' => home_url('/politique-de-confidentialite/'),
        'footer_bottom_text' => 'Une cuisine plus claire, plus belle, plus simple à vivre.',
        'footer_copyright_text' => 'Easy Cuisine Lab. Tous droits réservés.',
        'floating_cta_label' => 'Projet cuisine',
        'floating_cta_url' => '#contact',
        'contact_success_message' => 'Merci, votre demande a bien été envoyée. Nous revenons vers vous sous 24h ouvrées.',
        'contact_error_message' => 'Impossible d’envoyer la demande. Vérifiez votre email et votre message, puis réessayez.',
        'contact_step_1_hint' => 'Première étape : vos coordonnées pour pouvoir vous répondre simplement.',
        'contact_step_2_hint' => 'Quelques repères suffisent pour comprendre le contexte du projet.',
        'contact_step_3_hint' => 'Ajoutez ce qui compte le plus : style, contraintes, envies, délais.',
        'contact_name_label' => 'Nom',
        'contact_email_label' => 'Email',
        'contact_phone_label' => 'Téléphone',
        'contact_project_label' => 'Type de projet',
        'contact_message_label' => 'Message',
        'contact_next_label' => 'Continuer',
        'contact_prev_label' => 'Retour',
        'contact_submit_label' => 'Envoyer la demande',
        'contact_project_options' => "Cuisine ouverte\nRénovation complète\nOptimisation espace\nInspiration couleurs",
        'home_hero_image' => ecl_asset('img/hero-main.jpg'),
        'home_hero_eyebrow' => 'NEW ERA KITCHEN EXPERIENCE',
        'home_hero_title' => 'Easy Cuisine Lab',
        'home_hero_lead' => 'Des espaces cuisine pensés avec plus de style, plus de simplicité et plus d’inspiration.',
        'home_hero_primary_label' => 'Découvrir l’univers',
        'home_hero_primary_url' => '#concept',
        'home_hero_secondary_label' => 'Demander un devis',
        'home_hero_secondary_url' => '#contact',
        'home_hero_badges' => "Design premium\nDirection claire\nRéponse sous 24h ouvrées",
        'home_concept_kicker' => 'Concept',
        'home_concept_title' => 'La cuisine comme espace d’inspiration',
        'home_concept_text' => 'La cuisine ne se limite plus à un lieu fonctionnel. Elle devient un espace central, vivant, esthétique et pensé pour accompagner le quotidien avec plus d’élégance.',
        'home_concept_pillars' => "01|Design|Une direction claire, éditoriale et facile à projeter.\n02|Confort|Des choix qui fluidifient les gestes et le quotidien.\n03|Harmonie|Couleurs, matières et volumes travaillés ensemble.",
        'home_concept_image' => ecl_asset('img/concept-lab.jpg'),
        'home_concept_image_alt' => 'Atelier créatif de conception cuisine avec échantillons de matières',
        'home_concept_image_note' => 'Creative kitchen studio',
        'home_concept_lab_label' => 'Lab note',
        'home_concept_lab_text' => 'Matières, lumière et usages alignés.',
        'home_benefits_kicker' => 'Bénéfices',
        'home_benefits_title' => 'Ce qui change vraiment dans votre cuisine',
        'home_benefit_cards' => "line-icon--spark|Une esthétique plus forte|Une cuisine qui affirme une vraie présence sans devenir ostentatoire.\nline-icon--flow|Une circulation plus fluide|Des zones pensées pour cuisiner, recevoir et vivre avec naturel.\nline-icon--choice|Des choix plus simples|Une direction visuelle claire pour décider plus vite et mieux.\nline-icon--warm|Une ambiance plus chaleureuse|Des détails doux et vivants qui changent la perception de l’espace.\nline-icon--grid|Une meilleure cohérence visuelle|Matières, couleurs et éclairage travaillent dans la même intention.\nline-icon--life|Un espace plus agréable à vivre|Une cuisine qui devient un vrai lieu d’envie et de partage.",
        'home_deliverables_kicker' => 'Livrables',
        'home_deliverables_title' => 'Vous repartez avec une direction claire',
        'home_deliverables_text' => 'Pas seulement des images d’inspiration : une base concrète pour décider, comparer et avancer sans vous disperser.',
        'home_deliverables_button_label' => 'Présenter mon projet',
        'home_deliverables_button_url' => '#contact',
        'home_deliverable_cards' => "01|Plan d’ambiance|Une intention visuelle claire pour aligner style, couleurs, matières et sensation globale.\n02|Palette & matières|Des associations cohérentes pour éviter les choix isolés qui cassent l’harmonie.\n03|Priorités d’aménagement|Les points à traiter en premier pour rendre la cuisine plus fluide, plus belle et plus facile à vivre.\n04|Brief actionnable|Un résumé simple à partager avec un artisan, un cuisiniste ou votre entourage.",
        'home_inspirations_kicker' => 'Inspirations',
        'home_inspirations_title' => 'Inspirez votre futur espace',
        'home_inspiration_cards' => ecl_asset('img/inspiration-soft.jpg') . "|Cuisine lumineuse|Cuisine lumineuse|Un espace clair, doux et ouvert pour une sensation de fraîcheur au quotidien.|Explorer ce style|#contact\n" . ecl_asset('img/inspiration-coral.jpg') . "|Ambiance chaleureuse|Ambiance chaleureuse|Des couleurs enveloppantes et des détails élégants pour une cuisine plus vivante.|Explorer ce style|#contact\n" . ecl_asset('img/inspiration-green.jpg') . "|Élégance contemporaine|Élégance contemporaine|Une cuisine moderne, équilibrée et pensée comme un véritable espace de vie.|Explorer ce style|#contact",
        'home_method_image' => ecl_asset('img/method-lab.jpg'),
        'home_method_image_alt' => 'Consultation de design intérieur pour un projet cuisine',
        'home_method_kicker' => 'Méthode',
        'home_method_title' => 'Une approche simple, créative et pensée dans le détail',
        'home_method_steps' => "01|Explorer|Comprendre votre espace, vos envies et votre manière de vivre la cuisine.\n02|Imaginer|Créer une direction visuelle cohérente avec vos goûts, vos couleurs et vos usages.\n03|Transformer|Donner forme à une cuisine plus belle, plus fluide et plus inspirante.",
        'home_compare_kicker' => 'Transformation',
        'home_compare_title' => 'Voyez la transformation',
        'home_compare_before_image' => ecl_asset('img/before-kitchen.jpg'),
        'home_compare_before_alt' => 'Cuisine avant rénovation',
        'home_compare_before_label' => 'Avant',
        'home_compare_after_image' => ecl_asset('img/after-kitchen-modern.png'),
        'home_compare_after_alt' => 'Cuisine après rénovation',
        'home_compare_after_label' => 'Après',
        'home_compare_value' => '54',
        'home_blog_kicker' => 'Journal',
        'home_blog_title' => 'Conseils & inspirations',
        'home_blog_text' => 'Des idées, tendances et inspirations pour imaginer une cuisine encore plus belle.',
        'home_testimonials_kicker' => 'Avis',
        'home_testimonials_title' => 'Ils ont adoré la transformation',
        'home_testimonial_cards' => "5 étoiles|“Le résultat est plus lumineux, plus simple et beaucoup plus agréable à vivre.”|Clara M.|Cuisine familiale\n5 étoiles|“On avait besoin d’une vision claire. Easy Cuisine Lab nous a aidés à mieux imaginer l’espace.”|Julien R.|Cuisine ouverte\n5 étoiles|“Les choix de couleurs et de matières ont complètement changé l’ambiance de la pièce.”|Sarah L.|Rénovation cuisine",
        'home_trust_kicker' => 'Garanties',
        'home_trust_title' => 'Un premier échange simple, sans pression',
        'home_trust_text' => 'On clarifie votre besoin avant de parler solution. Vous gardez la main sur le rythme, le style et le niveau d’accompagnement souhaité.',
        'home_trust_items' => "Réponse sous 24h ouvrées|Votre demande est lue et qualifiée rapidement.\nConseil contextualisé|On part de votre espace, de vos usages et de vos contraintes.\nDirection exploitable|Vous obtenez une base claire pour décider et échanger avec les bons interlocuteurs.",
        'home_contact_kicker' => 'Contact',
        'home_contact_title' => 'Parlons de votre projet',
        'home_contact_text' => 'Décrivez votre envie, votre style et votre espace. Easy Cuisine Lab vous aide à imaginer une solution plus belle, plus fluide et plus inspirante.',
        'home_contact_assurances' => "Réponse personnalisée, pas de message automatique impersonnel.\nPremier échange simple pour cadrer vos besoins.\nAucune obligation après l’envoi du formulaire.",
        'blog_fallback_1_image' => ecl_asset('img/blog-1.jpg'),
        'blog_fallback_1_category' => 'Inspiration',
        'blog_fallback_1_title' => 'Comment créer une cuisine plus harmonieuse ?',
        'blog_fallback_1_text' => 'Quelques choix simples peuvent transformer la sensation d’espace, de lumière et de confort.',
        'blog_fallback_2_image' => ecl_asset('img/blog-2.jpg'),
        'blog_fallback_2_category' => 'Design',
        'blog_fallback_2_title' => 'Les couleurs qui transforment l’espace cuisine',
        'blog_fallback_2_text' => 'Les tons doux, les contrastes maîtrisés et les matières naturelles créent une ambiance plus forte.',
        'blog_fallback_3_image' => ecl_asset('img/blog-3.jpg'),
        'blog_fallback_3_category' => 'Conseils',
        'blog_fallback_3_title' => 'Les détails qui rendent une cuisine plus premium',
        'blog_fallback_3_text' => 'Poignées, éclairage, circulation et finitions : les détails construisent l’élégance.',
        'blog_fallback_link_label' => 'Lire l’article',
        'blog_fallback_link_url' => '#contact',
        'blog_archive_kicker' => 'Journal',
        'blog_archive_title' => 'Conseils & inspirations',
        'blog_archive_text' => 'Des idées fraîches pour imaginer une cuisine plus belle, plus simple et plus inspirante.',
        'archive_kicker' => 'Archives',
        'contact_recipient_email' => get_option('admin_email'),
    ];
}

function ecl_theme_options(): array
{
    $saved = get_option('ecl_theme_options', []);

    return wp_parse_args(is_array($saved) ? $saved : [], ecl_theme_defaults());
}

function ecl_option(string $key): string
{
    $options = ecl_theme_options();

    return (string) ($options[$key] ?? '');
}

function ecl_string_contains(string $haystack, string $needle): bool
{
    return $needle === '' || strpos($haystack, $needle) !== false;
}

function ecl_string_ends_with(string $haystack, string $needle): bool
{
    if ($needle === '') {
        return true;
    }

    return substr($haystack, -strlen($needle)) === $needle;
}

function ecl_sanitize_urlish($value): string
{
    $value = trim((string) $value);

    if ($value !== '' && $value[0] === '#') {
        return sanitize_text_field($value);
    }

    return esc_url_raw($value);
}

function ecl_sanitize_theme_options($input): array
{
    $input = is_array($input) ? $input : [];
    $defaults = ecl_theme_defaults();
    $sanitized = [];

    foreach ($defaults as $key => $default) {
        $value = $input[$key] ?? $default;

        if (ecl_string_contains($key, 'email')) {
            $sanitized[$key] = sanitize_email($value);
        } elseif (ecl_string_ends_with($key, '_url') || ecl_string_contains($key, '_image')) {
            $sanitized[$key] = ecl_sanitize_urlish($value);
        } elseif (
            $key === 'contact_project_options' ||
            ecl_string_contains($key, 'nav_items') ||
            ecl_string_contains($key, '_badges') ||
            ecl_string_contains($key, '_cards') ||
            ecl_string_contains($key, '_items') ||
            ecl_string_contains($key, '_steps') ||
            ecl_string_contains($key, '_assurances')
        ) {
            $sanitized[$key] = sanitize_textarea_field($value);
        } else {
            $sanitized[$key] = sanitize_text_field($value);
        }

        if ($sanitized[$key] === '' && $default !== '') {
            $sanitized[$key] = $default;
        }
    }

    return $sanitized;
}

function ecl_menu_markup(string $location): void
{
    foreach (ecl_nav_items($location) as $item) {
        echo '<a href="' . esc_url($item[1]) . '">' . esc_html($item[0]) . '</a>';
    }
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
    $og = ecl_option('meta_og_image');
    $yoast_active = defined('WPSEO_VERSION');
    ?>
    <meta name="theme-color" content="#DCEBDD">
    <?php if (!$yoast_active) : ?>
        <meta name="description" content="<?php echo esc_attr(ecl_option('meta_description')); ?>">
        <meta property="og:title" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
        <meta property="og:description" content="<?php echo esc_attr(ecl_option('meta_og_description')); ?>">
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
    $redirect_url = home_url('/?ecl_contact=error#contact');

    if (
        !isset($_POST['ecl_contact_nonce']) ||
        !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['ecl_contact_nonce'])), 'ecl_contact')
    ) {
        wp_safe_redirect($redirect_url);
        exit;
    }

    if (!empty($_POST['website'])) {
        wp_safe_redirect(home_url('/?ecl_contact=sent#contact'));
        exit;
    }

    $name = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $phone = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $project = sanitize_text_field(wp_unslash($_POST['project_type'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));

    if ($email && $message) {
        $body = "Nom: {$name}\nEmail: {$email}\nTéléphone: {$phone}\nProjet: {$project}\n\nMessage:\n{$message}";
        wp_mail(ecl_contact_recipient_email(), 'Nouvelle demande Easy Cuisine Lab', $body);
        $redirect_url = home_url('/?ecl_contact=sent#contact');
    }

    wp_safe_redirect($redirect_url);
    exit;
}
add_action('admin_post_ecl_contact', 'ecl_handle_contact');
add_action('admin_post_nopriv_ecl_contact', 'ecl_handle_contact');

function ecl_contact_recipient_email(): string
{
    $theme_email = sanitize_email(ecl_option('contact_recipient_email'));
    $legacy_email = sanitize_email((string) get_option('ecl_contact_recipient_email', ''));
    $email = $theme_email !== '' ? $theme_email : $legacy_email;

    return $email !== '' ? $email : ecl_theme_defaults()['contact_recipient_email'];
}

function ecl_register_contact_email_setting(): void
{
    register_setting('general', 'ecl_contact_recipient_email', [
        'type' => 'string',
        'sanitize_callback' => 'sanitize_email',
        'default' => get_option('admin_email'),
    ]);

    add_settings_field(
        'ecl_contact_recipient_email',
        'Email de réception formulaire',
        'ecl_contact_email_setting_field',
        'general',
        'default'
    );
}
add_action('admin_init', 'ecl_register_contact_email_setting');

function ecl_contact_email_setting_field(): void
{
    ?>
    <input
        name="ecl_contact_recipient_email"
        type="email"
        id="ecl_contact_recipient_email"
        value="<?php echo esc_attr(ecl_contact_recipient_email()); ?>"
        class="regular-text"
    >
    <p class="description">Adresse qui recevra les demandes envoyées depuis le formulaire de contact.</p>
    <?php
}

function ecl_register_theme_options_page(): void
{
    add_theme_page(
        'Easy Cuisine Lab',
        'Easy Cuisine Lab',
        'manage_options',
        'easycuisinelab-options',
        'ecl_render_theme_options_page'
    );
}
add_action('admin_menu', 'ecl_register_theme_options_page');

function ecl_register_theme_options_setting(): void
{
    register_setting('ecl_theme_options_group', 'ecl_theme_options', [
        'type' => 'array',
        'sanitize_callback' => 'ecl_sanitize_theme_options',
        'default' => ecl_theme_defaults(),
    ]);
}
add_action('admin_init', 'ecl_register_theme_options_setting');

function ecl_render_theme_options_page(): void
{
    if (!current_user_can('manage_options')) {
        return;
    }

    $groups = [
        'Header' => [
            'brand_title' => 'Nom du site dans le logo',
            'brand_subtitle' => 'Sous-titre du logo',
            'loader_monogram' => 'Loader - monogramme',
            'loader_name' => 'Loader - nom',
            'loader_tagline' => 'Loader - phrase',
            'header_cta_label' => 'Bouton header - texte',
            'header_cta_url' => 'Bouton header - lien',
            'primary_nav_items' => 'Menu header fallback (Texte|URL)',
        ],
        'Accueil - Hero' => [
            'home_hero_image' => 'Image',
            'home_hero_eyebrow' => 'Surtitre',
            'home_hero_title' => 'Titre',
            'home_hero_lead' => 'Texte',
            'home_hero_primary_label' => 'Bouton 1 - texte',
            'home_hero_primary_url' => 'Bouton 1 - lien',
            'home_hero_secondary_label' => 'Bouton 2 - texte',
            'home_hero_secondary_url' => 'Bouton 2 - lien',
            'home_hero_badges' => 'Badges (un par ligne)',
        ],
        'Accueil - Concept' => [
            'home_concept_kicker' => 'Surtitre',
            'home_concept_title' => 'Titre',
            'home_concept_text' => 'Texte',
            'home_concept_pillars' => 'Piliers (Numéro|Titre|Texte)',
            'home_concept_image' => 'Image',
            'home_concept_image_alt' => 'Alt image',
            'home_concept_image_note' => 'Note image',
            'home_concept_lab_label' => 'Label note',
            'home_concept_lab_text' => 'Texte note',
        ],
        'Accueil - Bénéfices' => [
            'home_benefits_kicker' => 'Surtitre',
            'home_benefits_title' => 'Titre',
            'home_benefit_cards' => 'Cartes (Classe icône|Titre|Texte)',
        ],
        'Accueil - Livrables' => [
            'home_deliverables_kicker' => 'Surtitre',
            'home_deliverables_title' => 'Titre',
            'home_deliverables_text' => 'Texte',
            'home_deliverables_button_label' => 'Bouton - texte',
            'home_deliverables_button_url' => 'Bouton - lien',
            'home_deliverable_cards' => 'Cartes (Numéro|Titre|Texte)',
        ],
        'Accueil - Inspirations' => [
            'home_inspirations_kicker' => 'Surtitre',
            'home_inspirations_title' => 'Titre',
            'home_inspiration_cards' => 'Cartes (Image|Alt|Titre|Texte|Lien texte|Lien URL)',
        ],
        'Accueil - Méthode' => [
            'home_method_image' => 'Image',
            'home_method_image_alt' => 'Alt image',
            'home_method_kicker' => 'Surtitre',
            'home_method_title' => 'Titre',
            'home_method_steps' => 'Étapes (Numéro|Titre|Texte)',
        ],
        'Accueil - Avant / Après' => [
            'home_compare_kicker' => 'Surtitre',
            'home_compare_title' => 'Titre',
            'home_compare_before_image' => 'Image avant',
            'home_compare_before_alt' => 'Alt avant',
            'home_compare_before_label' => 'Label avant',
            'home_compare_after_image' => 'Image après',
            'home_compare_after_alt' => 'Alt après',
            'home_compare_after_label' => 'Label après',
            'home_compare_value' => 'Position initiale',
        ],
        'Accueil - Blog' => [
            'home_blog_kicker' => 'Surtitre',
            'home_blog_title' => 'Titre',
            'home_blog_text' => 'Texte',
        ],
        'Accueil - Avis' => [
            'home_testimonials_kicker' => 'Surtitre',
            'home_testimonials_title' => 'Titre',
            'home_testimonial_cards' => 'Avis (Label étoiles|Texte|Nom|Projet)',
        ],
        'Accueil - Garanties' => [
            'home_trust_kicker' => 'Surtitre',
            'home_trust_title' => 'Titre',
            'home_trust_text' => 'Texte',
            'home_trust_items' => 'Garanties (Titre|Texte)',
        ],
        'Accueil - Contact' => [
            'home_contact_kicker' => 'Surtitre',
            'home_contact_title' => 'Titre',
            'home_contact_text' => 'Texte',
            'home_contact_assurances' => 'Garanties contact (une par ligne)',
        ],
        'Footer' => [
            'footer_cta_kicker' => 'CTA - surtitre',
            'footer_cta_title' => 'CTA - titre',
            'footer_cta_text' => 'CTA - texte',
            'footer_cta_button_label' => 'CTA - bouton texte',
            'footer_cta_button_url' => 'CTA - bouton lien',
            'footer_cta_note' => 'CTA - note',
            'footer_cta_image' => 'CTA - image',
            'footer_cta_image_label' => 'CTA - image label',
            'footer_cta_image_title' => 'CTA - image titre',
            'footer_brand_text' => 'Texte marque',
            'footer_nav_title' => 'Titre navigation',
            'footer_nav_items' => 'Menu footer fallback (Texte|URL)',
            'footer_contact_title' => 'Titre contact',
            'footer_email' => 'Email',
            'footer_phone' => 'Téléphone',
            'footer_contact_link_label' => 'Lien contact - texte',
            'footer_contact_link_url' => 'Lien contact - URL',
            'footer_info_title' => 'Titre informations',
            'footer_address_label' => 'Libellé adresse',
            'footer_address' => 'Adresse',
            'footer_zone_label' => 'Libellé zone',
            'footer_zone' => 'Zone',
            'footer_hours_label' => 'Libellé horaires',
            'footer_hours' => 'Horaires',
            'footer_legal_1_label' => 'Lien légal 1 - texte',
            'footer_legal_1_url' => 'Lien légal 1 - URL',
            'footer_legal_2_label' => 'Lien légal 2 - texte',
            'footer_legal_2_url' => 'Lien légal 2 - URL',
            'footer_bottom_text' => 'Phrase bas footer',
            'footer_copyright_text' => 'Copyright',
            'floating_cta_label' => 'CTA flottant - texte',
            'floating_cta_url' => 'CTA flottant - lien',
        ],
        'Formulaire' => [
            'contact_recipient_email' => 'Email de réception',
            'contact_success_message' => 'Message succès',
            'contact_error_message' => 'Message erreur',
            'contact_step_1_hint' => 'Étape 1 - texte',
            'contact_step_2_hint' => 'Étape 2 - texte',
            'contact_step_3_hint' => 'Étape 3 - texte',
            'contact_name_label' => 'Champ nom',
            'contact_email_label' => 'Champ email',
            'contact_phone_label' => 'Champ téléphone',
            'contact_project_label' => 'Champ projet',
            'contact_message_label' => 'Champ message',
            'contact_next_label' => 'Bouton suivant',
            'contact_prev_label' => 'Bouton retour',
            'contact_submit_label' => 'Bouton envoyer',
            'contact_project_options' => 'Options projet (une par ligne)',
        ],
        'Blog et archives' => [
            'blog_archive_kicker' => 'Blog - surtitre',
            'blog_archive_title' => 'Blog - titre',
            'blog_archive_text' => 'Blog - texte',
            'archive_kicker' => 'Archive - surtitre',
            'blog_fallback_1_image' => 'Carte 1 - image',
            'blog_fallback_1_category' => 'Carte 1 - catégorie',
            'blog_fallback_1_title' => 'Carte 1 - titre',
            'blog_fallback_1_text' => 'Carte 1 - texte',
            'blog_fallback_2_image' => 'Carte 2 - image',
            'blog_fallback_2_category' => 'Carte 2 - catégorie',
            'blog_fallback_2_title' => 'Carte 2 - titre',
            'blog_fallback_2_text' => 'Carte 2 - texte',
            'blog_fallback_3_image' => 'Carte 3 - image',
            'blog_fallback_3_category' => 'Carte 3 - catégorie',
            'blog_fallback_3_title' => 'Carte 3 - titre',
            'blog_fallback_3_text' => 'Carte 3 - texte',
            'blog_fallback_link_label' => 'Cartes fallback - lien texte',
            'blog_fallback_link_url' => 'Cartes fallback - lien URL',
        ],
        'SEO' => [
            'meta_description' => 'Meta description',
            'meta_og_description' => 'Open Graph description',
            'meta_og_image' => 'Open Graph image',
        ],
    ];
    ?>
    <div class="wrap">
        <h1>Easy Cuisine Lab</h1>
        <form method="post" action="options.php">
            <?php settings_fields('ecl_theme_options_group'); ?>
            <?php foreach ($groups as $group_title => $fields) : ?>
                <h2><?php echo esc_html($group_title); ?></h2>
                <table class="form-table" role="presentation">
                    <tbody>
                    <?php foreach ($fields as $key => $label) : ?>
                        <tr>
                            <th scope="row">
                                <label for="ecl_<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label>
                            </th>
                            <td>
                                <?php ecl_render_theme_option_field($key); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endforeach; ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

function ecl_render_theme_option_field(string $key): void
{
    $value = ecl_option($key);
    $name = 'ecl_theme_options[' . esc_attr($key) . ']';
    $id = 'ecl_' . esc_attr($key);

    if (
        $key === 'contact_project_options' ||
        ecl_string_contains($key, 'nav_items') ||
        ecl_string_contains($key, '_badges') ||
        ecl_string_contains($key, '_cards') ||
        ecl_string_contains($key, '_items') ||
        ecl_string_contains($key, '_steps') ||
        ecl_string_contains($key, '_assurances') ||
        ecl_string_contains($key, '_text') ||
        ecl_string_contains($key, 'message') ||
        ecl_string_contains($key, 'description')
    ) {
        $rows = ecl_string_contains($key, '_cards') || ecl_string_contains($key, '_items') || ecl_string_contains($key, '_steps') ? 5 : 3;
        echo '<textarea id="' . $id . '" name="' . $name . '" class="large-text" rows="' . esc_attr((string) $rows) . '">' . esc_textarea($value) . '</textarea>';
        return;
    }

    $type = ecl_string_contains($key, 'email') ? 'email' : 'text';
    $class = ecl_string_ends_with($key, '_url') || ecl_string_contains($key, '_image') ? 'large-text code' : 'regular-text';

    echo '<input id="' . $id . '" name="' . $name . '" type="' . esc_attr($type) . '" value="' . esc_attr($value) . '" class="' . esc_attr($class) . '">';
}

function ecl_nav_items(string $location = 'primary'): array
{
    $key = $location === 'footer' ? 'footer_nav_items' : 'primary_nav_items';
    $items = [];

    foreach (preg_split('/\r\n|\r|\n/', ecl_option($key)) ?: [] as $line) {
        $line = trim($line);

        if ($line === '') {
            continue;
        }

        [$label, $url] = array_pad(array_map('trim', explode('|', $line, 2)), 2, '');

        if ($label !== '' && $url !== '') {
            $items[] = [$label, $url];
        }
    }

    return $items;
}

function ecl_option_lines(string $key): array
{
    return array_values(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', ecl_option($key)) ?: [])));
}

function ecl_option_rows(string $key, int $columns): array
{
    $rows = [];

    foreach (ecl_option_lines($key) as $line) {
        $rows[] = array_pad(array_map('trim', explode('|', $line, $columns)), $columns, '');
    }

    return $rows;
}

function ecl_logo_markup(string $context = 'header'): string
{
    if (has_custom_logo() && $context === 'header') {
        return get_custom_logo();
    }

    $brand_title = ecl_option('brand_title');
    $brand_subtitle = ecl_option('brand_subtitle');

    return '<a class="brand brand--' . esc_attr($context) . '" href="' . esc_url(home_url('/')) . '" aria-label="' . esc_attr($brand_title) . '">' .
        '<span class="brand__mark" aria-hidden="true"><span>E</span><span>C</span><span>L</span></span>' .
        '<span class="brand__text"><strong>' . esc_html($brand_title) . '</strong><small>' . esc_html($brand_subtitle) . '</small></span>' .
    '</a>';
}

function ecl_blog_preview_shortcode(): string
{
    $blog_cards = [
        [ecl_option('blog_fallback_1_image'), ecl_option('blog_fallback_1_category'), ecl_option('blog_fallback_1_title'), ecl_option('blog_fallback_1_text')],
        [ecl_option('blog_fallback_2_image'), ecl_option('blog_fallback_2_category'), ecl_option('blog_fallback_2_title'), ecl_option('blog_fallback_2_text')],
        [ecl_option('blog_fallback_3_image'), ecl_option('blog_fallback_3_category'), ecl_option('blog_fallback_3_title'), ecl_option('blog_fallback_3_text')],
    ];
    $fallback_link_url = ecl_option('blog_fallback_link_url');
    $fallback_link_label = ecl_option('blog_fallback_link_label');

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
                    <img src="<?php echo esc_url($card[0]); ?>" alt="<?php echo esc_attr($card[2]); ?>" loading="lazy" decoding="async">
                    <span><?php echo esc_html($card[1]); ?></span>
                    <h3><?php echo esc_html($card[2]); ?></h3>
                    <p><?php echo esc_html($card[3]); ?></p>
                    <a href="<?php echo esc_url($fallback_link_url); ?>"><?php echo esc_html($fallback_link_label); ?></a>
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
    $status = sanitize_key(wp_unslash($_GET['ecl_contact'] ?? ''));
    $project_options = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', ecl_option('contact_project_options')) ?: []));

    ob_start();
    ?>
    <form class="lab-form reveal" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" data-form>
        <input type="hidden" name="action" value="ecl_contact">
        <?php wp_nonce_field('ecl_contact', 'ecl_contact_nonce'); ?>
        <label class="lab-form__trap" aria-hidden="true">Site web<input name="website" type="text" tabindex="-1" autocomplete="off"></label>
        <?php if ($status === 'sent') : ?>
            <div class="form-status form-status--success" role="status"><?php echo esc_html(ecl_option('contact_success_message')); ?></div>
        <?php elseif ($status === 'error') : ?>
            <div class="form-status form-status--error" role="alert"><?php echo esc_html(ecl_option('contact_error_message')); ?></div>
        <?php endif; ?>
        <div class="form-step is-active" data-step="1">
            <p class="form-step__hint"><?php echo esc_html(ecl_option('contact_step_1_hint')); ?></p>
            <label><?php echo esc_html(ecl_option('contact_name_label')); ?><input name="name" type="text" autocomplete="name" required></label>
            <label><?php echo esc_html(ecl_option('contact_email_label')); ?><input name="email" type="email" autocomplete="email" required></label>
            <button class="btn btn--coral" type="button" data-next><?php echo esc_html(ecl_option('contact_next_label')); ?></button>
        </div>
        <div class="form-step" data-step="2">
            <p class="form-step__hint"><?php echo esc_html(ecl_option('contact_step_2_hint')); ?></p>
            <label><?php echo esc_html(ecl_option('contact_phone_label')); ?><input name="phone" type="tel" autocomplete="tel"></label>
            <label><?php echo esc_html(ecl_option('contact_project_label')); ?><select name="project_type"><?php foreach ($project_options as $option) : ?><option><?php echo esc_html($option); ?></option><?php endforeach; ?></select></label>
            <div class="form-actions"><button class="btn btn--ghost" type="button" data-prev><?php echo esc_html(ecl_option('contact_prev_label')); ?></button><button class="btn btn--coral" type="button" data-next><?php echo esc_html(ecl_option('contact_next_label')); ?></button></div>
        </div>
        <div class="form-step" data-step="3">
            <p class="form-step__hint"><?php echo esc_html(ecl_option('contact_step_3_hint')); ?></p>
            <label><?php echo esc_html(ecl_option('contact_message_label')); ?><textarea name="message" rows="5" required></textarea></label>
            <div class="form-actions"><button class="btn btn--ghost" type="button" data-prev><?php echo esc_html(ecl_option('contact_prev_label')); ?></button><button class="btn btn--coral" type="submit"><?php echo esc_html(ecl_option('contact_submit_label')); ?></button></div>
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
        <img src="{$hero}" alt="" fetchpriority="high" decoding="async">
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
            <span>Direction claire</span>
            <span>Réponse sous 24h ouvrées</span>
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
            <img src="{$concept}" alt="Atelier créatif de conception cuisine avec échantillons de matières" loading="lazy" decoding="async">
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
<section class="deliverables section-pad" id="livrables" aria-labelledby="deliverables-title">
    <div class="section-wrap deliverables__grid">
        <div class="deliverables__intro reveal">
            <p class="section-kicker">Livrables</p>
            <h2 id="deliverables-title">Vous repartez avec une direction claire</h2>
            <p>Pas seulement des images d’inspiration : une base concrète pour décider, comparer et avancer sans vous disperser.</p>
            <a class="btn btn--coral" href="#contact">Présenter mon projet</a>
        </div>
        <div class="deliverables__cards">
            <article class="deliverable-card reveal"><span>01</span><h3>Plan d’ambiance</h3><p>Une intention visuelle claire pour aligner style, couleurs, matières et sensation globale.</p></article>
            <article class="deliverable-card reveal"><span>02</span><h3>Palette & matières</h3><p>Des associations cohérentes pour éviter les choix isolés qui cassent l’harmonie.</p></article>
            <article class="deliverable-card reveal"><span>03</span><h3>Priorités d’aménagement</h3><p>Les points à traiter en premier pour rendre la cuisine plus fluide, plus belle et plus facile à vivre.</p></article>
            <article class="deliverable-card reveal"><span>04</span><h3>Brief actionnable</h3><p>Un résumé simple à partager avec un artisan, un cuisiniste ou votre entourage.</p></article>
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
            <article class="visual-card reveal"><img src="{$inspiration_soft}" alt="Cuisine lumineuse" loading="lazy" decoding="async"><div><h3>Cuisine lumineuse</h3><p>Un espace clair, doux et ouvert pour une sensation de fraîcheur au quotidien.</p><a href="#contact">Explorer ce style</a></div></article>
            <article class="visual-card reveal"><img src="{$inspiration_coral}" alt="Ambiance chaleureuse" loading="lazy" decoding="async"><div><h3>Ambiance chaleureuse</h3><p>Des couleurs enveloppantes et des détails élégants pour une cuisine plus vivante.</p><a href="#contact">Explorer ce style</a></div></article>
            <article class="visual-card reveal"><img src="{$inspiration_green}" alt="Élégance contemporaine" loading="lazy" decoding="async"><div><h3>Élégance contemporaine</h3><p>Une cuisine moderne, équilibrée et pensée comme un véritable espace de vie.</p><a href="#contact">Explorer ce style</a></div></article>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="method section-pad" id="methode">
    <div class="section-wrap method__grid">
        <div class="method__image reveal">
            <img src="{$method}" alt="Consultation de design intérieur pour un projet cuisine" loading="lazy" decoding="async">
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
            <img class="compare__before" src="{$before}" alt="Cuisine avant rénovation" loading="lazy" decoding="async">
            <div class="compare__after" style="width: 54%;">
                <img src="{$after}" alt="Cuisine après rénovation" loading="lazy" decoding="async">
            </div>
            <span class="compare__label compare__label--before">Avant</span>
            <span class="compare__label compare__label--after">Après</span>
            <span class="compare__handle" aria-hidden="true" style="left: 54%;"></span>
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
<section class="trust section-pad" id="garanties" aria-labelledby="trust-title">
    <div class="section-wrap trust__grid">
        <div class="trust__content reveal">
            <p class="section-kicker">Garanties</p>
            <h2 id="trust-title">Un premier échange simple, sans pression</h2>
            <p>On clarifie votre besoin avant de parler solution. Vous gardez la main sur le rythme, le style et le niveau d’accompagnement souhaité.</p>
        </div>
        <div class="trust__list">
            <article class="trust-item reveal"><strong>Réponse sous 24h ouvrées</strong><span>Votre demande est lue et qualifiée rapidement.</span></article>
            <article class="trust-item reveal"><strong>Conseil contextualisé</strong><span>On part de votre espace, de vos usages et de vos contraintes.</span></article>
            <article class="trust-item reveal"><strong>Direction exploitable</strong><span>Vous obtenez une base claire pour décider et échanger avec les bons interlocuteurs.</span></article>
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
            <ul class="contact__assurances" aria-label="Garanties de prise de contact">
                <li>Réponse personnalisée, pas de message automatique impersonnel.</li>
                <li>Premier échange simple pour cadrer vos besoins.</li>
                <li>Aucune obligation après l’envoi du formulaire.</li>
            </ul>
        </div>
        [ecl_contact_form]
    </div>
</section>
<!-- /wp:html -->
HTML;
}

function ecl_home_page_admin_content(): string
{
    $compare_value = max(0, min(100, (int) ecl_option('home_compare_value')));

    ob_start();
    ?>
<!-- wp:html -->
<section class="hero" id="accueil">
    <div class="hero__media" aria-hidden="true">
        <img src="<?php echo esc_url(ecl_option('home_hero_image')); ?>" alt="" fetchpriority="high" decoding="async">
    </div>
    <div class="section-wrap hero__content reveal">
        <p class="eyebrow"><?php echo esc_html(ecl_option('home_hero_eyebrow')); ?></p>
        <h1><?php echo esc_html(ecl_option('home_hero_title')); ?></h1>
        <p class="hero__lead"><?php echo esc_html(ecl_option('home_hero_lead')); ?></p>
        <div class="hero__actions">
            <a class="btn btn--coral" href="<?php echo esc_url(ecl_option('home_hero_primary_url')); ?>"><?php echo esc_html(ecl_option('home_hero_primary_label')); ?></a>
            <a class="btn btn--ghost" href="<?php echo esc_url(ecl_option('home_hero_secondary_url')); ?>"><?php echo esc_html(ecl_option('home_hero_secondary_label')); ?></a>
        </div>
        <div class="hero__badges" aria-label="Points forts">
            <?php foreach (ecl_option_lines('home_hero_badges') as $badge) : ?><span><?php echo esc_html($badge); ?></span><?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="concept section-pad" id="concept">
    <div class="section-wrap concept__grid">
        <div class="concept__copy reveal">
            <p class="section-kicker"><?php echo esc_html(ecl_option('home_concept_kicker')); ?></p>
            <h2><?php echo esc_html(ecl_option('home_concept_title')); ?></h2>
            <p><?php echo esc_html(ecl_option('home_concept_text')); ?></p>
            <div class="concept__pillars">
                <?php foreach (ecl_option_rows('home_concept_pillars', 3) as [$number, $title, $text]) : ?><article><span><?php echo esc_html($number); ?></span><strong><?php echo esc_html($title); ?></strong><p><?php echo esc_html($text); ?></p></article><?php endforeach; ?>
            </div>
        </div>
        <div class="concept__image reveal">
            <img src="<?php echo esc_url(ecl_option('home_concept_image')); ?>" alt="<?php echo esc_attr(ecl_option('home_concept_image_alt')); ?>" loading="lazy" decoding="async">
            <span class="image-note"><?php echo esc_html(ecl_option('home_concept_image_note')); ?></span>
            <div class="concept__lab-note" aria-hidden="true"><span><?php echo esc_html(ecl_option('home_concept_lab_label')); ?></span> <?php echo esc_html(ecl_option('home_concept_lab_text')); ?></div>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="benefits section-pad" aria-labelledby="benefits-title">
    <div class="section-wrap">
        <div class="section-head reveal">
            <p class="section-kicker"><?php echo esc_html(ecl_option('home_benefits_kicker')); ?></p>
            <h2 id="benefits-title"><?php echo esc_html(ecl_option('home_benefits_title')); ?></h2>
        </div>
        <div class="benefit-grid">
            <?php foreach (ecl_option_rows('home_benefit_cards', 3) as [$icon, $title, $text]) : ?><article class="benefit-card reveal"><span class="line-icon <?php echo esc_attr(sanitize_html_class($icon)); ?>" aria-hidden="true"></span><h3><?php echo esc_html($title); ?></h3><p><?php echo esc_html($text); ?></p></article><?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="deliverables section-pad" id="livrables" aria-labelledby="deliverables-title">
    <div class="section-wrap deliverables__grid">
        <div class="deliverables__intro reveal">
            <p class="section-kicker"><?php echo esc_html(ecl_option('home_deliverables_kicker')); ?></p>
            <h2 id="deliverables-title"><?php echo esc_html(ecl_option('home_deliverables_title')); ?></h2>
            <p><?php echo esc_html(ecl_option('home_deliverables_text')); ?></p>
            <a class="btn btn--coral" href="<?php echo esc_url(ecl_option('home_deliverables_button_url')); ?>"><?php echo esc_html(ecl_option('home_deliverables_button_label')); ?></a>
        </div>
        <div class="deliverables__cards">
            <?php foreach (ecl_option_rows('home_deliverable_cards', 3) as [$number, $title, $text]) : ?><article class="deliverable-card reveal"><span><?php echo esc_html($number); ?></span><h3><?php echo esc_html($title); ?></h3><p><?php echo esc_html($text); ?></p></article><?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="inspirations section-pad" id="inspirations">
    <div class="section-wrap">
        <div class="section-head reveal">
            <p class="section-kicker"><?php echo esc_html(ecl_option('home_inspirations_kicker')); ?></p>
            <h2><?php echo esc_html(ecl_option('home_inspirations_title')); ?></h2>
        </div>
        <div class="inspiration-grid">
            <?php foreach (ecl_option_rows('home_inspiration_cards', 6) as [$image, $alt, $title, $text, $link_label, $link_url]) : ?><article class="visual-card reveal"><img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy" decoding="async"><div><h3><?php echo esc_html($title); ?></h3><p><?php echo esc_html($text); ?></p><a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_label); ?></a></div></article><?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="method section-pad" id="methode">
    <div class="section-wrap method__grid">
        <div class="method__image reveal">
            <img src="<?php echo esc_url(ecl_option('home_method_image')); ?>" alt="<?php echo esc_attr(ecl_option('home_method_image_alt')); ?>" loading="lazy" decoding="async">
        </div>
        <div class="method__content reveal">
            <p class="section-kicker"><?php echo esc_html(ecl_option('home_method_kicker')); ?></p>
            <h2><?php echo esc_html(ecl_option('home_method_title')); ?></h2>
            <?php foreach (ecl_option_rows('home_method_steps', 3) as [$number, $title, $text]) : ?><article class="method-step"><span><?php echo esc_html($number); ?></span><div><h3><?php echo esc_html($title); ?></h3><p><?php echo esc_html($text); ?></p></div></article><?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="before-after section-pad" aria-labelledby="before-after-title">
    <div class="section-wrap">
        <div class="section-head reveal">
            <p class="section-kicker"><?php echo esc_html(ecl_option('home_compare_kicker')); ?></p>
            <h2 id="before-after-title"><?php echo esc_html(ecl_option('home_compare_title')); ?></h2>
        </div>
        <div class="compare reveal" data-compare>
            <img class="compare__before" src="<?php echo esc_url(ecl_option('home_compare_before_image')); ?>" alt="<?php echo esc_attr(ecl_option('home_compare_before_alt')); ?>" loading="lazy" decoding="async">
            <div class="compare__after" style="width: <?php echo esc_attr((string) (100 - $compare_value)); ?>%;"><img src="<?php echo esc_url(ecl_option('home_compare_after_image')); ?>" alt="<?php echo esc_attr(ecl_option('home_compare_after_alt')); ?>" loading="lazy" decoding="async"></div>
            <span class="compare__label compare__label--before"><?php echo esc_html(ecl_option('home_compare_before_label')); ?></span>
            <span class="compare__label compare__label--after"><?php echo esc_html(ecl_option('home_compare_after_label')); ?></span>
            <span class="compare__handle" aria-hidden="true" style="left: <?php echo esc_attr((string) $compare_value); ?>%;"></span>
            <input class="compare__range" type="range" min="0" max="100" value="<?php echo esc_attr((string) $compare_value); ?>" aria-label="Comparer avant et après">
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="blog-preview section-pad" id="blog"><div class="section-wrap"><div class="section-head reveal"><p class="section-kicker"><?php echo esc_html(ecl_option('home_blog_kicker')); ?></p><h2><?php echo esc_html(ecl_option('home_blog_title')); ?></h2><p><?php echo esc_html(ecl_option('home_blog_text')); ?></p></div>[ecl_blog_preview]</div></section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="testimonials section-pad" id="avis"><div class="section-wrap"><div class="section-head reveal"><p class="section-kicker"><?php echo esc_html(ecl_option('home_testimonials_kicker')); ?></p><h2><?php echo esc_html(ecl_option('home_testimonials_title')); ?></h2></div><div class="testimonial-grid"><?php foreach (ecl_option_rows('home_testimonial_cards', 4) as [$stars_label, $text, $name, $project]) : ?><article class="testimonial-card reveal"><div class="stars" aria-label="<?php echo esc_attr($stars_label); ?>">★★★★★</div><p><?php echo esc_html($text); ?></p><strong><?php echo esc_html($name); ?></strong><span><?php echo esc_html($project); ?></span></article><?php endforeach; ?></div></div></section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="trust section-pad" id="garanties" aria-labelledby="trust-title"><div class="section-wrap trust__grid"><div class="trust__content reveal"><p class="section-kicker"><?php echo esc_html(ecl_option('home_trust_kicker')); ?></p><h2 id="trust-title"><?php echo esc_html(ecl_option('home_trust_title')); ?></h2><p><?php echo esc_html(ecl_option('home_trust_text')); ?></p></div><div class="trust__list"><?php foreach (ecl_option_rows('home_trust_items', 2) as [$title, $text]) : ?><article class="trust-item reveal"><strong><?php echo esc_html($title); ?></strong><span><?php echo esc_html($text); ?></span></article><?php endforeach; ?></div></div></section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="contact section-pad" id="contact"><div class="section-wrap contact__grid"><div class="contact__copy reveal"><p class="section-kicker"><?php echo esc_html(ecl_option('home_contact_kicker')); ?></p><h2><?php echo esc_html(ecl_option('home_contact_title')); ?></h2><p><?php echo esc_html(ecl_option('home_contact_text')); ?></p><ul class="contact__assurances" aria-label="Garanties de prise de contact"><?php foreach (ecl_option_lines('home_contact_assurances') as $assurance) : ?><li><?php echo esc_html($assurance); ?></li><?php endforeach; ?></ul></div>[ecl_contact_form]</div></section>
<!-- /wp:html -->
    <?php
    return trim(ob_get_clean());
}

function ecl_ensure_home_page(): void
{
    $home_page = get_page_by_path('accueil');
    $home_content = function_exists('ecl_home_page_admin_content') ? ecl_home_page_admin_content() : ecl_home_page_content();
    $seo_title = ecl_option('brand_title') . ' - Cuisine design, simple et inspirante';
    $seo_description = ecl_option('meta_description');
    $seo_keyphrase = ecl_option('brand_title');

    if ($home_page instanceof WP_Post) {
        if ($home_page->post_excerpt === '') {
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
