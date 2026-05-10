<?php get_header(); ?>
<section class="archive-hero">
    <div class="section-wrap reveal">
        <p class="section-kicker">Journal</p>
        <h1>Conseils & inspirations</h1>
        <p>Des idées fraîches pour imaginer une cuisine plus belle, plus simple et plus inspirante.</p>
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
