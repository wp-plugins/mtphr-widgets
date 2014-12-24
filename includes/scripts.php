<?php

/* --------------------------------------------------------- */
/* !Register scripts - 2.1.15 */
/* --------------------------------------------------------- */

function mtphr_widgets_scripts(){

	// Load the fontastic font
	wp_register_style( 'mtphr-widgets-font', MTPHR_WIDGETS_URL.'assets/fontastic/styles.css', false, MTPHR_WIDGETS_VERSION );
  wp_enqueue_style( 'mtphr-widgets-font' );

  // Load the global widgets stylesheet
	wp_register_style( 'mtphr-widgets', MTPHR_WIDGETS_URL.'assets/css/style.css', false, MTPHR_WIDGETS_VERSION );
  wp_enqueue_style( 'mtphr-widgets' );

  wp_register_script( 'jquery-easing', MTPHR_WIDGETS_URL.'assets/js/jquery.easing.1.3.js', array('jquery'), MTPHR_WIDGETS_VERSION, true );

  // Load the global widgets js
	wp_register_script( 'mtphr-widgets', MTPHR_WIDGETS_URL.'assets/js/script.js', array('jquery','jquery-easing'), MTPHR_WIDGETS_VERSION, true );
  wp_enqueue_script( 'mtphr-widgets' );
  
  // Load mtphr tabs scripts
	wp_register_style( 'mtphr-tabs', MTPHR_WIDGETS_URL.'assets/mtphr-tabs/mtphr-tabs.css', false, MTPHR_WIDGETS_VERSION );
  wp_enqueue_style( 'mtphr-tabs' );
  wp_register_script( 'mtphr-tabs', MTPHR_WIDGETS_URL.'assets/mtphr-tabs/mtphr-tabs.js', false, MTPHR_WIDGETS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'mtphr_widgets_scripts' );



/* --------------------------------------------------------- */
/* !Setup the class scripts - 2.1.10 */
/* --------------------------------------------------------- */

function mtphr_widgets_footer_scripts() {

	if( is_active_widget( false, false, 'mtphr-tabbed-posts' ) ) {
		wp_print_scripts( 'mtphr-tabs' );
		?>
		<script>
			jQuery( window ).load( function() {
				jQuery('.mtphr-tabs').mtphr_tabs();
			});
		</script>
		<?php
	}
}
add_action( 'wp_footer', 'mtphr_widgets_footer_scripts' );


