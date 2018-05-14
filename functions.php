<?php
	function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Global Data');
	
}
?>