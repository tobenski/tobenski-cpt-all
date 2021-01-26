<?php

// Menu Custom Post Type
function tobenski_take_away_custom_post_type()
{
    $labels = array(
        'name'                     => 'Take Away Menuer',
        'singular_name'            => 'Take Away Menu',
        'add_new'                  => 'Tilføj Ny',
        'add_new_item'             => 'Tilføj Ny Take Away Menu',
        'edit_item'                => 'Rediger Take Away Menu',
        'new_item'                 => 'Ny Take Away Menu',
        'view_item'                => 'Vis Take Away Menu',
        'view_items'               => 'Vis Take Away Menuer',
        'search_items'             => 'Søg i Take Away Menuer',
        'not_found'                => 'Ingen Take Away Menuer',
        'not_found_in_trash'       => 'Ingen Take Away Menuer i Papirkurv',
        'parent_item_colon'        => array( null, __( 'Parent Page:' ) ),
        'all_items'                => 'Alle Take Away Menuer',
        'archives'                 => 'Take Away Menu Arkiver',
        'attributes'               => 'Take Away Menu Attributes',
        'insert_into_item'         => 'Insert into Take Away Menu', 
        'uploaded_to_this_item'    => 'Uploaded til denne Take Away Menu',
        'featured_image'           => 'Udvalgt billede',
        'set_featured_image'       => 'Vælg udvalgt billede',
        'remove_featured_image'    => 'Fjern udvalgt billede',
        'use_featured_image'       => 'Brug som udvalgt billede',
        'filter_items_list'        => 'Filtrer Take Away Menu liste', 
        'items_list_navigation'    => 'Take Away Menu liste navigation',
        'items_list'               => 'Take Away Menu liste',
        'item_published'           => 'Take Away Menu offentliggjort',
        'item_published_privately' => 'Take Away Menu offentliggjort privat',
        'item_reverted_to_draft'   => 'Take Away Menu lavet om til kladde',
        'item_scheduled'           => 'Take Away Menu planlagt',
        'item_updated'             => 'Take Away Menu opdateret',
    );

    $args = array(
        'rewrite' => array('slug' => 'take-away'),
        'labels' => $labels,
        'description' => 'Menuer til Det Gamle Posthus, Take Away.',
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-car',
        'has_archive' => false,
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        
        
    );
    register_post_type( 'take_away', $args);
}

