<?php
/**
 * The 404 template file.
 */

get_header(); ?>
<div id="newsblog-content" class="col1">
	<div id="post-0" class="post">
		<h2 class="title title-4"><a href="#"><?php _e( 'Not Found', 'yangliu-name-v2' ); ?></a></h2>
		<div class="post-meta">
		</div>
		<div class="post-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive.', 'yangliu-name-v2' ); ?></p>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
