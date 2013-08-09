<?php
if ( ! function_exists( 'minimatica_nav_menu' ) ) :
/**
 * Finnish translation for static Home button
 */
function minimatica_nav_menu() { ?>
	<div id="primary-nav" class="nav">
		<ul>
			<li><a href="<?php echo home_url(); ?>" rel="home"><?php _e( 'Pääsivu', 'minimatica' ); ?></a></li>
			<?php wp_list_categories( 'title_li=' ); ?>
		</ul>
	</div><!-- #primary-nav -->
	<?php
}
endif;