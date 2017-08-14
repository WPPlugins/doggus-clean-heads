<?php
global $doggusclean_options;
	$wpg = $doggusclean_options['wp_gen'];
	$gflink = $doggusclean_options['gfl'];
	$wlmf = $doggusclean_options['wlm'];
	$pl = $doggusclean_options['pl'];
	
function disable_stuff( $data ) {
	return false;
}
if($wpg == true) {
function doggus_remove_version() {
return '';
}
add_filter('the_generator', 'doggus_remove_version');

}
if($gflink == true) {
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
}
if($wlmf == true) {
remove_action( 'wp_head', 'wlwmanifest_link' );
}

if($pl == true) {
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action('wp_head', 'previous_post_rel_link', 10, 0);
add_filter( 'previous_post_rel_link', 'disable_stuff' );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
}

?>
