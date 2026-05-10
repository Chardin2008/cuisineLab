<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<article <?php post_class('post-card reveal'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium_large'); ?>
    <?php else : ?>
        <div class="post-card__blank" aria-hidden="true"></div>
    <?php endif; ?>
    <span><?php echo esc_html(get_the_category()[0]->name ?? __('Journal', 'easycuisinelab')); ?></span>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php echo esc_html(get_the_excerpt()); ?></p>
    <a href="<?php the_permalink(); ?>">Lire l’article</a>
</article>
