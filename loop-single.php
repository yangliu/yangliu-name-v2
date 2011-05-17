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
<div id="post-<?php the_ID(); ?>" class="post <?php post_class(); ?>">
	<?php if ( count( get_the_category() ) ) : ?>
	<div class="post-cat"><?php echo get_the_category_list( ', ' ); ?></div>
	<?php endif; ?>
	<h1 class="title title-4"><?php the_title(); ?></h1>
	<div class="post-meta">
		<div class="post-date">Posted on <?php
		echo sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		)
		?></div>
		<?php
			$tags_list = get_the_tag_list( '', ' ' );
			if ( $tags_list ):
		?>
		|
		<div class="post-tags"><?php _e('Keywords: ', 'yangliu-name-v2');?> <?php echo $tags_list; ?></div>
		<?php endif; ?>
		|
		<div class="post-comments"><?php comments_popup_link( __( 'Leave a comment', 'yangliu-name-v2' ), __( '1 Comment', 'yangliu-name-v2' ), __( '% Comments', 'yangliu-name-v2' ) ); ?></div>
		<?php edit_post_link( __( 'Edit', 'twentyten' ), ' | <div class="edit-link">', '</div>' ); ?>
	</div>
	<div class="post-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'yangliu-name-v2' ), 'after' => '</div>' ) ); ?>
	</div>
	<div id="comments"><?php comments_template( '', true ); ?></div>
</div>
<?php endwhile; // End the loop. Whew. ?>

<div class="navigation">
	<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'yangliu-name-v2' ) . '</span> %title' ); ?></div>
	<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'yangliu-name-v2' ) . '</span>' ); ?></div>
</div><!-- #nav-above -->
