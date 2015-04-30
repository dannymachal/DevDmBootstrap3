<?php

/*
 * wp_dequeue bootstrap.css of the parent DevDemBootStrap3 theme
*/

function dmbs_dequeue_enqueue_scripts() {

    wp_dequeue_style( 'bootstrap.css' );

}
add_action( 'wp_enqueue_scripts', 'dmbs_dequeue_enqueue_scripts', 100 );