<?php

function cvd_support() {
    register_nav_menus(
        array(
            'header_menu'       =>  __('header menu', 'text_domain')
        )
        );
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','cvd_support');

