<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<article class="single-post section-pad">
    <div class="section-wrap single-post__wrap">
        <h1><?php the_title(); ?></h1>
        <div class="single-post__content"><?php the_content(); ?></div>
    </div>
</article>
<?php endwhile; ?>
<?php get_footer(); ?>
