<?php

function cvd_custom_post(){

    $cvd_label = array (
        'name'          => __('cvd Post', 'textdomain'),
        'singular_name' => __('cvd Post', 'textdomain'),
        'add_new'       => __('Add cvd Post', 'textdomain'),
        'add_new_item'  => __('Add New cvd Post', 'textdomain'),
        'edit_item'     => __('Edit cvd Post', 'textdomain'),
        'all_items'     => __('cvd Post', 'textdomain'),
    );
    
    $cvd_args = array (
        'labels'            => $cvd_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array ('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt'),
    );
    
        register_post_type('cvvd', $cvd_args);
    }
    
    add_action('init', 'cvd_custom_post');