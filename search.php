<?php
/**
 * The template for displaying search pages.
 *
 */

get_header(); ?>
<div id="newsblog-content" class="col1">

<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'yangliu-name-v2' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'archive' );
				?>
<?php else : ?>
				<div id="post-0" class="post">
					<h2 class="title title-4"><a href="#"><?php _e( 'Not Found', 'yangliu-name-v2' ); ?></a></h2>
					<div class="post-meta">
					</div>
					<div class="post-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive.', 'yangliu-name-v2' ); ?></p>
					</div>
				</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>
