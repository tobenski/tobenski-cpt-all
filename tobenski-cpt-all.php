<?php
/*
Plugin Name: Tobenski - Custom Post Types for Det Gamle Posthus Website
Plugin URI: https://github.com/tobenski/dgpplugin
Description: Plugin to create the Custom Post Types use in the Tobenski DGP Theme.
Version: 1.0.0
Author: Knud Rishøj
Author URI: https://tobenski.dk
License: GPLv2 or later
Text Domain: tobenski
*/

foreach(glob( plugin_dir_path( __FILE__ ) . "includes/*.php") as $file) {
    include_once $file;
}

function tobenski_create_acfs() {
    tobenski_add_videolink_acf_group();
    tobenski_add_cta_acf_group();
    tobenski_setup_acf_options();
}


add_action( 'acf/init', 'tobenski_create_acfs');

// Required Plugins.
add_action( 'tgmpa_register', 'tobenski_register_required_plugins' );

