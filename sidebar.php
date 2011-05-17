<?php
/* Sidebar - Footer */
?>
<div id="sidebar" class="widget-area cols3" role="complementary">
	<div class="col3 col3-first">
		<ul class="widgets">
			<?php if (!dynamic_sidebar( 'left-footer-widget-area' )) { ?>
			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'yangliu-name-v2' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div>
	<div class="col3">
		<ul class="widgets">
			<?php if (!dynamic_sidebar( 'center-footer-widget-area' )) { ?>
			<li id="tagcloud" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Tag Cloud','yangliu-name-v2'); ?></h3>
				<div class="tagcloud"><?php wp_tag_cloud("smallest=8&largest=22&number=50");?></div>
			</li>
			<?php } ?>
		</ul>
	</div>
	<div class="col3 col3-last">
		<ul class="widgets">
			<?php if (!dynamic_sidebar( 'right-footer-widget-area' )) { ?>
			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'yangliu-name-v2' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>
			<?php } ?>
	</div>
</div>
