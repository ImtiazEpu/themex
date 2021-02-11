<?php

add_action( 'wp_enqueue_scripts', 'themex_child_enqueue' );
function themex_child_enqueue() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

?>