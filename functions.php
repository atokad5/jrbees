<?php


function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Global Data');	
}


function wpdocs_excerpt_more( $more ) {
   return ' <a href="'.get_the_permalink().'" class="read-more--btn"> Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>