<?php get_header(); ?>
<section class="archive-hero">
    <div class="section-wrap reveal">
        <p class="section-kicker"><?php echo esc_html(ecl_option('blog_archive_kicker')); ?></p>
        <h1><?php echo esc_html(ecl_option('blog_archive_title')); ?></h1>
        <p><?php echo esc_html(ecl_option('blog_archive_text')); ?></p>
    </div>
</section>
<section class="section-pad">
    <div class="section-wrap post-grid">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', 'post-card');
            endwhile;
        else :
            echo '<p>Aucun article pour le moment.</p>';
        endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>
