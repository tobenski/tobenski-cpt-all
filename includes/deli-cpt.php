<?php
// Deli Custom Post Type
function tobenski_deli_custom_post_type()
{
    $labels = array(
        'name'                     => 'Deli Menuer',
        'singular_name'            => 'Deli Menu',
        'add_new'                  => 'Tilføj Ny',
        'add_new_item'             => 'Tilføj Ny Deli Menu',
        'edit_item'                => 'Rediger Deli Menu',
        'new_item'                 => 'Ny Deli Menu',
        'view_item'                => 'Vis Deli Menu',
        'view_items'               => 'Vis Deli Menuer',
        'search_items'             => 'Søg i Deli Menuer',
        'not_found'                => 'Ingen Deli Menuer',
        'not_found_in_trash'       => 'Ingen Deli Menuer i Papirkurv',
        'parent_item_colon'        => 'Parent Page:',
        'all_items'                => 'Alle Deli Menuer',
        'archives'                 => 'Deli Menu Arkiver',
        'attributes'               => 'Deli Menu Attributes',
        'insert_into_item'         => 'Insert into Deli Menu', 
        'uploaded_to_this_item'    => 'Uploaded til denne Deli Menu',
        'featured_image'           => 'Udvalgt billede',
        'set_featured_image'       => 'Vælg udvalgt billede',
        'remove_featured_image'    => 'Fjern udvalgt billede',
        'use_featured_image'       => 'Brug som udvalgt billede',
        'filter_items_list'        => 'Filtrer Deli Menu liste', 
        'items_list_navigation'    => 'Deli Menu liste navigation',
        'items_list'               => 'Deli Menu liste',
        'item_published'           => 'Deli Menu offentliggjort',
        'item_published_privately' => 'Deli Menu offentliggjort privat',
        'item_reverted_to_draft'   => 'Deli Menu lavet om til kladde',
        'item_scheduled'           => 'Deli Menu planlagt',
        'item_updated'             => 'Deli Menu opdateret',
    );

    $args = array(
        'rewrite' => array('slug' => 'deli'),
        'labels' => $labels,
        'description' => 'Menuer til Det Gamle Posthus, delikatesse.',
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-cart',
        'has_archive' => false,
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        
        
    );
    
    register_post_type( 'deli', $args);
}