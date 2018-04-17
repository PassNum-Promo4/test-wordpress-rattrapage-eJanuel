<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_theme_support( 'post-thumbnails' );

add_action('init', 'create_post_type');

function create_post_type() {

      register_post_type(
        'plats_menu', array(
          'labels' => array('name' => __( 'Plats du Menu' ), 'singular_name' => __( 'Plat du Menu' ) ),
          'public' => true,
          'has_archive' => true,
          'supports' => array('title', 'editor', 'thumbnail')
        )
      );

      register_post_type(
        'plats_jour', array(
          'labels' => array('name' => __( 'Plats du Jour' ), 'singular_name' => __( 'Plat du Jour' ) ),
          'public' => true,
          'has_archive' => true,
          'menu_icon' => 'dashicons-',
          'supports' => array('title', 'editor', 'thumbnail')
        )
      );
    }

  add_action( 'pre_get_posts', 'add_cpt_to_home' );

function add_cpt_to_home( $query ) {
    if( $query->is_main_query() && $query->is_home() ) {
        $query->set( 'post_type', array( 'post', 'plats_jour') );
    }
}

?>
