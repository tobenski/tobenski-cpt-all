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
                    'type' => 'url',
                    'instructions' => 'Link til baggrundsvideoen, hvis den bruges på denne side.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'https://detgamleposthusvideo.s3.eu-north-1.amazonaws.com/front.mp4',
                    'placeholder' => '',
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