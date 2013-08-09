<?php
/**
 * Displays the content of posts with gallery format
 *
 * @package WordPress
 * @subpackage Minimatica
 * @since Minimatica 1.0
 */
 ?>

<div id="content">
	<section class="entry-content">
		<?php minimatica_post_gallery(); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
		<?php wp_link_pages( array( 'before' => '<p class="pagination">' . __( 'Pages' ) . ': ' ) ); ?>
	</section><!-- .entry-content -->
	<div class="entry-header">
		<aside class="entry-meta">
			<?php the_tags( '<div class="entry-tags">', ' ', '</div>' ); ?>
		</aside><!-- .entry-meta -->
		<div class="clear"></div>
	</div><!-- .entry-header -->
	<div class="clear"></div>
</div><!-- #content -->
