<?php

// Menu Custom Post Type

function tobenski_menu_custom_post_type()
{
    $labels = array(
        'name'                     => 'A la Carte Menuer',
        'singular_name'            => 'Menu',
        'add_new'                  => 'Tilføj Ny',
        'add_new_item'             => 'Tilføj Ny Menu',
        'edit_item'                => 'Rediger Menu',
        'new_item'                 => 'Ny Menu',
        'view_item'                => 'Vis Menu',
        'view_items'               => 'Vis Menuer',
        'search_items'             => 'Søg i Menuer',
        'not_found'                => 'Ingen Menuer',
        'not_found_in_trash'       => 'Ingen Menuer i Papirkurv',
        'parent_item_colon'        => array( null, __( 'Parent Page:' ) ),
        'all_items'                => 'Alle Menuer',
        'archives'                 => 'Menu Arkiver',
        'attributes'               => 'Menu Attributes',
        'insert_into_item'         => 'Insert into Menu', 
        'uploaded_to_this_item'    => 'Uploaded til denne Menu',
        'featured_image'           => 'Udvalgt billede',
        'set_featured_image'       => 'Vælg udvalgt billede',
        'remove_featured_image'    => 'Fjern udvalgt billede',
        'use_featured_image'       => 'Brug som udvalgt billede',
        'filter_items_list'        => 'Filtrer Menu liste', 
        'items_list_navigation'    => 'Menu liste navigation',
        'items_list'               => 'Menu liste',
        'item_published'           => 'Menu offentliggjort',
        'item_published_privately' => 'Menu offentliggjort privat',
        'item_reverted_to_draft'   => 'Menu lavet om til kladde',
        'item_scheduled'           => 'Menu planlagt',
        'item_updated'             => 'Menu opdateret',
    );

    $args = array(
        'rewrite' => array('slug' => 'menuer'),
        'labels' => $labels,
        'description' => 'Menuer til Det Gamle Posthus, menukort.',
        'public' => true,
        'hierarchical' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-clipboard',
        'has_archive' => false,        
        'taxonomies' => array( 'menu_type' ),
        'supports' => array(
            'title', 'editor', 'page-attributes', 'thumbnail'
        ),
        
        
    );
    register_post_type( 'menu', $args);

    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_600380f86ea98',
            'title' => 'Menukort',
            'fields' => array(
                array(
                    'key' => 'field_600380ffe45b0',
                    'label' => 'Avalibel',
                    'name' => 'avalibel',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Gældende fra [dato]. [måned] til & med [dato]. [måned].',
                    'placeholder' => 'Gældende fra [dato]. [måned] til & med [dato]. [måned].',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_600380ffe45b1',
                    'label' => 'Note',
                    'name' => 'note',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Serveres mellem [start] & [slut].',
                    'placeholder' => 'Serveres mellem [start] & [slut].',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'menu',
                    ),
                ), 
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        endif;
}

// Create taxonomy 'menu_type' for CPT 'menu' 
function create_tobenski_types_hierarchical_taxonomy() { 
  $labels = array(
    'name' => _x( 'Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Søg i Typer' ),
    'all_items' => __( 'Alle Typer' ),
    'parent_item' => __( 'Overordnet Type' ),
    'parent_item_colon' => __( 'Orverornet Type:' ),
    'edit_item' => __( 'Rediger Type' ), 
    'update_item' => __( 'Opdater Type' ),
    'add_new_item' => __( 'Tilføj Ny Type' ),
    'new_item_name' => __( 'Ny Types Navn' ),
    'menu_name' => __( 'Menu Type' ),
  ); 
// Now register the taxonomy
  register_taxonomy('menu_type','menu', array(
    'description' => 'Menu typer',
    'hierarchical' => true,
    'public' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'menukort' ),
    'show_admin_column' => true,
  ));
 // Seed the taxonomy 
    wp_insert_term(
        'Frokost', 
        'menu_type', 
        array(
            'description' => 'Frokost menuer',
            'slug' => 'frokost',
        ));    
    wp_insert_term(
        'Eftermiddag', 
        'menu_type', 
        array(
            'description' => 'Eftermiddags menuer',
            'slug' => 'eftermiddag',
        ));
    wp_insert_term(
        'Aften', 
        'menu_type', 
        array(
            'description' => 'Aften menuer',
            'slug' => 'aften',
        ));    
    wp_insert_term(
        'Børne', 
        'menu_type', 
        array(
            'description' => 'Børne menuer',
            'slug' => 'born',
        ));
    wp_insert_term(
        'Anbefaler', 
        'menu_type', 
        array(
            'description' => 'Anbefaler menuer',
            'slug' => 'anbefaler',
        ));
}

