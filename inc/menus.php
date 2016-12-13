<?php

	function social_menu() {
	register_nav_menu('social-menu',__( 'Social Menu' ));
	}
	add_action( 'init', 'social_menu' );

?>
