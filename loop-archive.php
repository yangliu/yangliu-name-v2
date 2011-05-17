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
	<h2 class="title title-4"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yangliu-name-v2' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
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
		<?php edit_post_link( __( 'Edit', 'yangliu-name-v2' ), ' | <div class="edit-link">', '</div>' ); ?>
	</div>
	<div class="post-content">
					<?php the_excerpt(); ?>
	</div>
</div>
<?php endwhile; // End the loop. Whew. ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<?php wp_page_navi();?>
<?php endif; ?>
