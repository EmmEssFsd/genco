<?php
/*
Template Name: No Sidebar
Template By : Techbymak
Tempalte designed By : Akshay Makadiya
URL : http://techbymak.com
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div style=�width:850px !important;�>
<?php the_content(�
Read More �</p>�); ?>
<?php edit_post_link(�Update this post�, �<p>�, �</p>�); ?>
<?php endwhile; else: ?>
<p><?php _e(�ooops!! , No match found�); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>