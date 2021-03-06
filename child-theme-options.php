<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'stripped_options', 'stripped_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Child Theme Options', 'ministripped' ), __( 'Child Theme Options', 'ministripped' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}


/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'ministripped' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'ministripped' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'stripped_options' ); ?>
			<?php $options = get_option( 'stripped_theme_options' ); ?>

			<table class="form-table">
				<td>Here you can configure Minimatic-Stripped theme</td>
				<?php
				/**
				 * A stripped checkbox option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'A checkbox', 'ministripped' ); ?></th>
					<td>
						<input id="stripped_theme_options[option1]" name="stripped_theme_options[option1]" type="checkbox" value="1" <?php checked( '1', $options['option1'] ); ?> />
						<label class="description" for="stripped_theme_options[option1]"><?php _e( 'stripped checkbox', 'ministripped' ); ?></label>
					</td>
				</tr>
				
				<tr valign="top"><th scope="row"><?php _e( 'A checkbox', 'ministripped' ); ?></th>
					<td>
						<input id="stripped_theme_options[option2]" name="stripped_theme_options[option2]" type="checkbox" value="1" <?php checked( '1', $options['option2'] ); ?> />
						<label class="description" for="stripped_theme_options[option2]"><?php _e( 'stripped checkbox', 'ministripped' ); ?></label>
					</td>
				</tr>

				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'ministripped' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/