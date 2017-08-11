<?php 
    /* Template Name: T1 */
    get_header();
?>
<h1><?php echo the_title(); ?></h1>
<?php
    if (have_posts()) : while (have_posts()) : the_post();
        echo wpautop( the_content() );
    endwhile; endif; 
?>
<?php get_footer(); ?>