<?php
/**
 * The main template file
 */
get_header();
?>

<?php
    if(have_posts()) :
        while(have_posts()) : the_post();
            get_template_part("content", get_post_format());
        endwhile;
        //Previous/next post navigation.
        //TODO:
    else :
        // If no content, include the "No posts found" template.
        get_template_part( 'content', 'none' );
    endif;
?>

<?php
get_sidebar();
get_footer();
?>
