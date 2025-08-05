<?php get_header(); ?>
<h1><?php single_cat_title(); ?></h1>
<div class="category-news">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'category' );
        endwhile;
        the_posts_pagination();
    else :
        echo '<p>Bu kategoride henüz haber bulunmuyor.</p>';
    endif;
    ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
