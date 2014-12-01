<?php
	
function avWorld_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());

}

register_nav_menus(array(
		'primary' => __( 'Primary Menu' ),
		'footer' => __( 'Footer Menu' )
));


$loginTestGlobalVar = false;

/**
* login_Test 
* checks if a user is logged in. forces them to the login page if not 
*
* Credit to Elliott Post @ http://ellytronic.media/
*
* @since Nov 28, 2014
*/

/*
function my_Login_Test() {

	$cookieName = 'avWorld';

	if ( !isset($__COOKIE[$cookieName] )) {
		// if cookie doesn't exist
		return false;
	}

	$cookieVal = trim( $__COOKIE[$cookieName] );

	if ( empty($cookieVal) ) {
		// if cookie is empty, could be forged
		unset($__COOKIE[$cookieName]);
		myShowLoginPage();
		return false;
	}

	if ( !cookieVal IS IN DB ) {
	// if email is not in database, cookie is corrupt or possibly forged
		unset( $__COOKIE[$cookieName] );
		myShowLoginPage();
		return false;
	}

	// user logged in (passed tests above)
	global $myLoginTestGlobalVar;
	$myLoginTestGlobalVar = true;

}

if ( !is_admin() ) {
	add_action( 'template_redirect' , 'my_Login_Test' ); // ADD: Correct hook
}


function myShowLoginPage() {
	// If user not logged in, redirects to login page
	global $myLoginTestGlobalVar;

	if (!$myLoginTestGlobalVar) {
		// user not logged in
		get_template_part( 'login-page' );
		return; // important
	}
}




add_action( 'wp_enqueue_scripts' , 'avWorld_resources' );
*/