<?php

function tobenski_setup_acf_options() {
    if( function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'        => 'Det Gamle Posthus Settings',
            'menu_title'        => 'DGP Settings',
            'menu_slug'         => 'det-gamle-posthus-settings',
            'capability'        => 'edit_posts',
            'redirect'          => 'true',
            'icon_url'          => 'dashicons-admin-tools'
        ));
    
        acf_add_options_sub_page(array(
            'page_title'        => 'General Settings',
            'menu_title'        => 'General',
            'menu_slug'         => 'det-gamle-posthus-settings-general',
            'parent_slug'       => 'det-gamle-posthus-settings',
        ));
    
        acf_add_options_sub_page(array(
            'page_title'        => 'Stam Oplysninger',
            'menu_title'        => 'Stamoplysninger',
            'menu_slug'         => 'det-gamle-posthus-settings-stam',
            'parent_slug'       => 'det-gamle-posthus-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title'        => 'Footer',
            'menu_title'        => 'Footer',
            'menu_slug'         => 'det-gamle-posthus-settings-footer',
            'parent_slug'       => 'det-gamle-posthus-settings',
        ));

    }

    if( function_exists('acf_add_local_field_group') ):
        /*
        // General Settings
        acf_add_local_field_group(array(
            'key' => 'tobenski_general_settings_group',
            'title' => 'General Settings',
            'fields' => array(
                array(
                    'key' => 'tobenski_general_settings_smiley_url_field',
                    'label' => 'Link til Smiley',
                    'name' => 'smiley_url',
                    'type' => 'url',
                    'instructions' => 'Direkte link til FVST side med smiley rapporter: 
                                        Findes her: <a href="https://www.findsmiley.dk/" target="_blank">https://www.findsmiley.dk/</a>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'http://www.findsmiley.dk/798913',
                    'placeholder' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'det-gamle-posthus-settings-general',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'seamless',
            'label_placement' => 'left',
            'instruction_placement' => 'field',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        // Stamoplysninger
        acf_add_local_field_group(array(
            'key' => 'tobenski_stamoplysninger_settings_group',
            'title' => 'Stam Oplysninger',
            'fields' => array(
                array(
                    'key' => 'tobenski_general_settings_smiley_url_field',
                    'label' => 'Link til Smiley',
                    'name' => 'smiley_url',
                    'type' => 'url',
                    'instructions' => 'Direkte link til FVST side med smiley rapporter: 
                                        Findes her: <a href="https://www.findsmiley.dk/" target="_blank">https://www.findsmiley.dk/</a>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'http://www.findsmiley.dk/798913',
                    'placeholder' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'det-gamle-posthus-settings-general',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'seamless',
            'label_placement' => 'left',
            'instruction_placement' => 'field',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        */

        // Footer
        acf_add_local_field_group(array(
            'key' => 'tobenski_footer_links_settings_group',
            'title' => 'Footer Links',
            'fields' => array(
                array(
                    'key' => 'tobenski_fvst_link_field',
                    'label' => 'Find Smiley Link',
                    'name' => 'fvst_link',
                    'type' => 'url',
                    'instructions' => '<a href="https://www.findsmiley.dk/Sider/Search.aspx?k=Det%20Gamle%20Posthus">Find linket her</a>',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => 'Link til smiley rapporter',
                ),
                array(
                    'key' => 'tobenski_ig_link_field',
                    'label' => 'Instagram link',
                    'name' => 'ig_link',
                    'type' => 'url',
                    'instructions' => 'Link til Instagram profil',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'https://www.instagram.com/detgamleposthus8740/',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'tobenski_ta_link_field',
                    'label' => 'Tripadvisor Link',
                    'name' => 'ta_link',
                    'type' => 'url',
                    'instructions' => 'Link til Tripadvisor',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'https://www.tripadvisor.dk/Restaurant_Review-g1966260-d17629115-Reviews-Det_Gamle_Posthus-Braedstrup_Horsens_East_Jutland_Jutland.html?m=19905',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'tobenski_fb_link_field',
                    'label' => 'Facebook Link',
                    'name' => 'fb_link',
                    'type' => 'url',
                    'instructions' => 'Facebook link',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'https://www.facebook.com/DetGamlePosthus',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'tobenski_gm_link_field',
                    'label' => 'Google Maps Link',
                    'name' => 'gm_link',
                    'type' => 'url',
                    'instructions' => 'Google maps link',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'https://g.page/Post8740',
                    'placeholder' => 'Google Maps Link',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_site_name_field',
                    'label' => 'Virksomhedsnavn',
                    'name' => 'site_name',
                    'type' => 'text',
                    'instructions' => 'Navnet som det skal stå i headers o lign.',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Det Gamle Posthus',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_legal_name_field',
                    'label' => 'Legal name',
                    'name' => 'legal_name',
                    'type' => 'text',
                    'instructions' => 'Nanvnet som det er på fx. cvr.dk',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Det Gamle Posthus, Brædstrup',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_street_address_field',
                    'label' => 'Vejnavn og nummer',
                    'name' => 'street_address',
                    'type' => 'text',
                    'instructions' => 'Vej og nummer',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Jernbanegade 1',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_zip_city_field',
                    'label' => 'Postnummer & By',
                    'name' => 'zip_city',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '8740 Brædstrup',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_cvr_field',
                    'label' => 'CVR Nummer',
                    'name' => 'cvr',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '00000000',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_contact_email_field',
                    'label' => 'Kontakt email',
                    'name' => 'contact_email',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'kontakt@det-gamle-posthus.dk',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_bookeeping_email_field',
                    'label' => 'Bogholderi email',
                    'name' => 'bookeeping_email',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'faktura@det-gamle-posthus.dk',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_phone_field',
                    'label' => 'Telefon nummer',
                    'name' => 'phone',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '+45 42 80 76 78',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'tobenski_opening_hours_main_field',
                    'label' => 'Åbningstider',
                    'name' => 'opening_hours',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => 'tobenski_opening_hours_days_field',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'row',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'tobenski_opening_hours_days_field',
                            'label' => 'Dage',
                            'name' => 'opening_days',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'tobenski_opening_hours_time_field',
                            'label' => 'Tider',
                            'name' => 'opening_time',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'collapsed' => 'tobenski_opening_hours_time_name_field',
                            'min' => 0,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => '',
                            'sub_fields' => array(
                                array(
                                    'key' => 'tobenski_opening_hours_time_name_field',
                                    'label' => 'Tidsrum Navn',
                                    'name' => 'time_name',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                                array(
                                    'key' => 'tobenski_opening_hours_time_frame_field',
                                    'label' => 'Tidsrum',
                                    'name' => 'time_frame',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'det-gamle-posthus-settings-footer',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'seamless',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
    endif;


}