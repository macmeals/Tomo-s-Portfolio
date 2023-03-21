<?php
function my_template_css_js() {
  // wp_enqueue_script('bundle_js', get_theme_file_uri( '/assets/js/bundle.js' ) ,array() );
  wp_enqueue_style( 'my-styles', get_theme_file_uri( '/css/style.css' ) ,array() );
  wp_enqueue_style( 'my-swiper-bundle', get_theme_file_uri( '/css/swiper-bundle.min.css' ) ,array() );
  wp_enqueue_style( 'my-swiper-pagination', get_theme_file_uri( '/css/swiper-pagination.css' ) ,array() );
  wp_enqueue_script('my-jquery', get_theme_file_uri( '/js/jquery-3.6.0.min.js' ) ,array() );
  wp_enqueue_script('my-hamberger', get_theme_file_uri( '/js/hamberger.js' ) ,array() );
}
add_action( 'wp_enqueue_scripts', 'my_template_css_js' );