<?php

// Homebox Custom Post Types

function tobenski_homebox_custom_post_type() {
    register_post_type( 'homebox', 
        array(
            'rewrite' => array('slug' => 'homeboxes'),
            'labels' => array(
                'name' => 'Frontpage Boxes',
                'singular_name' => 'Frontpage Box',
                'add_new_item' => 'Tilføj Ny Box',
                'edit_item' => 'Rediger Box'
            ),
            'menu-icon' => 'dashicons-admin-comments',
            'public' => false,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'has_archive' => false,
            'menu_position' => 8,
            'supports' => array(
                'title', 'editor', 'page-attributes'
            )
        )
    );
}


// Meta box to Homebox.

/* Display the post meta box. */
function tobenski_homebox_link_meta_box( $post ) { ?>

    <?php wp_nonce_field( basename( __FILE__ ), 'tobenski_homebox_link_nonce' ); ?>
  
    <p>
        <label for="tobenski_homebox_link"><?php _e( "Knappens link", 'example' ); ?></label>
        <br />
        <input class="widefat" type="text" name="tobenski_homebox_link" id="tobenski_homebox_link" 
             value="<?php echo esc_attr( get_post_meta( $post->ID, 'tobenski_homebox_link', true ) ); ?>" size="30" />
        <label for="tobenski_homebox_button"><?php _e( "Tekst på knappen", 'example' ); ?></label>
        <br />
        <input class="widefat" type="text" name="tobenski_homebox_button" id="tobenski_homebox_button" 
             value="<?php echo esc_attr( get_post_meta( $post->ID, 'tobenski_homebox_button', true ) ); ?>" size="30" />
    </p>
  <?php }


/* Save the meta box’s post metadata. */
function tobenski_save_homebox_meta( $post_id, $post ) {

    /* Verify the nonce before proceeding. */
    if ( !isset( $_POST['tobenski_homebox_link_nonce'] ) || !wp_verify_nonce( $_POST['tobenski_homebox_link_nonce'], basename( __FILE__ ) ) )
      return $post_id;
  
    /* Get the post type object. */
    $post_type = get_post_type_object( $post->post_type );
  
    /* Check if the current user has permission to edit the post. */
    if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
      return $post_id;
  
    /* Get the posted data */
    $new_meta_value = $_POST['tobenski_homebox_link'];
  
    /* Get the meta key. */
    $meta_key = 'tobenski_homebox_link';
  
    /* Get the meta value of the custom field key. */
    $meta_value = get_post_meta( $post_id, $meta_key, true );
  
    /* If a new meta value was added and there was no previous value, add it. */
    if ( $new_meta_value && !$meta_value )
      add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  
    /* If the new meta value does not match the old value, update it. */
    elseif ( $new_meta_value && $new_meta_value != $meta_value )
      update_post_meta( $post_id, $meta_key, $new_meta_value );
  
    /* If there is no new meta value but an old value exists, delete it. */
    elseif ( !$new_meta_value && $meta_value )
      delete_post_meta( $post_id, $meta_key, $meta_value );

      /* Get the posted data */
    $new_meta_value = $_POST['tobenski_homebox_button'];
  
    /* Get the meta key. */
    $meta_key = 'tobenski_homebox_button';
  
    /* Get the meta value of the custom field key. */
    $meta_value = get_post_meta( $post_id, $meta_key, true );
  
    /* If a new meta value was added and there was no previous value, add it. */
    if ( $new_meta_value && !$meta_value )
      add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  
    /* If the new meta value does not match the old value, update it. */
    elseif ( $new_meta_value && $new_meta_value != $meta_value )
      update_post_meta( $post_id, $meta_key, $new_meta_value );
  
    /* If there is no new meta value but an old value exists, delete it. */
    elseif ( !$new_meta_value && $meta_value )
      delete_post_meta( $post_id, $meta_key, $meta_value );
  }


/* Create one or more meta boxes to be displayed on the post editor screen. */
function tobenski_add_homebox_meta_boxes() {

    add_meta_box(
      'homebox-link',      // Unique ID
      esc_html__( 'Homebox Link', 'example' ),    // Title
      'tobenski_homebox_link_meta_box',   // Callback function
      'homebox',         // Admin page (or post type)
      'normal',         // Context normal, advanced, side
      'default'         // Priority
    );
  }

/* Meta box setup function. */
function tobenski_homebox_meta_boxes_setup() {

    /* Add meta boxes on the 'add_meta_boxes' hook. */
    add_action( 'add_meta_boxes', 'tobenski_add_homebox_meta_boxes' );

    /* Save post meta on the 'save_post' hook. */
    add_action( 'save_post', 'tobenski_save_homebox_meta', 10, 2 );
  }