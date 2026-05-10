<?php get_header(); ?>
<section class="archive-hero">
    <div class="section-wrap reveal">
        <p class="section-kicker">Archives</p>
        <h1><?php the_archive_title(); ?></h1>
        <?php the_archive_description('<p>', '</p>'); ?>
    </div>
</section>
<section class="section-pad">
    <div class="section-wrap post-grid">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'post-card');
        endwhile;
        ?>
    </div>
</section>
<?php get_footer(); ?>
