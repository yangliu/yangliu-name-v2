<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div id="newsblog-content" class="col1">
			<?php
			/* Run the loop to output the posts.
			 */
			 get_template_part( 'loop', 'single' );
			?>
</div>

<?php get_footer(); ?>
