<?php
/*
Plugin Name: Tobenski - Custom Post Types for Det Gamle Posthus Website
Plugin URI: https://github.com/tobenski/dgpplugin
Description: Plugin to crete the Custom Post Types use in the Tobenski DGP Theme.
Version: 1.0.0
Author: Knud Rishøj
Author URI: https://tobenski.dk
License: GPLv2 or later
Text Domain: tobenski
*/

foreach(glob( plugin_dir_path( __FILE__ ) . "includes/*.php") as $file) {
    include_once $file;
}

function tobenski_add_custom_post_types() {
    tobenski_deli_custom_post_type();
    //tobenski_take_away_custom_post_type(); // Moved to tobenski-take-away plugin.
    tobenski_event_custom_post_type();
    tobenski_menu_custom_post_type();
    tobenski_catering_custom_post_type();
    tobenski_homebox_custom_post_type();
    tobenski_bestilling_custom_post_type();
}

function tobenski_create_taxonomys() {
    create_tobenski_types_hierarchical_taxonomy();
    tobenski_catering_type_taxonomy();
}

function tobenski_create_acfs() {
    tobenski_add_videolink_acf_group();
    tobenski_add_cta_acf_group();
    tobenski_add_sitcky_acf_group();
    tobenski_setup_acf_options();
}


add_action( 'init', 'tobenski_create_taxonomys', 0 );
add_action( 'init', 'tobenski_add_custom_post_types', 10 );
add_action( 'acf/init', 'tobenski_create_acfs');

// Required Plugins.
add_action( 'tgmpa_register', 'tobenski_register_required_plugins' );

// SKAL REFCTORS TIL ACF i stedet for hjemmelavet metabox. EVT bare brug CTA group.
// Men det kræver ændreing i front-page.php i theme
/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'tobenski_homebox_meta_boxes_setup' );
add_action( 'load-post-new.php', 'tobenski_homebox_meta_boxes_setup' );
