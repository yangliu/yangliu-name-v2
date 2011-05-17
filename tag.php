<?php
/**
 * The template for displaying Tag Archive pages.
 *
 */

get_header(); ?>
<div id="newsblog-content" class="col1">

<h1 class="page-title"><?php
	printf( __( 'Tag Archives: %s', 'yangliu-name-v2' ), '<span>' . single_tag_title( '', false ) . '</span>' );
?></h1>
				<?php
				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'archive' );
				?>
</div>
<?php get_footer(); ?>
