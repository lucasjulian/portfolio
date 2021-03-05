<?php
    function wpm_enqueue_styles(){
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/2b2495badb.js');
    }
    add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

    function wpc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'wpc_mime_types');