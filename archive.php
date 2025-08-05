<?php get_header(); ?>
<h1><?php the_archive_title(); ?></h1>
<div class="archive-news">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'archive' );
        endwhile;
        the_posts_pagination();
    else :
        echo '<p>Arşivde içerik bulunamadı.</p>';
    endif;
    ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
