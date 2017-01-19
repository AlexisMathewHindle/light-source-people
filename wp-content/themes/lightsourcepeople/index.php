<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php the_content(); ?>



<?php endwhile; else : ?>

  
<?php endif; ?>


<?php get_footer(); ?>
