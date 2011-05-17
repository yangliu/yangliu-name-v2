<?php
/* the loop */

?>
<?php if ( ! have_posts() ) : ?>
<div id="post-0" class="post">
	<h2 class="title title-4"><a href="#"><?php _e( 'Not Found', 'yangliu-name-v2' ); ?></a></h2>
	<div class="post-meta">
	</div>
	<div class="post-content">
		<p><?php _e( 'Apologies, but no results were found for the requested archive.', 'yangliu-name-v2' ); ?></p>
	</div>
</div>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="title title-4"><?php the_title(); ?></h1>
	<div class="post-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'yangliu-name-v2' ), 'after' => '</div>' ) ); ?>
					<?php edit_post_link( __( 'Edit', 'yangliu-name-v2' ), '<div class="edit-link">', '</div>' ); ?>
	</div>
</div>
<?php endwhile; // End the loop. Whew. ?>
