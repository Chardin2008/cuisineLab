<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<article class="single-post section-pad">
    <div class="section-wrap single-post__wrap">
        <a class="back-link" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/')); ?>">Retour au journal</a>
        <p class="section-kicker"><?php echo esc_html(get_the_category()[0]->name ?? __('Article', 'easycuisinelab')); ?></p>
        <h1><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <div class="single-post__image"><?php the_post_thumbnail('large'); ?></div>
        <?php endif; ?>
        <div class="single-post__content"><?php the_content(); ?></div>
    </div>
</article>
<?php endwhile; ?>
<?php get_footer(); ?>
