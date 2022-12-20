<?php
/**
 * The template for displaying all single resources
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) : 

	the_post();
    ?>

    <div class="cpt-resources-outer-wrapper">
		<div class="cpt-resources-wrapper">
			<h4><?php the_title(); ?></h4>
			<div class="cpt-resources-container">
				<div class="cpt-resources-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php the_field('content'); ?>
			</div>
    	</div>

		<div class="cpt-pagination">
			<?php
			previous_post_link();
			next_post_link();
			?>
		</div>
	</div>


    <?php 

	
endwhile; // End of the loop.

get_footer(); ?>
