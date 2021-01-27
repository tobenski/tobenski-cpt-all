<?php 

function tobenski_add_videolink_acf_group()
{

    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'tobenski_6003298101ec7',
            'title' => 'VideoLink',
            'fields' => array(
                array(
                    'key' => 'tobenski_600329940ef6d',
                    'label' => 'Video Link',
                    'name' => 'video_link',
                    'type' => 'file',
                    'instructions' => 'Link til baggrundsvideoen, hvis den bruges på denne side.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '',
                    'mime_types' => 'mp4',
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'side',
            'style' => 'seamless',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

    endif;
}