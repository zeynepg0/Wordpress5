<?php get_header(); ?>

<div class="news-list">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_format() );
        endwhile;

        the_posts_pagination();
    else :
        echo '<p>Henüz haber bulunmuyor.</p>';
    endif;
    ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
