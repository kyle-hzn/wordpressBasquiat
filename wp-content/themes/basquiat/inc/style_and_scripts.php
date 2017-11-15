<?php
add_action( 'wp_enqueue_scripts', 'ajout_scripts' );


function ajout_scripts() {

// enregistrement d'un nouveau script
//wp_register_script('bootstrap_script', JS_URL.'/bootstrap.min.js', array('jquery'),'1.1', true);
//wp_enqueue_script('bootstrap_script');


wp_register_script('main_js', JS_URL.'/main.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_js');




// enregistrement des styles
wp_register_style( 'google_font_Abril', 'https://fonts.googleapis.com/css?family=Abril+Fatface' );
wp_register_style( 'google_font_Poppins', 'https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' );
wp_enqueue_style( 'google_font_Abril' );
wp_enqueue_style( 'google_font_Poppins' );



wp_register_style( 'bootstrap_style', CSS_URL.'/bootstrap.min.css' );
wp_enqueue_style( 'bootstrap_style' );





// enregistrement des styles
wp_register_style( 'main_style', CSS_URL.'/style.min.css' );
wp_enqueue_style( 'main_style' );


}