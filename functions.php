<?php
/* Version history
0.1 initial version
0.2 Added child theme options
*/

// Added child theme options
require_once ( get_stylesheet_directory() . '/child-theme-options.php' );

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