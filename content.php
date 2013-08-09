<?php
/**
 * Displays the post content. Used as fallback for post formats
 *
 * @package WordPress
 * @subpackage Minimatica
 * @since Minimatica 1.0
 */
 ?>

<div id="content">
	<div class="entry-header">
		<div class="clear"></div>
	</div><!-- .entry-header -->
	<section class="entry-content">
		<?php the_content(); ?>
		<div class="clear"></div>
		<?php wp_link_pages( array( 'before' => '<p class="pagination">' . __( 'Pages' ) . ': ' ) ); ?>
	</section><!-- .entry-content -->
</div><!-- #content -->
