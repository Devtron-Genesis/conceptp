<?php

/* Remove admin bar from front-end */

show_admin_bar(true);

/* Hide WP version */

remove_action('wp_head', 'wp_generator');

/* Change dashboard footer text */

function built_by_vision () {
    
    echo 'Created by <a href="http://visioncreative.com.au">Vision</a> and built with <a href="http://wordpress.org">WordPress</a>.';

} 

add_filter('admin_footer_text', 'built_by_vision');

/* Rebrand login page */

function login_stylesheet() { ?>

    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/style-login.css'; ?>" type="text/css" media="all" />

<?php }

add_action('login_enqueue_scripts', 'login_stylesheet');

/* Change "howdy" message */

function change_howdy( $wp_admin_bar ) {

	$user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$profile_url = get_edit_profile_url( $user_id );
	
	if ( 0 != $user_id ) {
		
		$avatar = get_avatar( $user_id, 28 );
		$howdy = sprintf( __('Welcome back, %1$s!'), $current_user->display_name );
		$class = empty( $avatar ) ? '' : 'with-avatar';
		$wp_admin_bar->add_menu( array( 'id' => 'my-account', 'parent' => 'top-secondary', 'title' => $howdy . $avatar, 'href' => $profile_url, 'meta' => array( 'class' => $class )));
	
	}
}

add_action('admin_bar_menu', 'change_howdy', 11);