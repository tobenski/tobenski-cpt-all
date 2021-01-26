<?php

// Bestilling Custom Post Type

function tobenski_bestilling_custom_post_type()
{
    $labels = array(
        'name'                  => _x( 'Bestillinger', 'Post type general name', 'tobenski' ),
        'singular_name'         => _x( 'Bestilling', 'Post type singular name', 'tobenski' ),
        'menu_name'             => _x( 'Bestillinger', 'Admin Menu text', 'tobenski' ),
        'name_admin_bar'        => _x( 'Bestilling', 'Add New on Toolbar', 'tobenski' ),
        'add_new'               => __( 'Tilføj Ny', 'tobenski' ),
        'add_new_item'          => __( 'Tilføj Ny Bestilling', 'tobenski' ),
        'new_item'              => __( 'Ny Bestilling', 'tobenski' ),
        'edit_item'             => __( 'Opdater Bestilling', 'tobenski' ),
        'view_item'             => __( 'Vis Bestilling', 'tobenski' ),
        'all_items'             => __( 'Alle Bestillinger', 'tobenski' ),
        'search_items'          => __( 'Søg i Bestillinger', 'tobenski' ),
        'not_found'             => __( 'Ingen Bestillinger fundet.', 'tobenski' ),
        'not_found_in_trash'    => __( 'Ingen bestillinger i Papirkurv.', 'tobenski' ),
    );

    $args = array(
        'rewrite' => array('slug' => 'bestilling'),
        'labels' => $labels,
        'description' => 'Bestilling af Catering fra Det Gamle Posthus.',
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 15,
        'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M1591 1448q56 89 21.5 152.5t-140.5 63.5h-1152q-106 0-140.5-63.5t21.5-152.5l503-793v-399h-64q-26 0-45-19t-19-45 19-45 45-19h512q26 0 45 19t19 45-19 45-45 19h-64v399zm-779-725l-272 429h712l-272-429-20-31v-436h-128v436z"/></svg>'),
        'has_archive' => false,
        'supports' => array(),
        
        
    );
    register_post_type( 'bestilling', $args);
}
