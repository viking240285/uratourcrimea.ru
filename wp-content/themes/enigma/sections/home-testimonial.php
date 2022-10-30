<?php
if ( enigma_theme_is_companion_active() ) {
	$testimonial_home = absint(get_theme_mod( 'testimonial_home','1' )) ;
	if ( $testimonial_home == "1" ) {
    	/* Executes the action for services section hook named 'wl_companion_cservice' */
        do_action( 'wl_companion_testimonial_enigma');
    }
}