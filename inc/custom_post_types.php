<?php

//create post types


function create_my_post_types() {

    //add core values
    $value_args = array(
      'public' => true,
      'label'  => 'Core Values',
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'core_value', $value_args );


    

}

add_action( 'init', 'create_my_post_types' );