<?php

function tobenski_catering_custom_post_type() 
{

    /**
     * Post Type: Catering Menuer.
     */

    $labels = [
        "name" => __("Catering Menuer", "Tobenski"),
        "singular_name" => __("Catering Menu", "Tobenski"),
        "menu_name" => __("Catering Menu", "Tobenski"),
        "all_items" => __("Alle Catering Menuer", "Tobenski"),
        "add_new" => __("Tilføj Ny", "Tobenski"),
        "add_new_item" => __("Tilføj Ny Catering Menu", "Tobenski"),
        "edit_item" => __("Edit Catering Menu", "Tobenski"),
        "new_item" => __("New Catering Menu", "Tobenski"),
        "view_item" => __("View Catering Menu", "Tobenski"),
        "view_items" => __("View Catering Menuer", "Tobenski"),
        "search_items" => __("Search Catering Menuer", "Tobenski"),
        "not_found" => __("No Catering Menuer found", "Tobenski"),
        "not_found_in_trash" => __("No Catering Menuer found in trash", "Tobenski"),
        "parent" => __("Parent Catering Menu:", "Tobenski"),
        "featured_image" => __("Featured image for this Catering Menu", "Tobenski"),
        "set_featured_image" => __("Set featured image for this Catering Menu", "Tobenski"),
        "remove_featured_image" => __("Remove featured image for this Catering Menu", "Tobenski"),
        "use_featured_image" => __("Use as featured image for this Catering Menu", "Tobenski"),
        "archives" => __("Catering Menu archives", "Tobenski"),
        "insert_into_item" => __("Insert into Catering Menu", "Tobenski"),
        "uploaded_to_this_item" => __("Upload to this Catering Menu", "Tobenski"),
        "filter_items_list" => __("Filter Catering Menuer list", "Tobenski"),
        "items_list_navigation" => __("Catering Menuer list navigation", "Tobenski"),
        "items_list" => __("Catering Menuer list", "Tobenski"),
        "attributes" => __("Catering Menuer attributes", "Tobenski"),
        "name_admin_bar" => __("Catering Menu", "Tobenski"),
        "item_published" => __("Catering Menu published", "Tobenski"),
        "item_published_privately" => __("Catering Menu published privately.", "Tobenski"),
        "item_reverted_to_draft" => __("Catering Menu reverted to draft.", "Tobenski"),
        "item_scheduled" => __("Catering Menu scheduled", "Tobenski"),
        "item_updated" => __("Catering Menu updated.", "Tobenski"),
        "parent_item_colon" => __("Parent Catering Menu:", "Tobenski"),
    ];

    $args = [
        "label" => __("Catering Menu", "Tobenski"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => [ "slug" => "catering", "with_front" => true ],
        "query_var" => true,
        "menu_position" => 7,
        "supports" => [ "title", "thumbnail", "editor", "page-attributes" ],
        "taxonomies" => [ "catering_type" ],
    ];

    register_post_type("catering", $args);
    
    if(function_exists('acf_add_local_field_group')) :

        acf_add_local_field_group(
            array(
            'key' => 'group_5e77b361afb63',
            'title' => 'Catering menuer',
            'fields' => array(
                array(
                    'key' => 'field_5e77b365a6bb8',
                    'label' => 'Menu Content',
                    'name' => 'menu_content',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                    'delay' => 0,
                ),
                array(
                    'key' => 'field_5e77b396a6bb9',
                    'label' => 'Pris',
                    'name' => 'pris',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 199,
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => '',
                    'max' => '',
                    'step' => '',
                ),
                array(
                    'key' => 'tobenski_6004b2789dba12',
                    'label' => 'Minimum kuverter',
                    'name' => 'kuverter',
                    'type' => 'text',
                    'instructions' => 'Minimum antal kuverter formuleret som en sætning, Hvis det er Catering parent, kun antal fx. [10]',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Bestil til 10 kuverter',
                    'placeholder' => 'Minimum kuverter',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_5e77b396a6b23',
                    'label' => 'Min. bestillings tid',
                    'name' => 'min_order_time',
                    'type' => 'number',
                    'instructions' => 'Hvor mange dage i forvejen skal menuen/typen bestilles.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 7,
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => '',
                    'max' => '',
                    'step' => '',
                ),
                array(
                    'key' => 'tobenski_6004b2365dba12',
                    'label' => 'Anretnings beskrivelse',
                    'name' => 'short_description',
                    'type' => 'text',
                    'instructions' => 'Meget kort beskrivelse af hvordan maden kommer ud.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Maden er varm, anrettet og klar til servering.',
                    'placeholder' => 'Maden er varm, anrettet og klar til servering.',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '75',
                ),
                array(
                    'key' => 'tobenski_78957f1f5c3fb',
                    'label' => 'Catering Secondary Image',
                    'name' => 'catering_secondary_image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'catering',
                    ),
                ),
            ),
            'menu_order' => 1,
            'position' => 'normal',
            'style' => 'seamless',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'active' => true,
            'description' => '',
            )
        );
        
    endif;

        
}

function tobenski_catering_type_taxonomy() 
{

    /**
     * Taxonomy: Catering Typer.
     */

    $labels = [
        "name" => __("Catering Typer", "Tobenski"),
        "singular_name" => __("catering type", "Tobenski"),
        "menu_name" => __("Catering Typer", "Tobenski"),
        "all_items" => __("All Catering Typer", "Tobenski"),
        "edit_item" => __("Edit catering type", "Tobenski"),
        "view_item" => __("View catering type", "Tobenski"),
        "update_item" => __("Update catering type name", "Tobenski"),
        "add_new_item" => __("Add new catering type", "Tobenski"),
        "new_item_name" => __("New catering type name", "Tobenski"),
        "parent_item" => __("Parent catering type", "Tobenski"),
        "parent_item_colon" => __("Parent catering type:", "Tobenski"),
        "search_items" => __("Search Catering Typer", "Tobenski"),
        "popular_items" => __("Popular Catering Typer", "Tobenski"),
        "separate_items_with_commas" => __("Separate Catering Typer with commas", "Tobenski"),
        "add_or_remove_items" => __("Add or remove Catering Typer", "Tobenski"),
        "choose_from_most_used" => __("Choose from the most used Catering Typer", "Tobenski"),
        "not_found" => __("No Catering Typer found", "Tobenski"),
        "no_terms" => __("No Catering Typer", "Tobenski"),
        "items_list_navigation" => __("Catering Typer list navigation", "Tobenski"),
        "items_list" => __("Catering Typer list", "Tobenski"),
    ];

    $args = [
        "label" => __("Catering Typer", "Tobenski"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'catering_type', 'with_front' => true, ],
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rest_base" => "catering_type",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
            ];
    register_taxonomy("catering_type", [ "catering" ], $args);
}

