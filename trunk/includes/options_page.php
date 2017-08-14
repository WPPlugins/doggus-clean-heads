<?php 
function doggusclean_options_page() {
	
	global $doggusclean_options;
 
	ob_start(); ?>
		<div class="wrap">
		<h2>Doggus Clean Heads</h2>
 
		<form method="post" action="options.php">
 			<?php settings_fields('doggusclean_settings_group'); ?>
			
			<h4><?php _e('Select the items you want to remove from your head section', 'doggusclean_domain'); ?></h4>
				<p><input id="doggusclean_settings[wp_gen]" type="checkbox" name="doggusclean_settings[wp_gen]" value="1" <?php checked(1, $doggusclean_options['wp_gen']); ?> />
			<label class="description" for="doggusclean_settings[wp_gen]"><?php _e('Remove XHTML generator showing WP version', 'doggusclean_domain'); ?></label> <p>
			<p><input id="doggusclean_settings[gfl]" type="checkbox" name="doggusclean_settings[gfl]" value="1" <?php checked(1, $doggusclean_options['gfl']); ?> />
			<label class="description" for="doggusclean_settings[gfl]"><?php _e('Remove links RSS feeds', 'doggusclean_domain'); ?></label> <p>
			
			<p><input id="doggusclean_settings[wlm]" type="checkbox" name="doggusclean_settings[wlm]" value="1" <?php checked(1, $doggusclean_options['wlm']); ?> />
			<label class="description" for="doggusclean_settings[wlm]"><?php _e('Remove link to the WLM-manifest', 'doggusclean_domain'); ?></label> <p>
			
			<p><input id="doggusclean_settings[pl]" type="checkbox" name="doggusclean_settings[pl]" value="1" <?php checked(1, $doggusclean_options['pl']); ?> />
			<label class="description" for="doggusclean_settings[pl]"><?php _e('Remove links related to other posts', 'doggusclean_domain'); ?></label> <p>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'doggusclean_domain'); ?>" />
			</p>
 
		</form>
 <p class="description">Doggus Clean Heads is created by <a title="Wordpress Webdesign" href="http://studio-doggus.nl/" target="_blank">Studio Doggus</a>, If you have any suggestions, leave us a message<a href="http://studio-doggus.nl/contact/" title="Wordpress Development Groningen" target="_blank">here.</a></p>
	</div>
	<?php
	echo ob_get_clean();
}

function doggusclean_add_options_link() {
	add_options_page('Doggus Head Cleaner', 'Doggus Head Cleaner', 'manage_options', 'doggusclean-options', 'doggusclean_options_page');
}
add_action('admin_menu', 'doggusclean_add_options_link');

function doggusclean_register_settings() {
	// creates our settings in the options table
	register_setting('doggusclean_settings_group', 'doggusclean_settings');
}
add_action('admin_init', 'doggusclean_register_settings');
?>