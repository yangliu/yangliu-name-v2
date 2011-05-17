<?php
/**
 * Template Name: Blog Page
 *
 */

get_header();?>
<div id="newsblog-content" class="col1">
			<?php
			/* Run the loop to output the posts.
			 */
			 get_template_part( 'loop', 'index' );
			?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
